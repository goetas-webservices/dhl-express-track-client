<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing ServiceHeaderType
 *
 *
 * XSD Type: ServiceHeader
 */
class ServiceHeaderType
{

    /**
     * @property \DateTime $messageTime
     */
    private $messageTime = null;

    /**
     * @property string $messageReference
     */
    private $messageReference = null;

    /**
     * Gets as messageTime
     *
     * @return \DateTime
     */
    public function getMessageTime()
    {
        return $this->messageTime;
    }

    /**
     * Sets a new messageTime
     *
     * @param \DateTime $messageTime
     * @return self
     */
    public function setMessageTime(\DateTime $messageTime)
    {
        $this->messageTime = $messageTime;
        return $this;
    }

    /**
     * Gets as messageReference
     *
     * @return string
     */
    public function getMessageReference()
    {
        return $this->messageReference;
    }

    /**
     * Sets a new messageReference
     *
     * @param string $messageReference
     * @return self
     */
    public function setMessageReference($messageReference)
    {
        $this->messageReference = $messageReference;
        return $this;
    }


}

