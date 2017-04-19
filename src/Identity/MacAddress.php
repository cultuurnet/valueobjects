<?php

namespace ValueObjects\Identity;

use ValueObjects\Exception\InvalidNativeArgumentException;
use ValueObjects\Number\Natural;

final class MacAddress extends Natural
{
    public function __construct($value)
    {
        $options = array(
            'options' => array(
                'max_range' => pow(2, 48) - 1
            )
        );

        $filteredValue = filter_var($value, FILTER_VALIDATE_INT, $options);

        if (false === $filteredValue) {
            throw new InvalidNativeArgumentException($value, array('mac address (<= 281,474,976,710,655)'));
        }

        parent::__construct($filteredValue);
    }

    /**
     * @param string $value
     * @return MacAddress
     * @throws InvalidNativeArgumentException
     */
    public static function fromString($value)
    {
        $filteredValue = filter_var($value, FILTER_VALIDATE_MAC);

        if ($filteredValue === false) {
            throw new InvalidNativeArgumentException($value, array('string (valid Mac address)'));
        }

        return new self(hexdec(str_replace(['-', ':', '.'], '', $filteredValue)));
    }

    /**
     * @return string
     */
    public function toStringWithDash()
    {
        return trim(chunk_split(str_pad(dechex($this->value), 12, '0', STR_PAD_LEFT), 2, '-'), '-');
    }

    /**
     * @return string
     */
    public function toStringWithColon()
    {
        return trim(chunk_split(str_pad(dechex($this->value), 12, '0', STR_PAD_LEFT), 2, ':'), ':');
    }

    /**
     * @return string
     */
    public function toStringWithDot()
    {
        return trim(chunk_split(str_pad(dechex($this->value), 12, '0', STR_PAD_LEFT), 4, '.'), '.');
    }
}
