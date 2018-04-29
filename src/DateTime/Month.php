<?php

namespace ValueObjects\DateTime;

use ValueObjects\Enum\Enum;

/**
 * @method static Month JANUARY()
 * @method static Month FEBRUARY()
 * @method static Month MARCH()
 * @method static Month APRIL()
 * @method static Month MAY()
 * @method static Month JUNE()
 * @method static Month JULY()
 * @method static Month AUGUST()
 * @method static Month SEPTEMBER()
 * @method static Month OCTOBER()
 * @method static Month NOVEMBER()
 * @method static Month DECEMBER()
 */
class Month extends Enum
{
    const JANUARY   = 'January';
    const FEBRUARY  = 'February';
    const MARCH     = 'March';
    const APRIL     = 'April';
    const MAY       = 'May';
    const JUNE      = 'June';
    const JULY      = 'July';
    const AUGUST    = 'August';
    const SEPTEMBER = 'September';
    const OCTOBER   = 'October';
    const NOVEMBER  = 'November';
    const DECEMBER  = 'December';

    /**
     * Get current Month
     *
     * @return Month
     */
    public static function now()
    {
        $now = new \DateTime('now');

        return static::fromNativeDateTime($now);
    }

    /**
     * Returns Month from a native PHP \DateTime
     *
     * @param  \DateTime $date
     * @return Month
     */
    public static function fromNativeDateTime(\DateTime $date)
    {
        $month = \strtoupper($date->format('F'));

        return static::byName($month);
    }

    /**
     * Returns a numeric representation of the Month.
     * 1 for January to 12 for December.
     *
     * @return int
     */
    public function getNumericValue()
    {
        return $this->getOrdinal() + 1;
    }
}
