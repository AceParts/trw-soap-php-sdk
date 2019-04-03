<?php

namespace AceParts\Trw\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStockPriceResponse StructType
 * @subpackage Structs
 */
class GetStockPriceResponse extends AbstractStructBase
{
    /**
     * The getStockPriceResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\StructType\StockPriceResponse
     */
    public $getStockPriceResult;
    /**
     * Constructor method for getStockPriceResponse
     * @uses GetStockPriceResponse::setGetStockPriceResult()
     * @param \AceParts\Trw\StructType\StockPriceResponse $getStockPriceResult
     */
    public function __construct(\AceParts\Trw\StructType\StockPriceResponse $getStockPriceResult = null)
    {
        $this
            ->setGetStockPriceResult($getStockPriceResult);
    }
    /**
     * Get getStockPriceResult value
     * @return \AceParts\Trw\StructType\StockPriceResponse|null
     */
    public function getGetStockPriceResult()
    {
        return $this->getStockPriceResult;
    }
    /**
     * Set getStockPriceResult value
     * @param \AceParts\Trw\StructType\StockPriceResponse $getStockPriceResult
     * @return \AceParts\Trw\StructType\GetStockPriceResponse
     */
    public function setGetStockPriceResult(\AceParts\Trw\StructType\StockPriceResponse $getStockPriceResult = null)
    {
        $this->getStockPriceResult = $getStockPriceResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AceParts\Trw\StructType\GetStockPriceResponse
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
