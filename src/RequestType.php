<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing RequestType
 *
 *
 * XSD Type: Request
 */
class RequestType
{

    /**
     * @property \GoetasWebservices\Client\DHL\ServiceHeaderType $serviceHeader
     */
    private $serviceHeader = null;

    /**
     * Gets as serviceHeader
     *
     * @return \GoetasWebservices\Client\DHL\ServiceHeaderType
     */
    public function getServiceHeader()
    {
        return $this->serviceHeader;
    }

    /**
     * Sets a new serviceHeader
     *
     * @param \GoetasWebservices\Client\DHL\ServiceHeaderType $serviceHeader
     * @return self
     */
    public function setServiceHeader(\GoetasWebservices\Client\DHL\ServiceHeaderType $serviceHeader)
    {
        $this->serviceHeader = $serviceHeader;
        return $this;
    }


}

