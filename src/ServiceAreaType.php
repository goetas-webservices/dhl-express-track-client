<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing ServiceAreaType
 *
 *
 * XSD Type: ServiceArea
 */
class ServiceAreaType
{

    /**
     * @property string $serviceAreaCode
     */
    private $serviceAreaCode = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as serviceAreaCode
     *
     * @return string
     */
    public function getServiceAreaCode()
    {
        return $this->serviceAreaCode;
    }

    /**
     * Sets a new serviceAreaCode
     *
     * @param string $serviceAreaCode
     * @return self
     */
    public function setServiceAreaCode($serviceAreaCode)
    {
        $this->serviceAreaCode = $serviceAreaCode;
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

