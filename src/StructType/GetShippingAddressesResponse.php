<?php

namespace AceParts\Trw\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingAddressesResponse StructType
 * @subpackage Structs
 */
class GetShippingAddressesResponse extends AbstractStructBase
{
    /**
     * The getShippingAddressesResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\StructType\ShipToResponse
     */
    public $getShippingAddressesResult;
    /**
     * Constructor method for getShippingAddressesResponse
     * @uses GetShippingAddressesResponse::setGetShippingAddressesResult()
     * @param \AceParts\Trw\StructType\ShipToResponse $getShippingAddressesResult
     */
    public function __construct(\AceParts\Trw\StructType\ShipToResponse $getShippingAddressesResult = null)
    {
        $this
            ->setGetShippingAddressesResult($getShippingAddressesResult);
    }
    /**
     * Get getShippingAddressesResult value
     * @return \AceParts\Trw\StructType\ShipToResponse|null
     */
    public function getGetShippingAddressesResult()
    {
        return $this->getShippingAddressesResult;
    }
    /**
     * Set getShippingAddressesResult value
     * @param \AceParts\Trw\StructType\ShipToResponse $getShippingAddressesResult
     * @return \AceParts\Trw\StructType\GetShippingAddressesResponse
     */
    public function setGetShippingAddressesResult(\AceParts\Trw\StructType\ShipToResponse $getShippingAddressesResult = null)
    {
        $this->getShippingAddressesResult = $getShippingAddressesResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AceParts\Trw\StructType\GetShippingAddressesResponse
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
