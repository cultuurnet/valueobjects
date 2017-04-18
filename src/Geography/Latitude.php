<?php

namespace ValueObjects\Geography;

use League\Geotools\Coordinate\Coordinate as BaseCoordinate;
use ValueObjects\Exception\InvalidNativeArgumentException;
use ValueObjects\Number\Real;

class Latitude extends Real
{

    /**
     * Returns a new Latitude object
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
        $coordinate = new BaseCoordinate(array($filteredValue, 0));
        $latitude   = $coordinate->getLatitude();

        $this->value = $latitude;
    }
}
