<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing ShipmentEventType
 *
 *
 * XSD Type: ShipmentEvent
 */
class ShipmentEventType
{

    /**
     * @property \DateTime $date
     */
    private $date = null;

    /**
     * @property \DateTime $time
     */
    private $time = null;

    /**
     * @property \GoetasWebservices\Client\DHL\ServiceEventType $serviceEvent
     */
    private $serviceEvent = null;

    /**
     * @property string $signatory
     */
    private $signatory = null;

    /**
     * @property \GoetasWebservices\Client\DHL\ServiceAreaType $serviceArea
     */
    private $serviceArea = null;

    /**
     * Gets as date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * @param \DateTime $time
     * @return self
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Gets as serviceEvent
     *
     * @return \GoetasWebservices\Client\DHL\ServiceEventType
     */
    public function getServiceEvent()
    {
        return $this->serviceEvent;
    }

    /**
     * Sets a new serviceEvent
     *
     * @param \GoetasWebservices\Client\DHL\ServiceEventType $serviceEvent
     * @return self
     */
    public function setServiceEvent(\GoetasWebservices\Client\DHL\ServiceEventType $serviceEvent)
    {
        $this->serviceEvent = $serviceEvent;
        return $this;
    }

    /**
     * Gets as signatory
     *
     * @return string
     */
    public function getSignatory()
    {
        return $this->signatory;
    }

    /**
     * Sets a new signatory
     *
     * @param string $signatory
     * @return self
     */
    public function setSignatory($signatory)
    {
        $this->signatory = $signatory;
        return $this;
    }

    /**
     * Gets as serviceArea
     *
     * @return \GoetasWebservices\Client\DHL\ServiceAreaType
     */
    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    /**
     * Sets a new serviceArea
     *
     * @param \GoetasWebservices\Client\DHL\ServiceAreaType $serviceArea
     * @return self
     */
    public function setServiceArea(\GoetasWebservices\Client\DHL\ServiceAreaType $serviceArea)
    {
        $this->serviceArea = $serviceArea;
        return $this;
    }


}

