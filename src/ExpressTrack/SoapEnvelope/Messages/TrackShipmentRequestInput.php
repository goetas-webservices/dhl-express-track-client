<?php

namespace GoetasWebservices\Client\DHL\ExpressTrack\SoapEnvelope\Messages;

/**
 * Class representing TrackShipmentRequestInput
 */
class TrackShipmentRequestInput
{

    /**
     * @property \GoetasWebservices\Client\DHL\ExpressTrack\SoapParts\TrackShipmentRequestInput $body
     */
    private $body = null;

    /**
     * @property \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     */
    private $header = null;

    /**
     * Gets as body
     *
     * @return \GoetasWebservices\Client\DHL\ExpressTrack\SoapParts\TrackShipmentRequestInput
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \GoetasWebservices\Client\DHL\ExpressTrack\SoapParts\TrackShipmentRequestInput $body
     * @return self
     */
    public function setBody(\GoetasWebservices\Client\DHL\ExpressTrack\SoapParts\TrackShipmentRequestInput $body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Gets as header
     *
     * @return \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header
     * @return self
     */
    public function setHeader(\GoetasWebservices\SoapServices\SoapClient\Arguments\Headers\Handler\HeaderPlaceholder $header)
    {
        $this->header = $header;
        return $this;
    }


}

