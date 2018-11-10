<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing TrackingPiecesType
 *
 *
 * XSD Type: TrackingPieces
 */
class TrackingPiecesType
{

    /**
     * @property \GoetasWebservices\Client\DHL\PieceInfoType[] $pieceInfo
     */
    private $pieceInfo = null;

    /**
     * Adds as arrayOfPieceInfoItem
     *
     * @return self
     * @param \GoetasWebservices\Client\DHL\PieceInfoType $arrayOfPieceInfoItem
     */
    public function addToPieceInfo(\GoetasWebservices\Client\DHL\PieceInfoType $arrayOfPieceInfoItem)
    {
        $this->pieceInfo[] = $arrayOfPieceInfoItem;
        return $this;
    }

    /**
     * isset pieceInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPieceInfo($index)
    {
        return isset($this->pieceInfo[$index]);
    }

    /**
     * unset pieceInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPieceInfo($index)
    {
        unset($this->pieceInfo[$index]);
    }

    /**
     * Gets as pieceInfo
     *
     * @return \GoetasWebservices\Client\DHL\PieceInfoType[]
     */
    public function getPieceInfo()
    {
        return $this->pieceInfo;
    }

    /**
     * Sets a new pieceInfo
     *
     * @param \GoetasWebservices\Client\DHL\PieceInfoType[] $pieceInfo
     * @return self
     */
    public function setPieceInfo(array $pieceInfo)
    {
        $this->pieceInfo = $pieceInfo;
        return $this;
    }


}

