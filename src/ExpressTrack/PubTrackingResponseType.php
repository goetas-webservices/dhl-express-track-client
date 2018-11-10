<?php

namespace GoetasWebservices\Client\DHL\ExpressTrack;

/**
 * Class representing PubTrackingResponseType
 *
 *
 * XSD Type: pubTrackingResponse
 */
class PubTrackingResponseType
{

    /**
     * @property \GoetasWebservices\Client\DHL\TrackingResponse $trackingResponse
     */
    private $trackingResponse = null;

    /**
     * Gets as trackingResponse
     *
     * @return \GoetasWebservices\Client\DHL\TrackingResponse
     */
    public function getTrackingResponse()
    {
        return $this->trackingResponse;
    }

    /**
     * Sets a new trackingResponse
     *
     * @param \GoetasWebservices\Client\DHL\TrackingResponse $trackingResponse
     * @return self
     */
    public function setTrackingResponse(\GoetasWebservices\Client\DHL\TrackingResponse $trackingResponse)
    {
        $this->trackingResponse = $trackingResponse;
        return $this;
    }


}

