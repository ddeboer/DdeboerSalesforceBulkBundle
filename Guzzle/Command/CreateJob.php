<?php

namespace Ddeboer\Salesforce\BulkBundle\Guzzle\Command;

use Ddeboer\Salesforce\BulkBundle\Job;

/**
 * @guzzle operation doc="Operation" required="true"
 * @guzzle object doc="Object" required="true"
 * @guzzle contentType doc="Content type" required="true"
 */
class CreateJob extends AbstractCommand
{
    public function setOperation($operation)
    {
        $this->set('operation', $operation);
        return $this;
    }

    public function setObject($object)
    {
        $this->set('object', $object);
        return $this;
    }

    public function setContentType($contentType)
    {
        $this->set('contentType', $contentType);
        return $this;
    }

    protected function build()
    {
        $this->request = $this->client->post('job', null, $this->getData());
        $this->request->setHeader('Content-type', 'application/xml; charset=UTF-8');
        parent::configureRequest();
    }

    protected function getData()
    {
        $xml = new \SimpleXMLElement('<jobInfo xmlns="http://www.force.com/2009/06/asyncapi/dataload" />');
        $xml->operation = $this->get('operation');
        $xml->object = $this->get('object');
        $xml->contentType = $this->get('contentType');

        return $xml->asXML();
    }

    protected function process()
    {
        $xml = new \SimpleXMLElement($this->getResponse()->getBody());
        $this->result = new Job();
        foreach ($xml as $key => $value) {
            $this->result->{'set' . ucfirst($key)}((string) $value);
        }
    }

    /**
     * {@inheritdoc}
     * @return Job
     */
    public function getResult()
    {
        return parent::getResult();
    }
}