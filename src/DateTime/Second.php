<?php

namespace ValueObjects\DateTime;

use ValueObjects\Exception\InvalidNativeArgumentException;
use ValueObjects\Number\Natural;

class Second extends Natural
{
    const MIN_SECOND = 0;
    const MAX_SECOND = 59;

    /**
     * Returns a new Second object
     *
     * @param int $value
     */
    public function __construct($value)
    {
        $options = array(
            'options' => array('min_range' => self::MIN_SECOND, 'max_range' => self::MAX_SECOND)
        );

        $filteredValue = filter_var($value, FILTER_VALIDATE_INT, $options);

        if (false === $filteredValue) {
            throw new InvalidNativeArgumentException($value, array('int (>=0, <=59)'));
        }

        parent::__construct($filteredValue);
    }

    /**
     * Returns the current second.
     *
     * @return Second
     */
    public static function now()
    {
        $now    = new \DateTime('now');
        $second = \intval($now->format('s'));

        return new static($second);
    }
}
