<?php

namespace ValueObjects\DateTime;

use ValueObjects\Enum\Enum;

/**
 * @method static WeekDay MONDAY()
 * @method static WeekDay TUESDAY()
 * @method static WeekDay WEDNESDAY()
 * @method static WeekDay THURSDAY()
 * @method static WeekDay FRIDAY()
 * @method static WeekDay SATURDAY()
 * @method static WeekDay SUNDAY()
 */
class WeekDay extends Enum
{
    const MONDAY    = 'Monday';
    const TUESDAY   = 'Tuesday';
    const WEDNESDAY = 'Wednesday';
    const THURSDAY  = 'Thursday';
    const FRIDAY    = 'Friday';
    const SATURDAY  = 'Saturday';
    const SUNDAY    = 'Sunday';

    /**
     * Returns the current week day.
     *
     * @return WeekDay
     */
    public static function now()
    {
        $now = new \DateTime('now');

        return static::fromNativeDateTime($now);
    }

    /**
     * Returns a WeekDay from a PHP native \DateTime
     *
     * @param  \DateTime $date
     * @return WeekDay
     */
    public static function fromNativeDateTime(\DateTime $date)
    {
        $weekDay = \strtoupper($date->format('l'));

        return static::byName($weekDay);
    }

    /**
     * Returns a numeric representation of the WeekDay.
     * 1 for Monday to 7 for Sunday.
     *
     * @return int
     */
    public function getNumericValue()
    {
        return $this->getOrdinal() + 1;
    }
}
