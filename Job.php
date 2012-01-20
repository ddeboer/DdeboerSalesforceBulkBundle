<?php

namespace Ddeboer\Salesforce\BulkBundle;

class Job
{
    protected $id;

    /**
     * All lowercase: insert: query, insert, upsert, update, or delete
     *
     * @var string
     */
    protected $operation;
    protected $object;

    /**
     * Content type: CSV, ZIP_CSV, XML, or ZIP_XML
     * 
     * @var string
     */
    protected $contentType;

    protected $createdById;
    protected $createdDate;
    protected $systemModstamp;
    protected $state;
    protected $concurrencyMode;
    protected $numberBatchesQueued;
    protected $numberBatchesInProgress;
    protected $numberBatchesCompleted;
    protected $numberBatchesFailed;
    protected $numberBatchesTotal;
    protected $numberRecordsProcessed;
    protected $numberRecordsFailed;
    protected $numberRetries;
    protected $apiVersion;
    protected $totalProcessingTime;
    protected $apiActiveProcessingTime;
    protected $apexProcessingTime;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getOperation()
    {
        return $this->operation;
    }

    public function setOperation($operation)
    {
        $this->operation = $operation;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function setObject($object)
    {
        $this->object = $object;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    public function getCreatedById()
    {
        return $this->createdById;
    }

    public function setCreatedById($createdById)
    {
        $this->createdById = $createdById;
    }

    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    public function getSystemModstamp()
    {
        return $this->systemModstamp;
    }

    public function setSystemModstamp($systemModstamp)
    {
        $this->systemModstamp = $systemModstamp;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getConcurrencyMode()
    {
        return $this->concurrencyMode;
    }

    public function setConcurrencyMode($concurrencyMode)
    {
        $this->concurrencyMode = $concurrencyMode;
    }

    public function getNumberBatchesQueued()
    {
        return $this->numberBatchesQueued;
    }

    public function setNumberBatchesQueued($numberBatchesQueued)
    {
        $this->numberBatchesQueued = $numberBatchesQueued;
    }

    public function getNumberBatchesInProgress()
    {
        return $this->numberBatchesInProgress;
    }

    public function setNumberBatchesInProgress($numberBatchesInProgress)
    {
        $this->numberBatchesInProgress = $numberBatchesInProgress;
    }

    public function getNumberBatchesCompleted()
    {
        return $this->numberBatchesCompleted;
    }

    public function setNumberBatchesCompleted($numberBatchesCompleted)
    {
        $this->numberBatchesCompleted = $numberBatchesCompleted;
    }

    public function getNumberBatchesFailed()
    {
        return $this->numberBatchesFailed;
    }

    public function setNumberBatchesFailed($numberBatchesFailed)
    {
        $this->numberBatchesFailed = $numberBatchesFailed;
    }

    public function getNumberBatchesTotal()
    {
        return $this->numberBatchesTotal;
    }

    public function setNumberBatchesTotal($numberBatchesTotal)
    {
        $this->numberBatchesTotal = $numberBatchesTotal;
    }

    public function getNumberRecordsProcessed()
    {
        return $this->numberRecordsProcessed;
    }

    public function setNumberRecordsProcessed($numberRecordsProcessed)
    {
        $this->numberRecordsProcessed = $numberRecordsProcessed;
    }

    public function getNumberRecordsFailed()
    {
        return $this->numberRecordsFailed;
    }

    public function setNumberRecordsFailed($numberRecordsFailed)
    {
        $this->numberRecordsFailed = $numberRecordsFailed;
    }

    public function getNumberRetries()
    {
        return $this->numberRetries;
    }

    public function setNumberRetries($numberRetries)
    {
        $this->numberRetries = $numberRetries;
    }

    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function getTotalProcessingTime()
    {
        return $this->totalProcessingTime;
    }

    public function setTotalProcessingTime($totalProcessingTime)
    {
        $this->totalProcessingTime = $totalProcessingTime;
    }

    public function getApiActiveProcessingTime()
    {
        return $this->apiActiveProcessingTime;
    }

    public function setApiActiveProcessingTime($apiActiveProcessingTime)
    {
        $this->apiActiveProcessingTime = $apiActiveProcessingTime;
    }

    public function getApexProcessingTime()
    {
        return $this->apexProcessingTime;
    }

    public function setApexProcessingTime($apexProcessingTime)
    {
        $this->apexProcessingTime = $apexProcessingTime;
    }
}