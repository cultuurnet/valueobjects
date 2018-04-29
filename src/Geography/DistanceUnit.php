<?php

namespace ValueObjects\Geography;

use ValueObjects\Enum\Enum;

/**
 * @method static DistanceUnit FOOT()
 * @method static DistanceUnit METER()
 * @method static DistanceUnit KILOMETER()
 * @method static DistanceUnit MILE()
 */
class DistanceUnit extends Enum
{
    const FOOT      = 'ft';
    const METER     = 'mt';
    const KILOMETER = 'km';
    const MILE      = 'mi';
}
