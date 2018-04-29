<?php

namespace ValueObjects\Person;

use ValueObjects\Enum\Enum;

/**
 * @method static Gender MALE()
 * @method static Gender FEMALE()
 * @method static Gender OTHER()
 */
class Gender extends Enum
{
    const MALE   = 'male';
    const FEMALE = 'female';
    const OTHER  = 'other';
}
