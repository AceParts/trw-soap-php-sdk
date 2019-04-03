<?php

namespace AceParts\Trw\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingAddresses StructType
 * @subpackage Structs
 */
class GetShippingAddresses extends AbstractStructBase
{
    /**
     * The request
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\StructType\ShipToRequest
     */
    public $request;
    /**
     * Constructor method for getShippingAddresses
     * @uses GetShippingAddresses::setRequest()
     * @param \AceParts\Trw\StructType\ShipToRequest $request
     */
    public function __construct(\AceParts\Trw\StructType\ShipToRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * @return \AceParts\Trw\StructType\ShipToRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param \AceParts\Trw\StructType\ShipToRequest $request
     * @return \AceParts\Trw\StructType\GetShippingAddresses
     */
    public function setRequest(\AceParts\Trw\StructType\ShipToRequest $request = null)
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
     * @return \AceParts\Trw\StructType\GetShippingAddresses
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
