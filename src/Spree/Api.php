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

    protected $_baseUrl = 'https://www.spree.co.za/api/v1/';

    public function setBaseUrl($baseUrl) {
        $this->_baseUrl = $baseUrl;
    }

    public function __construct(array $config = [])
    {
        $config = [
            'base_uri' => $this->_baseUrl,
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
