<?php

namespace AceParts\Trw\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StockAvailability StructType
 * @subpackage Structs
 */
class StockAvailability extends AbstractStructBase
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
     * The EnteredQuantity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $EnteredQuantity;
    /**
     * The SuppliedQuantity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SuppliedQuantity;
    /**
     * The ExtensionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\StructType\ExtensionDataObject
     */
    public $ExtensionData;
    /**
     * The EnteredPartNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EnteredPartNumber;
    /**
     * The SuppliedPartNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SuppliedPartNumber;
    /**
     * The AvailabilityStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AvailabilityStatus;
    /**
     * The AvailabilityStatusImage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AvailabilityStatusImage;
    /**
     * The DetailStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\ArrayType\ArrayOfStatusCode
     */
    public $DetailStatus;
    /**
     * Constructor method for StockAvailability
     * @uses StockAvailability::setLineNumber()
     * @uses StockAvailability::setEnteredQuantity()
     * @uses StockAvailability::setSuppliedQuantity()
     * @uses StockAvailability::setExtensionData()
     * @uses StockAvailability::setEnteredPartNumber()
     * @uses StockAvailability::setSuppliedPartNumber()
     * @uses StockAvailability::setAvailabilityStatus()
     * @uses StockAvailability::setAvailabilityStatusImage()
     * @uses StockAvailability::setDetailStatus()
     * @param int $lineNumber
     * @param int $enteredQuantity
     * @param int $suppliedQuantity
     * @param \AceParts\Trw\StructType\ExtensionDataObject $extensionData
     * @param string $enteredPartNumber
     * @param string $suppliedPartNumber
     * @param string $availabilityStatus
     * @param string $availabilityStatusImage
     * @param \AceParts\Trw\ArrayType\ArrayOfStatusCode $detailStatus
     */
    public function __construct($lineNumber = null, $enteredQuantity = null, $suppliedQuantity = null, \AceParts\Trw\StructType\ExtensionDataObject $extensionData = null, $enteredPartNumber = null, $suppliedPartNumber = null, $availabilityStatus = null, $availabilityStatusImage = null, \AceParts\Trw\ArrayType\ArrayOfStatusCode $detailStatus = null)
    {
        $this
            ->setLineNumber($lineNumber)
            ->setEnteredQuantity($enteredQuantity)
            ->setSuppliedQuantity($suppliedQuantity)
            ->setExtensionData($extensionData)
            ->setEnteredPartNumber($enteredPartNumber)
            ->setSuppliedPartNumber($suppliedPartNumber)
            ->setAvailabilityStatus($availabilityStatus)
            ->setAvailabilityStatusImage($availabilityStatusImage)
            ->setDetailStatus($detailStatus);
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
     * @return \AceParts\Trw\StructType\StockAvailability
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
     * Get EnteredQuantity value
     * @return int
     */
    public function getEnteredQuantity()
    {
        return $this->EnteredQuantity;
    }
    /**
     * Set EnteredQuantity value
     * @param int $enteredQuantity
     * @return \AceParts\Trw\StructType\StockAvailability
     */
    public function setEnteredQuantity($enteredQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($enteredQuantity) && !(is_int($enteredQuantity) || ctype_digit($enteredQuantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($enteredQuantity, true), gettype($enteredQuantity)), __LINE__);
        }
        $this->EnteredQuantity = $enteredQuantity;
        return $this;
    }
    /**
     * Get SuppliedQuantity value
     * @return int
     */
    public function getSuppliedQuantity()
    {
        return $this->SuppliedQuantity;
    }
    /**
     * Set SuppliedQuantity value
     * @param int $suppliedQuantity
     * @return \AceParts\Trw\StructType\StockAvailability
     */
    public function setSuppliedQuantity($suppliedQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($suppliedQuantity) && !(is_int($suppliedQuantity) || ctype_digit($suppliedQuantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($suppliedQuantity, true), gettype($suppliedQuantity)), __LINE__);
        }
        $this->SuppliedQuantity = $suppliedQuantity;
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
     * @return \AceParts\Trw\StructType\StockAvailability
     */
    public function setExtensionData(\AceParts\Trw\StructType\ExtensionDataObject $extensionData = null)
    {
        $this->ExtensionData = $extensionData;
        return $this;
    }
    /**
     * Get EnteredPartNumber value
     * @return string|null
     */
    public function getEnteredPartNumber()
    {
        return $this->EnteredPartNumber;
    }
    /**
     * Set EnteredPartNumber value
     * @param string $enteredPartNumber
     * @return \AceParts\Trw\StructType\StockAvailability
     */
    public function setEnteredPartNumber($enteredPartNumber = null)
    {
        // validation for constraint: string
        if (!is_null($enteredPartNumber) && !is_string($enteredPartNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($enteredPartNumber, true), gettype($enteredPartNumber)), __LINE__);
        }
        $this->EnteredPartNumber = $enteredPartNumber;
        return $this;
    }
    /**
     * Get SuppliedPartNumber value
     * @return string|null
     */
    public function getSuppliedPartNumber()
    {
        return $this->SuppliedPartNumber;
    }
    /**
     * Set SuppliedPartNumber value
     * @param string $suppliedPartNumber
     * @return \AceParts\Trw\StructType\StockAvailability
     */
    public function setSuppliedPartNumber($suppliedPartNumber = null)
    {
        // validation for constraint: string
        if (!is_null($suppliedPartNumber) && !is_string($suppliedPartNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suppliedPartNumber, true), gettype($suppliedPartNumber)), __LINE__);
        }
        $this->SuppliedPartNumber = $suppliedPartNumber;
        return $this;
    }
    /**
     * Get AvailabilityStatus value
     * @return string|null
     */
    public function getAvailabilityStatus()
    {
        return $this->AvailabilityStatus;
    }
    /**
     * Set AvailabilityStatus value
     * @param string $availabilityStatus
     * @return \AceParts\Trw\StructType\StockAvailability
     */
    public function setAvailabilityStatus($availabilityStatus = null)
    {
        // validation for constraint: string
        if (!is_null($availabilityStatus) && !is_string($availabilityStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($availabilityStatus, true), gettype($availabilityStatus)), __LINE__);
        }
        $this->AvailabilityStatus = $availabilityStatus;
        return $this;
    }
    /**
     * Get AvailabilityStatusImage value
     * @return string|null
     */
    public function getAvailabilityStatusImage()
    {
        return $this->AvailabilityStatusImage;
    }
    /**
     * Set AvailabilityStatusImage value
     * @param string $availabilityStatusImage
     * @return \AceParts\Trw\StructType\StockAvailability
     */
    public function setAvailabilityStatusImage($availabilityStatusImage = null)
    {
        // validation for constraint: string
        if (!is_null($availabilityStatusImage) && !is_string($availabilityStatusImage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($availabilityStatusImage, true), gettype($availabilityStatusImage)), __LINE__);
        }
        $this->AvailabilityStatusImage = $availabilityStatusImage;
        return $this;
    }
    /**
     * Get DetailStatus value
     * @return \AceParts\Trw\ArrayType\ArrayOfStatusCode|null
     */
    public function getDetailStatus()
    {
        return $this->DetailStatus;
    }
    /**
     * Set DetailStatus value
     * @param \AceParts\Trw\ArrayType\ArrayOfStatusCode $detailStatus
     * @return \AceParts\Trw\StructType\StockAvailability
     */
    public function setDetailStatus(\AceParts\Trw\ArrayType\ArrayOfStatusCode $detailStatus = null)
    {
        $this->DetailStatus = $detailStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AceParts\Trw\StructType\StockAvailability
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
