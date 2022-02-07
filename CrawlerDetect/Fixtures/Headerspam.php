<?php

/*
Im Noob
 */

namespace Jaybizzle\ReferralSpamDetect\Fixtures;

class Headers extends AbstractProvider
{
    /**
     * All possible HTTP headers that represent the referring URL.
     *
     * @var array
     */
    protected $data = array(
        'HTTP_REFERER',
    );
}