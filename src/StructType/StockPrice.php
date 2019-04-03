<?php

namespace AceParts\Trw\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StockPrice StructType
 * @subpackage Structs
 */
class StockPrice extends AbstractStructBase
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
     * The Surcharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Surcharge;
    /**
     * The FreightCharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $FreightCharge;
    /**
     * The HandlingCharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $HandlingCharge;
    /**
     * The UnitPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $UnitPrice;
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
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CurrencyCode;
    /**
     * The DetailStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\ArrayType\ArrayOfStatusCode
     */
    public $DetailStatus;
    /**
     * Constructor method for StockPrice
     * @uses StockPrice::setLineNumber()
     * @uses StockPrice::setEnteredQuantity()
     * @uses StockPrice::setSuppliedQuantity()
     * @uses StockPrice::setSurcharge()
     * @uses StockPrice::setFreightCharge()
     * @uses StockPrice::setHandlingCharge()
     * @uses StockPrice::setUnitPrice()
     * @uses StockPrice::setExtensionData()
     * @uses StockPrice::setEnteredPartNumber()
     * @uses StockPrice::setSuppliedPartNumber()
     * @uses StockPrice::setCurrencyCode()
     * @uses StockPrice::setDetailStatus()
     * @param int $lineNumber
     * @param int $enteredQuantity
     * @param int $suppliedQuantity
     * @param float $surcharge
     * @param float $freightCharge
     * @param float $handlingCharge
     * @param float $unitPrice
     * @param \AceParts\Trw\StructType\ExtensionDataObject $extensionData
     * @param string $enteredPartNumber
     * @param string $suppliedPartNumber
     * @param string $currencyCode
     * @param \AceParts\Trw\ArrayType\ArrayOfStatusCode $detailStatus
     */
    public function __construct($lineNumber = null, $enteredQuantity = null, $suppliedQuantity = null, $surcharge = null, $freightCharge = null, $handlingCharge = null, $unitPrice = null, \AceParts\Trw\StructType\ExtensionDataObject $extensionData = null, $enteredPartNumber = null, $suppliedPartNumber = null, $currencyCode = null, \AceParts\Trw\ArrayType\ArrayOfStatusCode $detailStatus = null)
    {
        $this
            ->setLineNumber($lineNumber)
            ->setEnteredQuantity($enteredQuantity)
            ->setSuppliedQuantity($suppliedQuantity)
            ->setSurcharge($surcharge)
            ->setFreightCharge($freightCharge)
            ->setHandlingCharge($handlingCharge)
            ->setUnitPrice($unitPrice)
            ->setExtensionData($extensionData)
            ->setEnteredPartNumber($enteredPartNumber)
            ->setSuppliedPartNumber($suppliedPartNumber)
            ->setCurrencyCode($currencyCode)
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
     * @return \AceParts\Trw\StructType\StockPrice
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
     * @return \AceParts\Trw\StructType\StockPrice
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
     * @return \AceParts\Trw\StructType\StockPrice
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
     * Get Surcharge value
     * @return float
     */
    public function getSurcharge()
    {
        return $this->Surcharge;
    }
    /**
     * Set Surcharge value
     * @param float $surcharge
     * @return \AceParts\Trw\StructType\StockPrice
     */
    public function setSurcharge($surcharge = null)
    {
        // validation for constraint: float
        if (!is_null($surcharge) && !(is_float($surcharge) || is_numeric($surcharge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($surcharge, true), gettype($surcharge)), __LINE__);
        }
        $this->Surcharge = $surcharge;
        return $this;
    }
    /**
     * Get FreightCharge value
     * @return float
     */
    public function getFreightCharge()
    {
        return $this->FreightCharge;
    }
    /**
     * Set FreightCharge value
     * @param float $freightCharge
     * @return \AceParts\Trw\StructType\StockPrice
     */
    public function setFreightCharge($freightCharge = null)
    {
        // validation for constraint: float
        if (!is_null($freightCharge) && !(is_float($freightCharge) || is_numeric($freightCharge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($freightCharge, true), gettype($freightCharge)), __LINE__);
        }
        $this->FreightCharge = $freightCharge;
        return $this;
    }
    /**
     * Get HandlingCharge value
     * @return float
     */
    public function getHandlingCharge()
    {
        return $this->HandlingCharge;
    }
    /**
     * Set HandlingCharge value
     * @param float $handlingCharge
     * @return \AceParts\Trw\StructType\StockPrice
     */
    public function setHandlingCharge($handlingCharge = null)
    {
        // validation for constraint: float
        if (!is_null($handlingCharge) && !(is_float($handlingCharge) || is_numeric($handlingCharge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($handlingCharge, true), gettype($handlingCharge)), __LINE__);
        }
        $this->HandlingCharge = $handlingCharge;
        return $this;
    }
    /**
     * Get UnitPrice value
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }
    /**
     * Set UnitPrice value
     * @param float $unitPrice
     * @return \AceParts\Trw\StructType\StockPrice
     */
    public function setUnitPrice($unitPrice = null)
    {
        // validation for constraint: float
        if (!is_null($unitPrice) && !(is_float($unitPrice) || is_numeric($unitPrice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($unitPrice, true), gettype($unitPrice)), __LINE__);
        }
        $this->UnitPrice = $unitPrice;
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
     * @return \AceParts\Trw\StructType\StockPrice
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
     * @return \AceParts\Trw\StructType\StockPrice
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
     * @return \AceParts\Trw\StructType\StockPrice
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
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \AceParts\Trw\StructType\StockPrice
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
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
     * @return \AceParts\Trw\StructType\StockPrice
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
     * @return \AceParts\Trw\StructType\StockPrice
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
