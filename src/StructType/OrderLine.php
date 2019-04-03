<?php

namespace AceParts\Trw\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderLine StructType
 * @subpackage Structs
 */
class OrderLine extends AbstractStructBase
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
     * The OrderedQuantity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OrderedQuantity;
    /**
     * The SuppliedQuantity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SuppliedQuantity;
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
     * The Surcharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Surcharge;
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
     * The OrderLineNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineNumber;
    /**
     * The OrderLineSplitNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineSplitNumber;
    /**
     * The OrderLineStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineStatus;
    /**
     * The OrderedPartNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrderedPartNumber;
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
     * Constructor method for OrderLine
     * @uses OrderLine::setLineNumber()
     * @uses OrderLine::setOrderedQuantity()
     * @uses OrderLine::setSuppliedQuantity()
     * @uses OrderLine::setFreightCharge()
     * @uses OrderLine::setHandlingCharge()
     * @uses OrderLine::setSurcharge()
     * @uses OrderLine::setUnitPrice()
     * @uses OrderLine::setExtensionData()
     * @uses OrderLine::setOrderLineNumber()
     * @uses OrderLine::setOrderLineSplitNumber()
     * @uses OrderLine::setOrderLineStatus()
     * @uses OrderLine::setOrderedPartNumber()
     * @uses OrderLine::setSuppliedPartNumber()
     * @uses OrderLine::setCurrencyCode()
     * @uses OrderLine::setDetailStatus()
     * @param int $lineNumber
     * @param int $orderedQuantity
     * @param int $suppliedQuantity
     * @param float $freightCharge
     * @param float $handlingCharge
     * @param float $surcharge
     * @param float $unitPrice
     * @param \AceParts\Trw\StructType\ExtensionDataObject $extensionData
     * @param string $orderLineNumber
     * @param string $orderLineSplitNumber
     * @param string $orderLineStatus
     * @param string $orderedPartNumber
     * @param string $suppliedPartNumber
     * @param string $currencyCode
     * @param \AceParts\Trw\ArrayType\ArrayOfStatusCode $detailStatus
     */
    public function __construct($lineNumber = null, $orderedQuantity = null, $suppliedQuantity = null, $freightCharge = null, $handlingCharge = null, $surcharge = null, $unitPrice = null, \AceParts\Trw\StructType\ExtensionDataObject $extensionData = null, $orderLineNumber = null, $orderLineSplitNumber = null, $orderLineStatus = null, $orderedPartNumber = null, $suppliedPartNumber = null, $currencyCode = null, \AceParts\Trw\ArrayType\ArrayOfStatusCode $detailStatus = null)
    {
        $this
            ->setLineNumber($lineNumber)
            ->setOrderedQuantity($orderedQuantity)
            ->setSuppliedQuantity($suppliedQuantity)
            ->setFreightCharge($freightCharge)
            ->setHandlingCharge($handlingCharge)
            ->setSurcharge($surcharge)
            ->setUnitPrice($unitPrice)
            ->setExtensionData($extensionData)
            ->setOrderLineNumber($orderLineNumber)
            ->setOrderLineSplitNumber($orderLineSplitNumber)
            ->setOrderLineStatus($orderLineStatus)
            ->setOrderedPartNumber($orderedPartNumber)
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
     * @return \AceParts\Trw\StructType\OrderLine
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
     * Get OrderedQuantity value
     * @return int
     */
    public function getOrderedQuantity()
    {
        return $this->OrderedQuantity;
    }
    /**
     * Set OrderedQuantity value
     * @param int $orderedQuantity
     * @return \AceParts\Trw\StructType\OrderLine
     */
    public function setOrderedQuantity($orderedQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($orderedQuantity) && !(is_int($orderedQuantity) || ctype_digit($orderedQuantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderedQuantity, true), gettype($orderedQuantity)), __LINE__);
        }
        $this->OrderedQuantity = $orderedQuantity;
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
     * @return \AceParts\Trw\StructType\OrderLine
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
     * @return \AceParts\Trw\StructType\OrderLine
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
     * @return \AceParts\Trw\StructType\OrderLine
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
     * @return \AceParts\Trw\StructType\OrderLine
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
     * @return \AceParts\Trw\StructType\OrderLine
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
     * @return \AceParts\Trw\StructType\OrderLine
     */
    public function setExtensionData(\AceParts\Trw\StructType\ExtensionDataObject $extensionData = null)
    {
        $this->ExtensionData = $extensionData;
        return $this;
    }
    /**
     * Get OrderLineNumber value
     * @return string|null
     */
    public function getOrderLineNumber()
    {
        return $this->OrderLineNumber;
    }
    /**
     * Set OrderLineNumber value
     * @param string $orderLineNumber
     * @return \AceParts\Trw\StructType\OrderLine
     */
    public function setOrderLineNumber($orderLineNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineNumber) && !is_string($orderLineNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderLineNumber, true), gettype($orderLineNumber)), __LINE__);
        }
        $this->OrderLineNumber = $orderLineNumber;
        return $this;
    }
    /**
     * Get OrderLineSplitNumber value
     * @return string|null
     */
    public function getOrderLineSplitNumber()
    {
        return $this->OrderLineSplitNumber;
    }
    /**
     * Set OrderLineSplitNumber value
     * @param string $orderLineSplitNumber
     * @return \AceParts\Trw\StructType\OrderLine
     */
    public function setOrderLineSplitNumber($orderLineSplitNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineSplitNumber) && !is_string($orderLineSplitNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderLineSplitNumber, true), gettype($orderLineSplitNumber)), __LINE__);
        }
        $this->OrderLineSplitNumber = $orderLineSplitNumber;
        return $this;
    }
    /**
     * Get OrderLineStatus value
     * @return string|null
     */
    public function getOrderLineStatus()
    {
        return $this->OrderLineStatus;
    }
    /**
     * Set OrderLineStatus value
     * @param string $orderLineStatus
     * @return \AceParts\Trw\StructType\OrderLine
     */
    public function setOrderLineStatus($orderLineStatus = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineStatus) && !is_string($orderLineStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderLineStatus, true), gettype($orderLineStatus)), __LINE__);
        }
        $this->OrderLineStatus = $orderLineStatus;
        return $this;
    }
    /**
     * Get OrderedPartNumber value
     * @return string|null
     */
    public function getOrderedPartNumber()
    {
        return $this->OrderedPartNumber;
    }
    /**
     * Set OrderedPartNumber value
     * @param string $orderedPartNumber
     * @return \AceParts\Trw\StructType\OrderLine
     */
    public function setOrderedPartNumber($orderedPartNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderedPartNumber) && !is_string($orderedPartNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderedPartNumber, true), gettype($orderedPartNumber)), __LINE__);
        }
        $this->OrderedPartNumber = $orderedPartNumber;
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
     * @return \AceParts\Trw\StructType\OrderLine
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
     * @return \AceParts\Trw\StructType\OrderLine
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
     * @return \AceParts\Trw\StructType\OrderLine
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
     * @return \AceParts\Trw\StructType\OrderLine
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
