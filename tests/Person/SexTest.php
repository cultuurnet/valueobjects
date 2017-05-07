<?php

namespace ValueObjects\Tests\Number;

use ValueObjects\Person\Sex;
use ValueObjects\Tests\TestCase;

class SexTest extends TestCase
{
    public function testToNative()
    {
        $gender = Sex::FEMALE();
        $this->assertEquals(Sex::FEMALE, $gender->toNative());
    }

    public function testSameValueAs()
    {
        $male1 = Sex::MALE();
        $male2 = Sex::MALE();

        $this->assertTrue($male1->sameValueAs($male2));
        $this->assertTrue($male2->sameValueAs($male1));

        $mock = $this->getMock('ValueObjects\ValueObjectInterface');
        $this->assertFalse($male1->sameValueAs($mock));
    }

    public function testToString()
    {
        $sex = Sex::FEMALE();
        $this->assertEquals('female', $sex->__toString());
    }
}
