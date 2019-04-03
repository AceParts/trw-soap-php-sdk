<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStockAvailabilityResponse StructType
 * @subpackage Structs
 */
class GetStockAvailabilityResponse extends AbstractStructBase
{
    /**
     * The getStockAvailabilityResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\StockAvailabilityResponse
     */
    public $getStockAvailabilityResult;
    /**
     * Constructor method for getStockAvailabilityResponse
     * @uses GetStockAvailabilityResponse::setGetStockAvailabilityResult()
     * @param \StructType\StockAvailabilityResponse $getStockAvailabilityResult
     */
    public function __construct(\StructType\StockAvailabilityResponse $getStockAvailabilityResult = null)
    {
        $this
            ->setGetStockAvailabilityResult($getStockAvailabilityResult);
    }
    /**
     * Get getStockAvailabilityResult value
     * @return \StructType\StockAvailabilityResponse|null
     */
    public function getGetStockAvailabilityResult()
    {
        return $this->getStockAvailabilityResult;
    }
    /**
     * Set getStockAvailabilityResult value
     * @param \StructType\StockAvailabilityResponse $getStockAvailabilityResult
     * @return \StructType\GetStockAvailabilityResponse
     */
    public function setGetStockAvailabilityResult(\StructType\StockAvailabilityResponse $getStockAvailabilityResult = null)
    {
        $this->getStockAvailabilityResult = $getStockAvailabilityResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetStockAvailabilityResponse
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
