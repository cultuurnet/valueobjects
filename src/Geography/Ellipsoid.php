<?php

namespace ValueObjects\Geography;

use ValueObjects\Enum\Enum;

/**
 * @method static Ellipsoid AIRY()
 * @method static Ellipsoid AUSTRALIAN_NATIONAL()
 * @method static Ellipsoid BESSEL_1841()
 * @method static Ellipsoid BESSEL_1841_NAMBIA()
 * @method static Ellipsoid CLARKE_1866()
 * @method static Ellipsoid CLARKE_1880()
 * @method static Ellipsoid EVEREST()
 * @method static Ellipsoid FISCHER_1960_MERCURY()
 * @method static Ellipsoid FISCHER_1968()
 * @method static Ellipsoid GRS_1967()
 * @method static Ellipsoid GRS_1980()
 * @method static Ellipsoid HELMERT_1906()
 * @method static Ellipsoid HOUGH()
 * @method static Ellipsoid INTERNATIONAL()
 * @method static Ellipsoid KRASSOVSKY()
 * @method static Ellipsoid MODIFIED_AIRY()
 * @method static Ellipsoid MODIFIED_EVEREST()
 * @method static Ellipsoid MODIFIED_FISCHER_1960()
 * @method static Ellipsoid SOUTH_AMERICAN_1969()
 * @method static Ellipsoid WGS60()
 * @method static Ellipsoid WGS66()
 * @method static Ellipsoid WGS72()
 * @method static Ellipsoid WGS84()
 */
class Ellipsoid extends Enum
{
    const AIRY                  = 'AIRY';
    const AUSTRALIAN_NATIONAL   = 'AUSTRALIAN_NATIONAL';
    const BESSEL_1841           = 'BESSEL_1841';
    const BESSEL_1841_NAMBIA    = 'BESSEL_1841_NAMBIA';
    const CLARKE_1866           = 'CLARKE_1866';
    const CLARKE_1880           = 'CLARKE_1880';
    const EVEREST               = 'EVEREST';
    const FISCHER_1960_MERCURY  = 'FISCHER_1960_MERCURY';
    const FISCHER_1968          = 'FISCHER_1968';
    const GRS_1967              = 'GRS_1967';
    const GRS_1980              = 'GRS_1980';
    const HELMERT_1906          = 'HELMERT_1906';
    const HOUGH                 = 'HOUGH';
    const INTERNATIONAL         = 'INTERNATIONAL';
    const KRASSOVSKY            = 'KRASSOVSKY';
    const MODIFIED_AIRY         = 'MODIFIED_AIRY';
    const MODIFIED_EVEREST      = 'MODIFIED_EVEREST';
    const MODIFIED_FISCHER_1960 = 'MODIFIED_FISCHER_1960';
    const SOUTH_AMERICAN_1969   = 'SOUTH_AMERICAN_1969';
    const WGS60                 = 'WGS60';
    const WGS66                 = 'WGS66';
    const WGS72                 = 'WGS72';
    const WGS84                 = 'WGS84';
}
