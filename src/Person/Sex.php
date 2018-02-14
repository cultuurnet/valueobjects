<?php

namespace ValueObjects\Person;

use ValueObjects\Enum\Enum;

class Sex extends Enum
{
    const MALE   = 'male';
    const FEMALE = 'female';
}
