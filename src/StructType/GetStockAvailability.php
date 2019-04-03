<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStockAvailability StructType
 * @subpackage Structs
 */
class GetStockAvailability extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\StockAvailabilityRequest
     */
    public $request;
    /**
     * Constructor method for getStockAvailability
     * @uses GetStockAvailability::setRequest()
     * @param \StructType\StockAvailabilityRequest $request
     */
    public function __construct(\StructType\StockAvailabilityRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \StructType\StockAvailabilityRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \StructType\StockAvailabilityRequest $request
     * @return \StructType\GetStockAvailability
     */
    public function setRequest(\StructType\StockAvailabilityRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetStockAvailability
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
