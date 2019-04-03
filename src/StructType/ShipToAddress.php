<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipToAddress StructType
 * @subpackage Structs
 */
class ShipToAddress extends AbstractStructBase
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
     * @var \StructType\ExtensionDataObject
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
     * The ShipToName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShipToName;
    /**
     * Constructor method for ShipToAddress
     * @uses ShipToAddress::setLineNumber()
     * @uses ShipToAddress::setExtensionData()
     * @uses ShipToAddress::setShipToCode()
     * @uses ShipToAddress::setShipToName()
     * @param int $lineNumber
     * @param \StructType\ExtensionDataObject $extensionData
     * @param string $shipToCode
     * @param string $shipToName
     */
    public function __construct($lineNumber = null, \StructType\ExtensionDataObject $extensionData = null, $shipToCode = null, $shipToName = null)
    {
        $this
            ->setLineNumber($lineNumber)
            ->setExtensionData($extensionData)
            ->setShipToCode($shipToCode)
            ->setShipToName($shipToName);
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
     * @return \StructType\ShipToAddress
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
     * @return \StructType\ExtensionDataObject|null
     */
    public function getExtensionData()
    {
        return $this->ExtensionData;
    }
    /**
     * Set ExtensionData value
     * @param \StructType\ExtensionDataObject $extensionData
     * @return \StructType\ShipToAddress
     */
    public function setExtensionData(\StructType\ExtensionDataObject $extensionData = null)
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
     * @return \StructType\ShipToAddress
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
     * Get ShipToName value
     * @return string|null
     */
    public function getShipToName()
    {
        return $this->ShipToName;
    }
    /**
     * Set ShipToName value
     * @param string $shipToName
     * @return \StructType\ShipToAddress
     */
    public function setShipToName($shipToName = null)
    {
        // validation for constraint: string
        if (!is_null($shipToName) && !is_string($shipToName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipToName, true), gettype($shipToName)), __LINE__);
        }
        $this->ShipToName = $shipToName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ShipToAddress
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
