<?php

namespace ValueObjects\Tests\Number;

use ValueObjects\Number\Natural;
use ValueObjects\Tests\TestCase;

class NaturalTest extends TestCase
{
    /**
     * @expectedException ValueObjects\Exception\InvalidNativeArgumentException
     * @expectedExceptionMessage Argument "-2" is invalid. Allowed types for argument are "int (>=0)".
     */
    public function testInvalidNativeArgument()
    {
        new Natural(-2);
    }
}
