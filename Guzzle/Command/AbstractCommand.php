<?php

namespace Ddeboer\Salesforce\BulkBundle\Guzzle\Command;

use Guzzle\Service\Command\AbstractCommand as BaseCommand;
use Ddeboer\Salesforce\BulkBundle\Job;

abstract class AbstractCommand extends BaseCommand
{
    protected function configureRequest()
    {
        $this->request->setHeader('X-SFDC-Session', $this->client->getConfig('session_id'));

        // Disable SSL verification to stop Curl from complaining about certs
        $this->request->getCurlOptions()->set(CURLOPT_SSL_VERIFYHOST, false);
        $this->request->getCurlOptions()->set(CURLOPT_SSL_VERIFYPEER, false);
    }
}