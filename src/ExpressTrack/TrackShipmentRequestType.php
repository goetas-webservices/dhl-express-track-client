<?php

namespace GoetasWebservices\Client\DHL\ExpressTrack;

/**
 * Class representing TrackShipmentRequestType
 *
 *
 * XSD Type: trackShipmentRequest
 */
class TrackShipmentRequestType
{

    /**
     * @property \GoetasWebservices\Client\DHL\ExpressTrack\PubTrackingRequestType $trackingRequest
     */
    private $trackingRequest = null;

    /**
     * Gets as trackingRequest
     *
     * @return \GoetasWebservices\Client\DHL\ExpressTrack\PubTrackingRequestType
     */
    public function getTrackingRequest()
    {
        return $this->trackingRequest;
    }

    /**
     * Sets a new trackingRequest
     *
     * @param \GoetasWebservices\Client\DHL\ExpressTrack\PubTrackingRequestType $trackingRequest
     * @return self
     */
    public function setTrackingRequest(\GoetasWebservices\Client\DHL\ExpressTrack\PubTrackingRequestType $trackingRequest)
    {
        $this->trackingRequest = $trackingRequest;
        return $this;
    }


}

