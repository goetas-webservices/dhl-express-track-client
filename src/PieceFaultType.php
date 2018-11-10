<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing PieceFaultType
 *
 *
 * XSD Type: PieceFault
 */
class PieceFaultType
{

    /**
     * @property string $pieceID
     */
    private $pieceID = null;

    /**
     * @property string $conditionCode
     */
    private $conditionCode = null;

    /**
     * @property string $conditionData
     */
    private $conditionData = null;

    /**
     * Gets as pieceID
     *
     * @return string
     */
    public function getPieceID()
    {
        return $this->pieceID;
    }

    /**
     * Sets a new pieceID
     *
     * @param string $pieceID
     * @return self
     */
    public function setPieceID($pieceID)
    {
        $this->pieceID = $pieceID;
        return $this;
    }

    /**
     * Gets as conditionCode
     *
     * @return string
     */
    public function getConditionCode()
    {
        return $this->conditionCode;
    }

    /**
     * Sets a new conditionCode
     *
     * @param string $conditionCode
     * @return self
     */
    public function setConditionCode($conditionCode)
    {
        $this->conditionCode = $conditionCode;
        return $this;
    }

    /**
     * Gets as conditionData
     *
     * @return string
     */
    public function getConditionData()
    {
        return $this->conditionData;
    }

    /**
     * Sets a new conditionData
     *
     * @param string $conditionData
     * @return self
     */
    public function setConditionData($conditionData)
    {
        $this->conditionData = $conditionData;
        return $this;
    }


}

