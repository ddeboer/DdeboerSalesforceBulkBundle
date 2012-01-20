<?php

namespace Ddeboer\Salesforce\BulkBundle\Guzzle;

use Guzzle\Service\Inspector;
use Guzzle\Service\Client;

/**
 * @link http://www.salesforce.com/us/developer/docs/api_asynch/
 */
class SalesforceBulkApiClient extends Client
{
    protected $instance;
    protected $sessionId;
    protected $version;

    public static function factory($config)
    {
        $default = array(
            'base_url' => 'https://{{instance}}.salesforce.com/services/async/{{version}}/',
            'version'  => '23.0'
        );

        $required = array('instance', 'session_id');
        $config = Inspector::prepareConfig($config, $default, $required);

        $client = new self(
            $config->get('base_url'),
            $config->get('version'),
            $config->get('instance'),
            $config->get('session_id')
        );
        $client->setConfig($config);

        return $client;
    }

    public function __construct($baseUrl, $version, $instance, $sessionId)
    {
        parent::__construct($baseUrl);
        $this->version = $version;
        $this->instance = $instance;
        $this->sessionId = $sessionId;
    }
}