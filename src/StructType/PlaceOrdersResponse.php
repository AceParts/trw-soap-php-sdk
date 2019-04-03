<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for placeOrdersResponse StructType
 * @subpackage Structs
 */
class PlaceOrdersResponse extends AbstractStructBase
{
    /**
     * The placeOrdersResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\OrderResponse
     */
    public $placeOrdersResult;
    /**
     * Constructor method for placeOrdersResponse
     * @uses PlaceOrdersResponse::setPlaceOrdersResult()
     * @param \StructType\OrderResponse $placeOrdersResult
     */
    public function __construct(\StructType\OrderResponse $placeOrdersResult = null)
    {
        $this
            ->setPlaceOrdersResult($placeOrdersResult);
    }
    /**
     * Get placeOrdersResult value
     * @return \StructType\OrderResponse|null
     */
    public function getPlaceOrdersResult()
    {
        return $this->placeOrdersResult;
    }
    /**
     * Set placeOrdersResult value
     * @param \StructType\OrderResponse $placeOrdersResult
     * @return \StructType\PlaceOrdersResponse
     */
    public function setPlaceOrdersResult(\StructType\OrderResponse $placeOrdersResult = null)
    {
        $this->placeOrdersResult = $placeOrdersResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PlaceOrdersResponse
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
