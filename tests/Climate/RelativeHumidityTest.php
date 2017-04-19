<?php

namespace ValueObjects\Tests\Climate;

use ValueObjects\Tests\TestCase;
use ValueObjects\Climate\RelativeHumidity;

class RelativeHumidityTest extends TestCase
{
    public function testFromNative()
    {
        $fromNativeRelHum  = RelativeHumidity::fromNative(70);
        $constructedRelHum = new RelativeHumidity(70);

        $this->assertTrue($fromNativeRelHum->sameValueAs($constructedRelHum));
    }

    /**
     * @expectedException \ValueObjects\Exception\InvalidNativeArgumentException
     * @expectedExceptionMessage Argument "128" is invalid. Allowed types for argument are "int (>=0, <=100)".
     */
    public function testInvalidRelativeHumidity()
    {
        new RelativeHumidity(128);
    }
}
