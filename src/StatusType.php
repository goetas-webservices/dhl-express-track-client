<?php

namespace GoetasWebservices\Client\DHL;

/**
 * Class representing StatusType
 *
 *
 * XSD Type: Status
 */
class StatusType
{

    /**
     * @property string $actionStatus
     */
    private $actionStatus = null;

    /**
     * @property \GoetasWebservices\Client\DHL\ConditionType[] $condition
     */
    private $condition = null;

    /**
     * Gets as actionStatus
     *
     * @return string
     */
    public function getActionStatus()
    {
        return $this->actionStatus;
    }

    /**
     * Sets a new actionStatus
     *
     * @param string $actionStatus
     * @return self
     */
    public function setActionStatus($actionStatus)
    {
        $this->actionStatus = $actionStatus;
        return $this;
    }

    /**
     * Adds as arrayOfConditionItem
     *
     * @return self
     * @param \GoetasWebservices\Client\DHL\ConditionType $arrayOfConditionItem
     */
    public function addToCondition(\GoetasWebservices\Client\DHL\ConditionType $arrayOfConditionItem)
    {
        $this->condition[] = $arrayOfConditionItem;
        return $this;
    }

    /**
     * isset condition
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * @return \GoetasWebservices\Client\DHL\ConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \GoetasWebservices\Client\DHL\ConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }


}

