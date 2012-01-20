<?php

namespace Ddeboer\Salesforce\BulkBundle;

class Batch
{
    private $id;
    private $jobId;
    private $state;
    private $createdDate;
    private $systemModstamp;
    private $numberRecordsProcessed;
    private $numberRecordsFailed;
    private $totalProcessingTime;
    private $apiActiveProcessingTime;
    private $apexProcessingTime;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getJobId()
    {
        return $this->jobId;
    }

    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
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