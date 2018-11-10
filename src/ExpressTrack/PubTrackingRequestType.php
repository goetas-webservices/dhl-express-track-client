<?php

namespace GoetasWebservices\Client\DHL\ExpressTrack;

/**
 * Class representing PubTrackingRequestType
 *
 *
 * XSD Type: pubTrackingRequest
 */
class PubTrackingRequestType
{

    /**
     * @property \GoetasWebservices\Client\DHL\TrackingRequest $trackingRequest
     */
    private $trackingRequest = null;

    /**
     * Gets as trackingRequest
     *
     * @return \GoetasWebservices\Client\DHL\TrackingRequest
     */
    public function getTrackingRequest()
    {
        return $this->trackingRequest;
    }

    /**
     * Sets a new trackingRequest
     *
     * @param \GoetasWebservices\Client\DHL\TrackingRequest $trackingRequest
     * @return self
     */
    public function setTrackingRequest(\GoetasWebservices\Client\DHL\TrackingRequest $trackingRequest)
    {
        $this->trackingRequest = $trackingRequest;
        return $this;
    }


}

