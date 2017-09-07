<?php

namespace Spree;

/**
 * Base API class, contains all code shared by the web API classes.
 */
use GuzzleHttp\Client;

class Api extends Client
{
    /**
     * The last API response executed.
     */
    public $client;

    public function __construct(array $config = [])
    {
        $config = [
            'base_uri' => env('SPREE_API_URL',
                'https://www.spree.co.za/api/v1/'),
        ];

        parent::__construct($config);
    }

    /**
     * Get and returns an array of common/shared headers.
     */
    public static function _getCommonHeaders()
    {
        return array(
            'Accept' => '*/*',
            'Content-Type' => 'application/json',
        );
    }

}
