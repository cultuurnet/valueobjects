<?php

namespace ValueObjects\Tests\Identity;

use ValueObjects\Identity\MacAddress;

final class MacAddressTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException ValueObjects\Exception\InvalidNativeArgumentException
     * @expectedExceptionMessage Argument "281474976710656" is invalid. Allowed types for argument are "mac address (<= 281,474,976,710,655)".
     */
    public function testTooBigNativeArgument()
    {
        new MacAddress(pow(2, 48));
    }

    /**
     * @expectedException ValueObjects\Exception\InvalidNativeArgumentException
     * @expectedExceptionMessage Argument "-1" is invalid. Allowed types for argument are "int (>=0)".
     */
    public function testNegativeNativeArgument()
    {
        new MacAddress(-1);
    }

    public function testValidNativeArgument()
    {
        $macAddress = new MacAddress(pow(2, 48) -1);
        $this->assertInstanceOf('ValueObjects\Identity\MacAddress', $macAddress);
    }

    public function testValidMacAddressWithDash()
    {
        $macAddress = MacAddress::fromString('1A-2b-3C-4d-5E-6f');
        $this->assertInstanceOf('ValueObjects\Identity\MacAddress', $macAddress);
    }

    public function testValidMacAddressWithColon()
    {
        $macAddress = MacAddress::fromString('1A:2b:3C:4d:5E:6f');
        $this->assertInstanceOf('ValueObjects\Identity\MacAddress', $macAddress);
    }

    public function testValidMacAddressWithDot()
    {
        $macAddress = MacAddress::fromString('1A2b.3C4d.5E6f');
        $this->assertInstanceOf('ValueObjects\Identity\MacAddress', $macAddress);
    }

    /** @expectedException ValueObjects\Exception\InvalidNativeArgumentException */
    public function testInvalidMacAddressWithBothDashAndColon()
    {
        MacAddress::fromString('1a:2B-3c:4D-5e');
    }

    /** @expectedException ValueObjects\Exception\InvalidNativeArgumentException */
    public function testInvalidMacAddressWithWrongLength()
    {
        MacAddress::fromString('1a-2B-3c-4D');
    }

    public function testDashMacAddressAndColonMacAddressHaveSameValue()
    {
        $macWithDash = MacAddress::fromString('1A-2b-3C-4d-5E-6f');
        $macWithColon = MacAddress::fromString('1A:2b:3C:4d:5E:6f');

        $this->assertTrue($macWithDash->sameValueAs($macWithColon));
    }

    public function testDashMacAddressAndDotMacAddressHaveSameValue()
    {
        $macWithDash = MacAddress::fromString('1A-2b-3C-4d-5E-6f');
        $macWithDot = MacAddress::fromString('1A2b.3C4d.5E6f');

        $this->assertTrue($macWithDash->sameValueAs($macWithDot));
    }

    public function testToStringWithDash()
    {
        $macAddress = MacAddress::fromString('1a-2b-3c-4d-5e-6f');

        $this->assertEquals('1a-2b-3c-4d-5e-6f', $macAddress->toStringWithDash());
    }

    public function testToStringWithColon()
    {
        $macAddress = MacAddress::fromString('00:00:00:00:00:00');

        $this->assertEquals('00:00:00:00:00:00', $macAddress->toStringWithColon());
    }

    public function testToStringWithDot()
    {
        $macAddress = MacAddress::fromString('ffff.ffff.ffff');

        $this->assertEquals('ffff.ffff.ffff', $macAddress->toStringWithDot());
    }
}
