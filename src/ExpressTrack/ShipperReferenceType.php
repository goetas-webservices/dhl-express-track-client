<?php

namespace GoetasWebservices\Client\DHL\ExpressTrack;

/**
 * Class representing ShipperReferenceType
 *
 *
 * XSD Type: ShipperReference
 */
class ShipperReferenceType
{

    /**
     * @property string $referenceID
     */
    private $referenceID = null;

    /**
     * @property string $referenceType
     */
    private $referenceType = null;

    /**
     * Gets as referenceID
     *
     * @return string
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * @param string $referenceID
     * @return self
     */
    public function setReferenceID($referenceID)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Gets as referenceType
     *
     * @return string
     */
    public function getReferenceType()
    {
        return $this->referenceType;
    }

    /**
     * Sets a new referenceType
     *
     * @param string $referenceType
     * @return self
     */
    public function setReferenceType($referenceType)
    {
        $this->referenceType = $referenceType;
        return $this;
    }


}

