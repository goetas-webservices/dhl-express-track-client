<?php

namespace GoetasWebservices\Client\DHL\ExpressTrack\SoapParts;

/**
 * Class representing TrackShipmentRequestOutput
 */
class TrackShipmentRequestOutput
{

    /**
     * @property \GoetasWebservices\Client\DHL\ExpressTrack\TrackShipmentRequestResponse $parameters
     */
    private $parameters = null;

    /**
     * Gets as parameters
     *
     * @return \GoetasWebservices\Client\DHL\ExpressTrack\TrackShipmentRequestResponse
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Sets a new parameters
     *
     * @param \GoetasWebservices\Client\DHL\ExpressTrack\TrackShipmentRequestResponse $parameters
     * @return self
     */
    public function setParameters(\GoetasWebservices\Client\DHL\ExpressTrack\TrackShipmentRequestResponse $parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }


}

