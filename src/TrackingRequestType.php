<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing TrackingRequestType
 *
 *
 * XSD Type: TrackingRequest
 */
class TrackingRequestType
{

    /**
     * @property \GoetasWebservices\Client\DHL\RequestType $request
     */
    private $request = null;

    /**
     * @property string[] $aWBNumber
     */
    private $aWBNumber = null;

    /**
     * @property string[] $lPNumber
     */
    private $lPNumber = null;

    /**
     * @property string $levelOfDetails
     */
    private $levelOfDetails = null;

    /**
     * @property string $piecesEnabled
     */
    private $piecesEnabled = null;

    /**
     * Gets as request
     *
     * @return \GoetasWebservices\Client\DHL\RequestType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * @param \GoetasWebservices\Client\DHL\RequestType $request
     * @return self
     */
    public function setRequest(\GoetasWebservices\Client\DHL\RequestType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Adds as arrayOfAWBNumberItem
     *
     * @return self
     * @param string $arrayOfAWBNumberItem
     */
    public function addToAWBNumber($arrayOfAWBNumberItem)
    {
        $this->aWBNumber[] = $arrayOfAWBNumberItem;
        return $this;
    }

    /**
     * isset aWBNumber
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAWBNumber($index)
    {
        return isset($this->aWBNumber[$index]);
    }

    /**
     * unset aWBNumber
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAWBNumber($index)
    {
        unset($this->aWBNumber[$index]);
    }

    /**
     * Gets as aWBNumber
     *
     * @return string[]
     */
    public function getAWBNumber()
    {
        return $this->aWBNumber;
    }

    /**
     * Sets a new aWBNumber
     *
     * @param string $aWBNumber
     * @return self
     */
    public function setAWBNumber(array $aWBNumber)
    {
        $this->aWBNumber = $aWBNumber;
        return $this;
    }

    /**
     * Adds as arrayOfTrackingPieceIDItem
     *
     * @return self
     * @param string $arrayOfTrackingPieceIDItem
     */
    public function addToLPNumber($arrayOfTrackingPieceIDItem)
    {
        $this->lPNumber[] = $arrayOfTrackingPieceIDItem;
        return $this;
    }

    /**
     * isset lPNumber
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLPNumber($index)
    {
        return isset($this->lPNumber[$index]);
    }

    /**
     * unset lPNumber
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLPNumber($index)
    {
        unset($this->lPNumber[$index]);
    }

    /**
     * Gets as lPNumber
     *
     * @return string[]
     */
    public function getLPNumber()
    {
        return $this->lPNumber;
    }

    /**
     * Sets a new lPNumber
     *
     * @param string $lPNumber
     * @return self
     */
    public function setLPNumber(array $lPNumber)
    {
        $this->lPNumber = $lPNumber;
        return $this;
    }

    /**
     * Gets as levelOfDetails
     *
     * @return string
     */
    public function getLevelOfDetails()
    {
        return $this->levelOfDetails;
    }

    /**
     * Sets a new levelOfDetails
     *
     * @param string $levelOfDetails
     * @return self
     */
    public function setLevelOfDetails($levelOfDetails)
    {
        $this->levelOfDetails = $levelOfDetails;
        return $this;
    }

    /**
     * Gets as piecesEnabled
     *
     * @return string
     */
    public function getPiecesEnabled()
    {
        return $this->piecesEnabled;
    }

    /**
     * Sets a new piecesEnabled
     *
     * @param string $piecesEnabled
     * @return self
     */
    public function setPiecesEnabled($piecesEnabled)
    {
        $this->piecesEnabled = $piecesEnabled;
        return $this;
    }


}

