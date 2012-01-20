<?php

namespace Ddeboer\Salesforce\BulkBundle\Guzzle\Command;

use Ddeboer\Salesforce\BulkBundle\Batch;

/**
 * @guzzle id doc="Job ID" required="true"
 * @guzzle filename doc="CSV or Excel filename" required="true"
 */
class AddBatch extends AbstractCommand
{
    public function setId($id)
    {
        return $this->set('id', $id);
    }

    public function setContentType($contentType)
    {
        return $this->set('content-type', $contentType);
    }

    public function setFilename($filename)
    {
        if (!is_readable($filename)) {
            throw new \InvalidArgumentException("File $filename not readable");
        }
        return $this->set('filename', $filename);
    }

    protected function build()
    {
        $this->client->getConfig()->set('id', $this->get('id'));
        $this->request = $this->client->post('job/{{id}}/batch', null, $this->getData());
        $this->request->setHeader('Content-Type', $this->get('content-type')
                                  . '; charset=UTF-8');
        parent::configureRequest();
    }

    protected function getData()
    {
        return file_get_contents($this->get('filename'));
    }

    protected function process()
    {
        $xml = new \SimpleXMLElement($this->getResponse()->getBody());
        $batch = new Batch();
        $batch->setId((string) $xml->id);
        $batch->setJobId((string) $xml->jobId);
        $batch->setState((string) $xml->state);
        $batch->setCreatedDate(new \DateTime($xml->createdDate));
        $batch->setSystemModstamp(new \DateTime($xml->systemModstamp));
        $batch->setNumberRecordsProcessed((int) $xml->numberOfRecordsProcesssed);
        $batch->setNumberRecordsFailed((int) $xml->numberRecordsFailed);
        $batch->setTotalProcessingTime((int) $xml->totalProcessingTime);
        $batch->setApiActiveProcessingTime((int) $xml->apiActiveProcessingTime);
        $batch->setApexProcessingTime((int) $xml->apexProcessingTime);

        $this->result = $batch;
   }

    /**
     * @return Batch
     */
    public function getResponse()
    {
        return parent::getResponse();
    }
}