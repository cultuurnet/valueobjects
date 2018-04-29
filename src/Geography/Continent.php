<?php

namespace ValueObjects\Geography;

use ValueObjects\Enum\Enum;

/**
 * @method static Continent AFRICA()
 * @method static Continent EUROPE()
 * @method static Continent ASIA()
 * @method static Continent NORTH_AMERICA()
 * @method static Continent SOUTH_AMERICA()
 * @method static Continent ANTARCTICA()
 * @method static Continent AUSTRALIA()
 */
class Continent extends Enum
{
    const AFRICA        = 'Africa';
    const EUROPE        = 'Europe';
    const ASIA          = 'Asia';
    const NORTH_AMERICA = 'North America';
    const SOUTH_AMERICA = 'South America';
    const ANTARCTICA    = 'Antarctica';
    const AUSTRALIA     = 'Australia';
}
