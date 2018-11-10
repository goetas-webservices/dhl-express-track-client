<?php

namespace GoetasWebservices\Client\DHL\ExpressTrack\SoapParts;

/**
 * Class representing TrackShipmentRequestInput
 */
class TrackShipmentRequestInput
{

    /**
     * @property \GoetasWebservices\Client\DHL\ExpressTrack\TrackShipmentRequest $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\DHL\ExpressTrack\TrackShipmentRequest
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\DHL\ExpressTrack\TrackShipmentRequest $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\DHL\ExpressTrack\TrackShipmentRequest $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

