<?php

namespace Ddeboer\Salesforce\BulkBundle\Guzzle\Command;

use Ddeboer\Salesforce\BulkBundle\Job;

/**
 * @guzzle id doc="Job ID" required="true"
 * @guzzle state doc="Job state" required="true"
 */
class ChangeJobState extends AbstractCommand
{
    public function setId($id)
    {
        return $this->set('id', $id);
    }

    public function setState($state)
    {
        return $this->set('state', $state);
    }

    protected function build()
    {
        $this->client->getConfig()->set('id', $this->get('id'));
        $this->request = $this->client->post('job/{{id}}', null, $this->getData());
        $this->request->setHeader('Content-Type', 'application/xml; charset=UTF-8');
        parent::configureRequest();
    }

    protected function getData()
    {
        $xml = new \SimpleXMLElement('<jobInfo xmlns="http://www.force.com/2009/06/asyncapi/dataload" />');
        $xml->state = $this->get('state');

        return $xml->asXML();
    }
}