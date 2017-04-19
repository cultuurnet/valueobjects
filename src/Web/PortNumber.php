<?php

namespace ValueObjects\Web;

use ValueObjects\Exception\InvalidNativeArgumentException;
use ValueObjects\Number\Natural;

class PortNumber extends Natural implements PortNumberInterface
{
    /**
     * Returns a PortNumber object.
     *
     * @param int $value
     */
    public function __construct($value)
    {
        $options = array(
            'options' => array(
                'min_range' => 0,
                'max_range' => 65535
            )
        );

        $filteredValue = filter_var($value, FILTER_VALIDATE_INT, $options);

        if (false === $filteredValue) {
            throw new InvalidNativeArgumentException($value, array('int (>=0, <=65535)'));
        }

        parent::__construct($filteredValue);
    }
}
