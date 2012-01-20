<?php

namespace Ddeboer\Salesforce\BulkBundle;

use Ddeboer\Salesforce\ClientBundle\ClientInterface;

/**
 * Bulk API client
 * 
 * @author David de Boer <david@ddeboer.nl>
 */
class Client
{
    /**
     * Construct bulk API client
     *
     * @param ClientInterface $client   Salesforce client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Create a job
     *
     * @param string $operation
     * @param string $object
     * @param string $contentType
     */
    public function createJob($operation, $object, $contentType = 'CSV')
    {
        
    }

    /**
     * @param string $id
     * @return Job
     */
    public function getJob($id)
    {

    }

    /**
     * Create a batch
     *
     * @param Batch $batch
     * @param Job $job      Job to add the batch to
     */
    public function createBatch(Batch $batch, Job $job)
    {
        
    }
}