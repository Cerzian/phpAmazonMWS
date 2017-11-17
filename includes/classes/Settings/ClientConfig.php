<?php

class ClientConfig
{
    private $awsKeyId;
    private $secretKey;
    private $developerAccountNumber;
    private $applicationName;
    private $applicationVersion;

    public function __construct(
        $awsKeyId,
        $secretKey,
        $developerAccountNumber = null,
        $applicationName = null,
        $applicationVersion = null
    ) {
        $this->awsKeyId = $awsKeyId;
        $this->secretKey = $secretKey;
        $this->developerAccountNumber = $developerAccountNumber;
        $this->applicationName = $applicationName;
        $this->applicationVersion = $applicationVersion;
    }

    /**
     * @return mixed
     */
    public function getAwsKeyId()
    {
        return $this->awsKeyId;
    }

    /**
     * @return mixed
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * @return mixed
     */
    public function getDeveloperAccountNumber()
    {
        return $this->developerAccountNumber;
    }

    /**
     * @return mixed
     */
    public function getApplicationName()
    {
        return $this->applicationName;
    }

    /**
     * @return mixed
     */
    public function getApplicationVersion()
    {
        return $this->applicationVersion;
    }

}