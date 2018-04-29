<?php

namespace ValueObjects\Web;

use ValueObjects\Enum\Enum;

/**
 * @method static IPAddressVersion IPV4()
 * @method static IPAddressVersion IPV6()
 */
class IPAddressVersion extends Enum
{
    const IPV4 = 'IPv4';
    const IPV6 = 'IPv6';
}
