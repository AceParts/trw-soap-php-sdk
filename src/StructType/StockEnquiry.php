<?php

namespace AceParts\Trw\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StockEnquiry StructType
 * @subpackage Structs
 */
class StockEnquiry extends AbstractStructBase
{
    /**
     * The ExtensionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\StructType\ExtensionDataObject
     */
    public $ExtensionData;
    /**
     * The PartNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PartNumber;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Quantity;
    /**
     * Constructor method for StockEnquiry
     * @uses StockEnquiry::setExtensionData()
     * @uses StockEnquiry::setPartNumber()
     * @uses StockEnquiry::setQuantity()
     * @param \AceParts\Trw\StructType\ExtensionDataObject $extensionData
     * @param string $partNumber
     * @param string $quantity
     */
    public function __construct(\AceParts\Trw\StructType\ExtensionDataObject $extensionData = null, $partNumber = null, $quantity = null)
    {
        $this
            ->setExtensionData($extensionData)
            ->setPartNumber($partNumber)
            ->setQuantity($quantity);
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
     * @return \AceParts\Trw\StructType\StockEnquiry
     */
    public function setExtensionData(\AceParts\Trw\StructType\ExtensionDataObject $extensionData = null)
    {
        $this->ExtensionData = $extensionData;
        return $this;
    }
    /**
     * Get PartNumber value
     * @return string|null
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }
    /**
     * Set PartNumber value
     * @param string $partNumber
     * @return \AceParts\Trw\StructType\StockEnquiry
     */
    public function setPartNumber($partNumber = null)
    {
        // validation for constraint: string
        if (!is_null($partNumber) && !is_string($partNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partNumber, true), gettype($partNumber)), __LINE__);
        }
        $this->PartNumber = $partNumber;
        return $this;
    }
    /**
     * Get Quantity value
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param string $quantity
     * @return \AceParts\Trw\StructType\StockEnquiry
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AceParts\Trw\StructType\StockEnquiry
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
