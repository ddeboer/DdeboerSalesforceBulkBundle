<?php

namespace Ddeboer\Salesforce\BulkBundle\Guzzle\Command;

/**
 * @guzzle id  doc="Job ID" required="true"
 */
class GetJobDetails extends AbstractJobCommand
{
    public function setId($id)
    {
        return $this->set('id', $id);
    }

    protected function build()
    {
        $this->client->getConfig()->set('id', $this->get('id'));
        $this->request = $this->client->get('job//{{id}}');
        parent::configureRequest();
    }
}