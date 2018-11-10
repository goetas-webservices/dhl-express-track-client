<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing PieceInfoType
 *
 *
 * XSD Type: PieceInfo
 */
class PieceInfoType
{

    /**
     * @property \GoetasWebservices\Client\DHL\PieceDetailsType $pieceDetails
     */
    private $pieceDetails = null;

    /**
     * @property \GoetasWebservices\Client\DHL\PieceEventType[] $pieceEvent
     */
    private $pieceEvent = null;

    /**
     * Gets as pieceDetails
     *
     * @return \GoetasWebservices\Client\DHL\PieceDetailsType
     */
    public function getPieceDetails()
    {
        return $this->pieceDetails;
    }

    /**
     * Sets a new pieceDetails
     *
     * @param \GoetasWebservices\Client\DHL\PieceDetailsType $pieceDetails
     * @return self
     */
    public function setPieceDetails(\GoetasWebservices\Client\DHL\PieceDetailsType $pieceDetails)
    {
        $this->pieceDetails = $pieceDetails;
        return $this;
    }

    /**
     * Adds as arrayOfPieceEventItem
     *
     * @return self
     * @param \GoetasWebservices\Client\DHL\PieceEventType $arrayOfPieceEventItem
     */
    public function addToPieceEvent(\GoetasWebservices\Client\DHL\PieceEventType $arrayOfPieceEventItem)
    {
        $this->pieceEvent[] = $arrayOfPieceEventItem;
        return $this;
    }

    /**
     * isset pieceEvent
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPieceEvent($index)
    {
        return isset($this->pieceEvent[$index]);
    }

    /**
     * unset pieceEvent
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPieceEvent($index)
    {
        unset($this->pieceEvent[$index]);
    }

    /**
     * Gets as pieceEvent
     *
     * @return \GoetasWebservices\Client\DHL\PieceEventType[]
     */
    public function getPieceEvent()
    {
        return $this->pieceEvent;
    }

    /**
     * Sets a new pieceEvent
     *
     * @param \GoetasWebservices\Client\DHL\PieceEventType[] $pieceEvent
     * @return self
     */
    public function setPieceEvent(array $pieceEvent)
    {
        $this->pieceEvent = $pieceEvent;
        return $this;
    }


}

