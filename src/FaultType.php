<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing FaultType
 *
 *
 * XSD Type: Fault
 */
class FaultType
{

    /**
     * @property \GoetasWebservices\Client\DHL\PieceFaultType[] $pieceFault
     */
    private $pieceFault = null;

    /**
     * Adds as arrayOfPieceFaultItem
     *
     * @return self
     * @param \GoetasWebservices\Client\DHL\PieceFaultType $arrayOfPieceFaultItem
     */
    public function addToPieceFault(\GoetasWebservices\Client\DHL\PieceFaultType $arrayOfPieceFaultItem)
    {
        $this->pieceFault[] = $arrayOfPieceFaultItem;
        return $this;
    }

    /**
     * isset pieceFault
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPieceFault($index)
    {
        return isset($this->pieceFault[$index]);
    }

    /**
     * unset pieceFault
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPieceFault($index)
    {
        unset($this->pieceFault[$index]);
    }

    /**
     * Gets as pieceFault
     *
     * @return \GoetasWebservices\Client\DHL\PieceFaultType[]
     */
    public function getPieceFault()
    {
        return $this->pieceFault;
    }

    /**
     * Sets a new pieceFault
     *
     * @param \GoetasWebservices\Client\DHL\PieceFaultType[] $pieceFault
     * @return self
     */
    public function setPieceFault(array $pieceFault)
    {
        $this->pieceFault = $pieceFault;
        return $this;
    }


}

