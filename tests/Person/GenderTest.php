<?php

namespace ValueObjects\Tests\Number;

use ValueObjects\Person\Gender;
use ValueObjects\Tests\TestCase;

class GenderTest extends TestCase
{
    public function testToNative()
    {
        $gender = Gender::ABIMEGENDER();
        $this->assertEquals(Gender::ABIMEGENDER, $gender->toNative());
    }

    public function testSameValueAs()
    {
        $gender1 = Gender::ABIMEGENDER();
        $gender2 = Gender::ABIMEGENDER();

        $this->assertTrue($gender1->sameValueAs($gender1));
        $this->assertTrue($gender2->sameValueAs($gender2));

        $mock = $this->getMock('ValueObjects\ValueObjectInterface');
        $this->assertFalse($gender1->sameValueAs($mock));
    }

    public function testToString()
    {
        $sex = Gender::ABIMEGENDER();
        $this->assertEquals('abimegender', $sex->__toString());
    }
}
