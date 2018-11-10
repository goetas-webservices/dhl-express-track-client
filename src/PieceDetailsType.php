<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing PieceDetailsType
 *
 *
 * XSD Type: PieceDetails
 */
class PieceDetailsType
{

    /**
     * @property string $aWBNumber
     */
    private $aWBNumber = null;

    /**
     * @property string $licensePlate
     */
    private $licensePlate = null;

    /**
     * @property string $pieceNumber
     */
    private $pieceNumber = null;

    /**
     * @property string $actualDepth
     */
    private $actualDepth = null;

    /**
     * @property string $actualWidth
     */
    private $actualWidth = null;

    /**
     * @property string $actualHeight
     */
    private $actualHeight = null;

    /**
     * @property string $actualWeight
     */
    private $actualWeight = null;

    /**
     * @property string $depth
     */
    private $depth = null;

    /**
     * @property string $width
     */
    private $width = null;

    /**
     * @property string $height
     */
    private $height = null;

    /**
     * @property string $weight
     */
    private $weight = null;

    /**
     * @property string $packageType
     */
    private $packageType = null;

    /**
     * @property string $dimWeight
     */
    private $dimWeight = null;

    /**
     * @property string $weightUnit
     */
    private $weightUnit = null;

    /**
     * @property string $pieceContents
     */
    private $pieceContents = null;

    /**
     * Gets as aWBNumber
     *
     * @return string
     */
    public function getAWBNumber()
    {
        return $this->aWBNumber;
    }

    /**
     * Sets a new aWBNumber
     *
     * @param string $aWBNumber
     * @return self
     */
    public function setAWBNumber($aWBNumber)
    {
        $this->aWBNumber = $aWBNumber;
        return $this;
    }

    /**
     * Gets as licensePlate
     *
     * @return string
     */
    public function getLicensePlate()
    {
        return $this->licensePlate;
    }

    /**
     * Sets a new licensePlate
     *
     * @param string $licensePlate
     * @return self
     */
    public function setLicensePlate($licensePlate)
    {
        $this->licensePlate = $licensePlate;
        return $this;
    }

    /**
     * Gets as pieceNumber
     *
     * @return string
     */
    public function getPieceNumber()
    {
        return $this->pieceNumber;
    }

    /**
     * Sets a new pieceNumber
     *
     * @param string $pieceNumber
     * @return self
     */
    public function setPieceNumber($pieceNumber)
    {
        $this->pieceNumber = $pieceNumber;
        return $this;
    }

    /**
     * Gets as actualDepth
     *
     * @return string
     */
    public function getActualDepth()
    {
        return $this->actualDepth;
    }

    /**
     * Sets a new actualDepth
     *
     * @param string $actualDepth
     * @return self
     */
    public function setActualDepth($actualDepth)
    {
        $this->actualDepth = $actualDepth;
        return $this;
    }

    /**
     * Gets as actualWidth
     *
     * @return string
     */
    public function getActualWidth()
    {
        return $this->actualWidth;
    }

    /**
     * Sets a new actualWidth
     *
     * @param string $actualWidth
     * @return self
     */
    public function setActualWidth($actualWidth)
    {
        $this->actualWidth = $actualWidth;
        return $this;
    }

    /**
     * Gets as actualHeight
     *
     * @return string
     */
    public function getActualHeight()
    {
        return $this->actualHeight;
    }

    /**
     * Sets a new actualHeight
     *
     * @param string $actualHeight
     * @return self
     */
    public function setActualHeight($actualHeight)
    {
        $this->actualHeight = $actualHeight;
        return $this;
    }

    /**
     * Gets as actualWeight
     *
     * @return string
     */
    public function getActualWeight()
    {
        return $this->actualWeight;
    }

    /**
     * Sets a new actualWeight
     *
     * @param string $actualWeight
     * @return self
     */
    public function setActualWeight($actualWeight)
    {
        $this->actualWeight = $actualWeight;
        return $this;
    }

    /**
     * Gets as depth
     *
     * @return string
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Sets a new depth
     *
     * @param string $depth
     * @return self
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
        return $this;
    }

    /**
     * Gets as width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param string $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param string $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * @param string $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as packageType
     *
     * @return string
     */
    public function getPackageType()
    {
        return $this->packageType;
    }

    /**
     * Sets a new packageType
     *
     * @param string $packageType
     * @return self
     */
    public function setPackageType($packageType)
    {
        $this->packageType = $packageType;
        return $this;
    }

    /**
     * Gets as dimWeight
     *
     * @return string
     */
    public function getDimWeight()
    {
        return $this->dimWeight;
    }

    /**
     * Sets a new dimWeight
     *
     * @param string $dimWeight
     * @return self
     */
    public function setDimWeight($dimWeight)
    {
        $this->dimWeight = $dimWeight;
        return $this;
    }

    /**
     * Gets as weightUnit
     *
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * Sets a new weightUnit
     *
     * @param string $weightUnit
     * @return self
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    /**
     * Gets as pieceContents
     *
     * @return string
     */
    public function getPieceContents()
    {
        return $this->pieceContents;
    }

    /**
     * Sets a new pieceContents
     *
     * @param string $pieceContents
     * @return self
     */
    public function setPieceContents($pieceContents)
    {
        $this->pieceContents = $pieceContents;
        return $this;
    }


}

