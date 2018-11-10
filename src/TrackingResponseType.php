<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing TrackingResponseType
 *
 *
 * XSD Type: TrackingResponse
 */
class TrackingResponseType
{

    /**
     * @property \GoetasWebservices\Client\DHL\ResponseType $response
     */
    private $response = null;

    /**
     * @property \GoetasWebservices\Client\DHL\AWBInfoType[] $aWBInfo
     */
    private $aWBInfo = null;

    /**
     * @property \GoetasWebservices\Client\DHL\FaultType $fault
     */
    private $fault = null;

    /**
     * Gets as response
     *
     * @return \GoetasWebservices\Client\DHL\ResponseType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * @param \GoetasWebservices\Client\DHL\ResponseType $response
     * @return self
     */
    public function setResponse(\GoetasWebservices\Client\DHL\ResponseType $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Adds as arrayOfAWBInfoItem
     *
     * @return self
     * @param \GoetasWebservices\Client\DHL\AWBInfoType $arrayOfAWBInfoItem
     */
    public function addToAWBInfo(\GoetasWebservices\Client\DHL\AWBInfoType $arrayOfAWBInfoItem)
    {
        $this->aWBInfo[] = $arrayOfAWBInfoItem;
        return $this;
    }

    /**
     * isset aWBInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAWBInfo($index)
    {
        return isset($this->aWBInfo[$index]);
    }

    /**
     * unset aWBInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAWBInfo($index)
    {
        unset($this->aWBInfo[$index]);
    }

    /**
     * Gets as aWBInfo
     *
     * @return \GoetasWebservices\Client\DHL\AWBInfoType[]
     */
    public function getAWBInfo()
    {
        return $this->aWBInfo;
    }

    /**
     * Sets a new aWBInfo
     *
     * @param \GoetasWebservices\Client\DHL\AWBInfoType[] $aWBInfo
     * @return self
     */
    public function setAWBInfo(array $aWBInfo)
    {
        $this->aWBInfo = $aWBInfo;
        return $this;
    }

    /**
     * Gets as fault
     *
     * @return \GoetasWebservices\Client\DHL\FaultType
     */
    public function getFault()
    {
        return $this->fault;
    }

    /**
     * Sets a new fault
     *
     * @param \GoetasWebservices\Client\DHL\FaultType $fault
     * @return self
     */
    public function setFault(\GoetasWebservices\Client\DHL\FaultType $fault)
    {
        $this->fault = $fault;
        return $this;
    }


}

