<?php

namespace ValueObjects\Geography;

use League\Geotools\Coordinate\Coordinate as BaseCoordinate;
use ValueObjects\Exception\InvalidNativeArgumentException;
use ValueObjects\Number\Real;

class Longitude extends Real
{
    /**
     * Returns a new Longitude object
     *
     * @param $value
     * @throws InvalidNativeArgumentException
     */
    public function __construct($value)
    {
        $filteredValue = \filter_var($value, FILTER_VALIDATE_FLOAT);

        if (false === $filteredValue) {
            throw new InvalidNativeArgumentException($value, array('float'));
        }

        // normalization process through Coordinate object
        $coordinate = new BaseCoordinate(array(0, $filteredValue));
        $longitude  = $coordinate->getLongitude();

        $this->value = $longitude;
    }
}
