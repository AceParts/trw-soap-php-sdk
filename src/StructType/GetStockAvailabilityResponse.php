<?php

namespace AceParts\Trw\StructType;

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
     * @var \AceParts\Trw\StructType\StockAvailabilityResponse
     */
    public $getStockAvailabilityResult;
    /**
     * Constructor method for getStockAvailabilityResponse
     * @uses GetStockAvailabilityResponse::setGetStockAvailabilityResult()
     * @param \AceParts\Trw\StructType\StockAvailabilityResponse $getStockAvailabilityResult
     */
    public function __construct(\AceParts\Trw\StructType\StockAvailabilityResponse $getStockAvailabilityResult = null)
    {
        $this
            ->setGetStockAvailabilityResult($getStockAvailabilityResult);
    }
    /**
     * Get getStockAvailabilityResult value
     * @return \AceParts\Trw\StructType\StockAvailabilityResponse|null
     */
    public function getGetStockAvailabilityResult()
    {
        return $this->getStockAvailabilityResult;
    }
    /**
     * Set getStockAvailabilityResult value
     * @param \AceParts\Trw\StructType\StockAvailabilityResponse $getStockAvailabilityResult
     * @return \AceParts\Trw\StructType\GetStockAvailabilityResponse
     */
    public function setGetStockAvailabilityResult(\AceParts\Trw\StructType\StockAvailabilityResponse $getStockAvailabilityResult = null)
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
     * @return \AceParts\Trw\StructType\GetStockAvailabilityResponse
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
