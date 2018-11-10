<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing DestinationServiceAreaType
 *
 *
 * XSD Type: DestinationServiceArea
 */
class DestinationServiceAreaType
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
     * @property string $facilityCode
     */
    private $facilityCode = null;

    /**
     * @property string $inboundSortCode
     */
    private $inboundSortCode = null;

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

    /**
     * Gets as facilityCode
     *
     * @return string
     */
    public function getFacilityCode()
    {
        return $this->facilityCode;
    }

    /**
     * Sets a new facilityCode
     *
     * @param string $facilityCode
     * @return self
     */
    public function setFacilityCode($facilityCode)
    {
        $this->facilityCode = $facilityCode;
        return $this;
    }

    /**
     * Gets as inboundSortCode
     *
     * @return string
     */
    public function getInboundSortCode()
    {
        return $this->inboundSortCode;
    }

    /**
     * Sets a new inboundSortCode
     *
     * @param string $inboundSortCode
     * @return self
     */
    public function setInboundSortCode($inboundSortCode)
    {
        $this->inboundSortCode = $inboundSortCode;
        return $this;
    }


}

