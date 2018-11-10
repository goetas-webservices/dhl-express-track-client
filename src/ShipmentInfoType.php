<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing ShipmentInfoType
 *
 *
 * XSD Type: ShipmentInfo
 */
class ShipmentInfoType
{

    /**
     * @property \GoetasWebservices\Client\DHL\OriginServiceAreaType $originServiceArea
     */
    private $originServiceArea = null;

    /**
     * @property \GoetasWebservices\Client\DHL\DestinationServiceAreaType $destinationServiceArea
     */
    private $destinationServiceArea = null;

    /**
     * @property string $shipperName
     */
    private $shipperName = null;

    /**
     * @property int $shipperAccountNumber
     */
    private $shipperAccountNumber = null;

    /**
     * @property string $consigneeName
     */
    private $consigneeName = null;

    /**
     * @property \DateTime $shipmentDate
     */
    private $shipmentDate = null;

    /**
     * @property string $pieces
     */
    private $pieces = null;

    /**
     * @property string $weight
     */
    private $weight = null;

    /**
     * @property string $weightUnit
     */
    private $weightUnit = null;

    /**
     * @property \GoetasWebservices\Client\DHL\ShipmentEventType[] $shipmentEvent
     */
    private $shipmentEvent = null;

    /**
     * @property \GoetasWebservices\Client\DHL\ReferenceType $shipperReference
     */
    private $shipperReference = null;

    /**
     * Gets as originServiceArea
     *
     * @return \GoetasWebservices\Client\DHL\OriginServiceAreaType
     */
    public function getOriginServiceArea()
    {
        return $this->originServiceArea;
    }

    /**
     * Sets a new originServiceArea
     *
     * @param \GoetasWebservices\Client\DHL\OriginServiceAreaType $originServiceArea
     * @return self
     */
    public function setOriginServiceArea(\GoetasWebservices\Client\DHL\OriginServiceAreaType $originServiceArea)
    {
        $this->originServiceArea = $originServiceArea;
        return $this;
    }

    /**
     * Gets as destinationServiceArea
     *
     * @return \GoetasWebservices\Client\DHL\DestinationServiceAreaType
     */
    public function getDestinationServiceArea()
    {
        return $this->destinationServiceArea;
    }

    /**
     * Sets a new destinationServiceArea
     *
     * @param \GoetasWebservices\Client\DHL\DestinationServiceAreaType $destinationServiceArea
     * @return self
     */
    public function setDestinationServiceArea(\GoetasWebservices\Client\DHL\DestinationServiceAreaType $destinationServiceArea)
    {
        $this->destinationServiceArea = $destinationServiceArea;
        return $this;
    }

    /**
     * Gets as shipperName
     *
     * @return string
     */
    public function getShipperName()
    {
        return $this->shipperName;
    }

    /**
     * Sets a new shipperName
     *
     * @param string $shipperName
     * @return self
     */
    public function setShipperName($shipperName)
    {
        $this->shipperName = $shipperName;
        return $this;
    }

    /**
     * Gets as shipperAccountNumber
     *
     * @return int
     */
    public function getShipperAccountNumber()
    {
        return $this->shipperAccountNumber;
    }

    /**
     * Sets a new shipperAccountNumber
     *
     * @param int $shipperAccountNumber
     * @return self
     */
    public function setShipperAccountNumber($shipperAccountNumber)
    {
        $this->shipperAccountNumber = $shipperAccountNumber;
        return $this;
    }

    /**
     * Gets as consigneeName
     *
     * @return string
     */
    public function getConsigneeName()
    {
        return $this->consigneeName;
    }

    /**
     * Sets a new consigneeName
     *
     * @param string $consigneeName
     * @return self
     */
    public function setConsigneeName($consigneeName)
    {
        $this->consigneeName = $consigneeName;
        return $this;
    }

    /**
     * Gets as shipmentDate
     *
     * @return \DateTime
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }

    /**
     * Sets a new shipmentDate
     *
     * @param \DateTime $shipmentDate
     * @return self
     */
    public function setShipmentDate(\DateTime $shipmentDate)
    {
        $this->shipmentDate = $shipmentDate;
        return $this;
    }

    /**
     * Gets as pieces
     *
     * @return string
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets a new pieces
     *
     * @param string $pieces
     * @return self
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
        return $this;
    }

    /**
     * Gets as weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param string $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as weightUnit
     *
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * Sets a new weightUnit
     *
     * @param string $weightUnit
     * @return self
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * Adds as arrayOfShipmentEventItem
     *
     * @return self
     * @param \GoetasWebservices\Client\DHL\ShipmentEventType $arrayOfShipmentEventItem
     */
    public function addToShipmentEvent(\GoetasWebservices\Client\DHL\ShipmentEventType $arrayOfShipmentEventItem)
    {
        $this->shipmentEvent[] = $arrayOfShipmentEventItem;
        return $this;
    }

    /**
     * isset shipmentEvent
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentEvent($index)
    {
        return isset($this->shipmentEvent[$index]);
    }

    /**
     * unset shipmentEvent
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentEvent($index)
    {
        unset($this->shipmentEvent[$index]);
    }

    /**
     * Gets as shipmentEvent
     *
     * @return \GoetasWebservices\Client\DHL\ShipmentEventType[]
     */
    public function getShipmentEvent()
    {
        return $this->shipmentEvent;
    }

    /**
     * Sets a new shipmentEvent
     *
     * @param \GoetasWebservices\Client\DHL\ShipmentEventType[] $shipmentEvent
     * @return self
     */
    public function setShipmentEvent(array $shipmentEvent)
    {
        $this->shipmentEvent = $shipmentEvent;
        return $this;
    }

    /**
     * Gets as shipperReference
     *
     * @return \GoetasWebservices\Client\DHL\ReferenceType
     */
    public function getShipperReference()
    {
        return $this->shipperReference;
    }

    /**
     * Sets a new shipperReference
     *
     * @param \GoetasWebservices\Client\DHL\ReferenceType $shipperReference
     * @return self
     */
    public function setShipperReference(\GoetasWebservices\Client\DHL\ReferenceType $shipperReference)
    {
        $this->shipperReference = $shipperReference;
        return $this;
    }


}

