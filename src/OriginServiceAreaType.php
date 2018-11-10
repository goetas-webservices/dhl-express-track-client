<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing OriginServiceAreaType
 *
 *
 * XSD Type: OriginServiceArea
 */
class OriginServiceAreaType
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
     * @property string $outboundSortCode
     */
    private $outboundSortCode = null;

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
     * Gets as outboundSortCode
     *
     * @return string
     */
    public function getOutboundSortCode()
    {
        return $this->outboundSortCode;
    }

    /**
     * Sets a new outboundSortCode
     *
     * @param string $outboundSortCode
     * @return self
     */
    public function setOutboundSortCode($outboundSortCode)
    {
        $this->outboundSortCode = $outboundSortCode;
        return $this;
    }


}

