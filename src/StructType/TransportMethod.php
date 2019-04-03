<?php

namespace AceParts\Trw\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransportMethod StructType
 * @subpackage Structs
 */
class TransportMethod extends AbstractStructBase
{
    /**
     * The LineNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $LineNumber;
    /**
     * The ExtensionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\StructType\ExtensionDataObject
     */
    public $ExtensionData;
    /**
     * The ShipToCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShipToCode;
    /**
     * The OrderTypeCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrderTypeCode;
    /**
     * The TransportMethodCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransportMethodCode;
    /**
     * The TransportMethodDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransportMethodDescription;
    /**
     * Constructor method for TransportMethod
     * @uses TransportMethod::setLineNumber()
     * @uses TransportMethod::setExtensionData()
     * @uses TransportMethod::setShipToCode()
     * @uses TransportMethod::setOrderTypeCode()
     * @uses TransportMethod::setTransportMethodCode()
     * @uses TransportMethod::setTransportMethodDescription()
     * @param int $lineNumber
     * @param \AceParts\Trw\StructType\ExtensionDataObject $extensionData
     * @param string $shipToCode
     * @param string $orderTypeCode
     * @param string $transportMethodCode
     * @param string $transportMethodDescription
     */
    public function __construct($lineNumber = null, \AceParts\Trw\StructType\ExtensionDataObject $extensionData = null, $shipToCode = null, $orderTypeCode = null, $transportMethodCode = null, $transportMethodDescription = null)
    {
        $this
            ->setLineNumber($lineNumber)
            ->setExtensionData($extensionData)
            ->setShipToCode($shipToCode)
            ->setOrderTypeCode($orderTypeCode)
            ->setTransportMethodCode($transportMethodCode)
            ->setTransportMethodDescription($transportMethodDescription);
    }
    /**
     * Get LineNumber value
     * @return int
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    /**
     * Set LineNumber value
     * @param int $lineNumber
     * @return \AceParts\Trw\StructType\TransportMethod
     */
    public function setLineNumber($lineNumber = null)
    {
        // validation for constraint: int
        if (!is_null($lineNumber) && !(is_int($lineNumber) || ctype_digit($lineNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lineNumber, true), gettype($lineNumber)), __LINE__);
        }
        $this->LineNumber = $lineNumber;
        return $this;
    }
    /**
     * Get ExtensionData value
     * @return \AceParts\Trw\StructType\ExtensionDataObject|null
     */
    public function getExtensionData()
    {
        return $this->ExtensionData;
    }
    /**
     * Set ExtensionData value
     * @param \AceParts\Trw\StructType\ExtensionDataObject $extensionData
     * @return \AceParts\Trw\StructType\TransportMethod
     */
    public function setExtensionData(\AceParts\Trw\StructType\ExtensionDataObject $extensionData = null)
    {
        $this->ExtensionData = $extensionData;
        return $this;
    }
    /**
     * Get ShipToCode value
     * @return string|null
     */
    public function getShipToCode()
    {
        return $this->ShipToCode;
    }
    /**
     * Set ShipToCode value
     * @param string $shipToCode
     * @return \AceParts\Trw\StructType\TransportMethod
     */
    public function setShipToCode($shipToCode = null)
    {
        // validation for constraint: string
        if (!is_null($shipToCode) && !is_string($shipToCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipToCode, true), gettype($shipToCode)), __LINE__);
        }
        $this->ShipToCode = $shipToCode;
        return $this;
    }
    /**
     * Get OrderTypeCode value
     * @return string|null
     */
    public function getOrderTypeCode()
    {
        return $this->OrderTypeCode;
    }
    /**
     * Set OrderTypeCode value
     * @param string $orderTypeCode
     * @return \AceParts\Trw\StructType\TransportMethod
     */
    public function setOrderTypeCode($orderTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($orderTypeCode) && !is_string($orderTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderTypeCode, true), gettype($orderTypeCode)), __LINE__);
        }
        $this->OrderTypeCode = $orderTypeCode;
        return $this;
    }
    /**
     * Get TransportMethodCode value
     * @return string|null
     */
    public function getTransportMethodCode()
    {
        return $this->TransportMethodCode;
    }
    /**
     * Set TransportMethodCode value
     * @param string $transportMethodCode
     * @return \AceParts\Trw\StructType\TransportMethod
     */
    public function setTransportMethodCode($transportMethodCode = null)
    {
        // validation for constraint: string
        if (!is_null($transportMethodCode) && !is_string($transportMethodCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transportMethodCode, true), gettype($transportMethodCode)), __LINE__);
        }
        $this->TransportMethodCode = $transportMethodCode;
        return $this;
    }
    /**
     * Get TransportMethodDescription value
     * @return string|null
     */
    public function getTransportMethodDescription()
    {
        return $this->TransportMethodDescription;
    }
    /**
     * Set TransportMethodDescription value
     * @param string $transportMethodDescription
     * @return \AceParts\Trw\StructType\TransportMethod
     */
    public function setTransportMethodDescription($transportMethodDescription = null)
    {
        // validation for constraint: string
        if (!is_null($transportMethodDescription) && !is_string($transportMethodDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transportMethodDescription, true), gettype($transportMethodDescription)), __LINE__);
        }
        $this->TransportMethodDescription = $transportMethodDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AceParts\Trw\StructType\TransportMethod
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
