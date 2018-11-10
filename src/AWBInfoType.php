<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing AWBInfoType
 *
 *
 * XSD Type: AWBInfo
 */
class AWBInfoType
{

    /**
     * @property string $aWBNumber
     */
    private $aWBNumber = null;

    /**
     * @property \GoetasWebservices\Client\DHL\StatusType $status
     */
    private $status = null;

    /**
     * @property \GoetasWebservices\Client\DHL\ShipmentInfoType $shipmentInfo
     */
    private $shipmentInfo = null;

    /**
     * @property \GoetasWebservices\Client\DHL\TrackingPiecesType $pieces
     */
    private $pieces = null;

    /**
     * Gets as aWBNumber
     *
     * @return string
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
    public function setAWBNumber($aWBNumber)
    {
        $this->aWBNumber = $aWBNumber;
        return $this;
    }

    /**
     * Gets as status
     *
     * @return \GoetasWebservices\Client\DHL\StatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param \GoetasWebservices\Client\DHL\StatusType $status
     * @return self
     */
    public function setStatus(\GoetasWebservices\Client\DHL\StatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as shipmentInfo
     *
     * @return \GoetasWebservices\Client\DHL\ShipmentInfoType
     */
    public function getShipmentInfo()
    {
        return $this->shipmentInfo;
    }

    /**
     * Sets a new shipmentInfo
     *
     * @param \GoetasWebservices\Client\DHL\ShipmentInfoType $shipmentInfo
     * @return self
     */
    public function setShipmentInfo(\GoetasWebservices\Client\DHL\ShipmentInfoType $shipmentInfo)
    {
        $this->shipmentInfo = $shipmentInfo;
        return $this;
    }

    /**
     * Gets as pieces
     *
     * @return \GoetasWebservices\Client\DHL\TrackingPiecesType
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets a new pieces
     *
     * @param \GoetasWebservices\Client\DHL\TrackingPiecesType $pieces
     * @return self
     */
    public function setPieces(\GoetasWebservices\Client\DHL\TrackingPiecesType $pieces)
    {
        $this->pieces = $pieces;
        return $this;
    }


}

