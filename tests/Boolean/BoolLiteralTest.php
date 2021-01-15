<?php

namespace ValueObjects\Tests\Boolean;

use ValueObjects\Boolean\BooleanString;
use ValueObjects\Boolean\BoolLiteral;
use ValueObjects\ValueObjectInterface;

class BoolLiteralTest extends BooleanTestCase
{
    /** @dataProvider booleanValuesProvider */
    public function testFromBooleanString($boolean, $expectedBool)
    {
        $booleanString = BooleanString::fromNative($boolean);
        $fromBooleanBoolLiteral = BoolLiteral::fromBooleanString($booleanString);
        $constructedBoolLiteral = new BoolLiteral($expectedBool);

        $this->assertTrue($fromBooleanBoolLiteral->sameValueAs($constructedBoolLiteral));
    }

    public function testFromNative()
    {
        $fromNativeBoolLiteral = BoolLiteral::fromNative(true);
        $constructedBoolLiteral = new BoolLiteral(true);

        $this->assertTrue($fromNativeBoolLiteral->sameValueAs($constructedBoolLiteral));
    }

    public function testToNative()
    {
        $boolLiteral1 = new BoolLiteral(true);
        $boolLiteral2 = new BoolLiteral(false);

        $this->assertTrue($boolLiteral1->toNative());
        $this->assertFalse($boolLiteral2->toNative());
    }

    public function testSameValueAs()
    {
        $boolLiteral1 = new BoolLiteral(true);
        $boolLiteral2 = new BoolLiteral(true);
        $boolLiteral3 = new BoolLiteral(false);

        $this->assertTrue($boolLiteral1->sameValueAs($boolLiteral2));
        $this->assertTrue($boolLiteral2->sameValueAs($boolLiteral1));
        $this->assertFalse($boolLiteral1->sameValueAs($boolLiteral3));

        $mock = $this->createMock(ValueObjectInterface::class);
        $this->assertFalse($boolLiteral1->sameValueAs($mock));
    }

    /** @expectedException \ValueObjects\Exception\InvalidNativeArgumentException */
    public function testInvalidNativeArgument()
    {
        new BoolLiteral(1);
    }

    public function testToString()
    {
        $boolLiteral1 = new BoolLiteral(true);
        $boolLiteral2 = new BoolLiteral(false);

        $this->assertEquals('true', $boolLiteral1->__toString());
        $this->assertEquals('false', $boolLiteral2->__toString());
    }
}
