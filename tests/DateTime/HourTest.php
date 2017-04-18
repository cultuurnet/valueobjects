<?php

namespace ValueObjects\Tests\DateTime;

use ValueObjects\Tests\TestCase;
use ValueObjects\DateTime\Hour;

class HourTest extends TestCase
{
    public function testFromNative()
    {
        $fromNativeHour  = Hour::fromNative(21);
        $constructedHour = new Hour(21);

        $this->assertTrue($fromNativeHour->sameValueAs($constructedHour));
    }

    public function testNow()
    {
        $hour = Hour::now();
        $this->assertEquals(date('G'), $hour->toNative());
    }

    /**
     * @expectedException ValueObjects\Exception\InvalidNativeArgumentException
     * @expectedExceptionMessage Argument "24" is invalid. Allowed types for argument are "int (>=0, <=23)".
     */
    public function testInvalidHour()
    {
        new Hour(24);
    }

}
