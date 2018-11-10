<?php

namespace GoetasWebservices\Client\DHL\ExpressTrack;

/**
 * Class representing TrackShipmentRequestResponseType
 *
 *
 * XSD Type: trackShipmentRequestResponse
 */
class TrackShipmentRequestResponseType
{

    /**
     * @property \GoetasWebservices\Client\DHL\ExpressTrack\PubTrackingResponseType $trackingResponse
     */
    private $trackingResponse = null;

    /**
     * Gets as trackingResponse
     *
     * @return \GoetasWebservices\Client\DHL\ExpressTrack\PubTrackingResponseType
     */
    public function getTrackingResponse()
    {
        return $this->trackingResponse;
    }

    /**
     * Sets a new trackingResponse
     *
     * @param \GoetasWebservices\Client\DHL\ExpressTrack\PubTrackingResponseType $trackingResponse
     * @return self
     */
    public function setTrackingResponse(\GoetasWebservices\Client\DHL\ExpressTrack\PubTrackingResponseType $trackingResponse)
    {
        $this->trackingResponse = $trackingResponse;
        return $this;
    }


}

