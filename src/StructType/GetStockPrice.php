<?php

namespace AceParts\Trw\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getStockPrice StructType
 * @subpackage Structs
 */
class GetStockPrice extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\StructType\StockPriceRequest
     */
    public $request;
    /**
     * Constructor method for getStockPrice
     * @uses GetStockPrice::setRequest()
     * @param \AceParts\Trw\StructType\StockPriceRequest $request
     */
    public function __construct(\AceParts\Trw\StructType\StockPriceRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \AceParts\Trw\StructType\StockPriceRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \AceParts\Trw\StructType\StockPriceRequest $request
     * @return \AceParts\Trw\StructType\GetStockPrice
     */
    public function setRequest(\AceParts\Trw\StructType\StockPriceRequest $request = null)
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
     * @return \AceParts\Trw\StructType\GetStockPrice
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
