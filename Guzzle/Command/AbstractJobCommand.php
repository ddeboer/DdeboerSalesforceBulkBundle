<?php

namespace Ddeboer\Salesforce\BulkBundle\Guzzle\Command;

use Ddeboer\Salesforce\BulkBundle\Job;

/**
 * @guzzle id  doc="Job ID" required="true"
 */
abstract class AbstractJobCommand extends AbstractCommand
{
    protected function process()
    {
        $xml = new \SimpleXMLElement($this->getResponse()->getBody());
        $job = new Job();
        $job->setId((string) $xml->id);
        $job->setOperation((string) $xml->operation);
        $job->setObject((string) $xml->object);
        $job->setCreatedById((string) $xml->createdById);
        $job->setCreatedDate(new \DateTime($xml->createdDate));
        $job->setSystemModstamp(new \DateTime($xml->systemModstamp));
        $job->setState((string) $xml->state);
        $job->setConcurrencyMode((string) $xml->concurrencyMode);
        $job->setContentType((string) $xml->contentType);
        $job->setNumberBatchesQueued((int) $xml->numberBatchesQueued);
        $job->setNumberBatchesInProgress((int) $xml->numberBatchesInProgress);
        $job->setNumberBatchesCompleted((int) $xml->numberBatchesCompleted);
        $job->setNumberBatchesFailed((int) $xml->numberBatchesFailed);
        $job->setNumberBatchesTotal((int) $xml->numberBatchesTotal);
        $job->setNumberRecordsProcessed((int) $xml->numberRecordsProcessed);
        $job->setNumberRecordsFailed((int) $xml->numberRecordsFailed);
        $job->setNumberRetries((int) $xml->numberRetries);
        $job->setApiVersion((string) $xml->apiVersion);
        $job->setTotalProcessingTime((int) $xml->totalProcessingTime);
        $job->setApiActiveProcessingTime((int) $xml->apiActiveProcessingTime);
        $job->setApexProcessingTime((int) $xml->apexProcessingTime);

        $this->result = $job;
    }

    /**
     * Get result
     *
     * @return Job
     */
    public function getResult()
    {
        return parent::getResult();
    }
}