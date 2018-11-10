<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing ServiceEventType
 *
 *
 * XSD Type: ServiceEvent
 */
class ServiceEventType
{

    /**
     * @property string $eventCode
     */
    private $eventCode = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as eventCode
     *
     * @return string
     */
    public function getEventCode()
    {
        return $this->eventCode;
    }

    /**
     * Sets a new eventCode
     *
     * @param string $eventCode
     * @return self
     */
    public function setEventCode($eventCode)
    {
        $this->eventCode = $eventCode;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

