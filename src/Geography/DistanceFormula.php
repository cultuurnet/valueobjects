<?php

namespace ValueObjects\Geography;

use ValueObjects\Enum\Enum;

/**
 * @method static DistanceFormula FLAT()
 * @method static DistanceFormula HAVERSINE()
 * @method static DistanceFormula VINCENTY()
 */
class DistanceFormula extends Enum
{
    const FLAT      = 'flat';
    const HAVERSINE = 'haversine';
    const VINCENTY  = 'vincenty';
}
