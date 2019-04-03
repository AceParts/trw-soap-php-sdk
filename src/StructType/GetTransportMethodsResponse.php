<?php

namespace AceParts\Trw\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getTransportMethodsResponse StructType
 * @subpackage Structs
 */
class GetTransportMethodsResponse extends AbstractStructBase
{
    /**
     * The getTransportMethodsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\StructType\TransportMethodResponse
     */
    public $getTransportMethodsResult;
    /**
     * Constructor method for getTransportMethodsResponse
     * @uses GetTransportMethodsResponse::setGetTransportMethodsResult()
     * @param \AceParts\Trw\StructType\TransportMethodResponse $getTransportMethodsResult
     */
    public function __construct(\AceParts\Trw\StructType\TransportMethodResponse $getTransportMethodsResult = null)
    {
        $this
            ->setGetTransportMethodsResult($getTransportMethodsResult);
    }
    /**
     * Get getTransportMethodsResult value
     * @return \AceParts\Trw\StructType\TransportMethodResponse|null
     */
    public function getGetTransportMethodsResult()
    {
        return $this->getTransportMethodsResult;
    }
    /**
     * Set getTransportMethodsResult value
     * @param \AceParts\Trw\StructType\TransportMethodResponse $getTransportMethodsResult
     * @return \AceParts\Trw\StructType\GetTransportMethodsResponse
     */
    public function setGetTransportMethodsResult(\AceParts\Trw\StructType\TransportMethodResponse $getTransportMethodsResult = null)
    {
        $this->getTransportMethodsResult = $getTransportMethodsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AceParts\Trw\StructType\GetTransportMethodsResponse
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
