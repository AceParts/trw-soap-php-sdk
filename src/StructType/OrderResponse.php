<?php

namespace AceParts\Trw\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderResponse StructType
 * @subpackage Structs
 */
class OrderResponse extends AbstractStructBase
{
    /**
     * The ResponseEmpty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $ResponseEmpty;
    /**
     * The TotalOrderValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TotalOrderValue;
    /**
     * The ExtensionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\StructType\ExtensionDataObject
     */
    public $ExtensionData;
    /**
     * The ResponseStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ResponseStatus;
    /**
     * The ResponseMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ResponseMessage;
    /**
     * The CustomerAccount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerAccount;
    /**
     * The OrderNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrderNumber;
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
     * The CustomerReference
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerReference;
    /**
     * The OrderLines
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\ArrayType\ArrayOfOrderLine
     */
    public $OrderLines;
    /**
     * Constructor method for OrderResponse
     * @uses OrderResponse::setResponseEmpty()
     * @uses OrderResponse::setTotalOrderValue()
     * @uses OrderResponse::setExtensionData()
     * @uses OrderResponse::setResponseStatus()
     * @uses OrderResponse::setResponseMessage()
     * @uses OrderResponse::setCustomerAccount()
     * @uses OrderResponse::setOrderNumber()
     * @uses OrderResponse::setShipToCode()
     * @uses OrderResponse::setOrderTypeCode()
     * @uses OrderResponse::setCustomerReference()
     * @uses OrderResponse::setOrderLines()
     * @param bool $responseEmpty
     * @param float $totalOrderValue
     * @param \AceParts\Trw\StructType\ExtensionDataObject $extensionData
     * @param string $responseStatus
     * @param string $responseMessage
     * @param string $customerAccount
     * @param string $orderNumber
     * @param string $shipToCode
     * @param string $orderTypeCode
     * @param string $customerReference
     * @param \AceParts\Trw\ArrayType\ArrayOfOrderLine $orderLines
     */
    public function __construct($responseEmpty = null, $totalOrderValue = null, \AceParts\Trw\StructType\ExtensionDataObject $extensionData = null, $responseStatus = null, $responseMessage = null, $customerAccount = null, $orderNumber = null, $shipToCode = null, $orderTypeCode = null, $customerReference = null, \AceParts\Trw\ArrayType\ArrayOfOrderLine $orderLines = null)
    {
        $this
            ->setResponseEmpty($responseEmpty)
            ->setTotalOrderValue($totalOrderValue)
            ->setExtensionData($extensionData)
            ->setResponseStatus($responseStatus)
            ->setResponseMessage($responseMessage)
            ->setCustomerAccount($customerAccount)
            ->setOrderNumber($orderNumber)
            ->setShipToCode($shipToCode)
            ->setOrderTypeCode($orderTypeCode)
            ->setCustomerReference($customerReference)
            ->setOrderLines($orderLines);
    }
    /**
     * Get ResponseEmpty value
     * @return bool
     */
    public function getResponseEmpty()
    {
        return $this->ResponseEmpty;
    }
    /**
     * Set ResponseEmpty value
     * @param bool $responseEmpty
     * @return \AceParts\Trw\StructType\OrderResponse
     */
    public function setResponseEmpty($responseEmpty = null)
    {
        // validation for constraint: boolean
        if (!is_null($responseEmpty) && !is_bool($responseEmpty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($responseEmpty, true), gettype($responseEmpty)), __LINE__);
        }
        $this->ResponseEmpty = $responseEmpty;
        return $this;
    }
    /**
     * Get TotalOrderValue value
     * @return float
     */
    public function getTotalOrderValue()
    {
        return $this->TotalOrderValue;
    }
    /**
     * Set TotalOrderValue value
     * @param float $totalOrderValue
     * @return \AceParts\Trw\StructType\OrderResponse
     */
    public function setTotalOrderValue($totalOrderValue = null)
    {
        // validation for constraint: float
        if (!is_null($totalOrderValue) && !(is_float($totalOrderValue) || is_numeric($totalOrderValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalOrderValue, true), gettype($totalOrderValue)), __LINE__);
        }
        $this->TotalOrderValue = $totalOrderValue;
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
     * @return \AceParts\Trw\StructType\OrderResponse
     */
    public function setExtensionData(\AceParts\Trw\StructType\ExtensionDataObject $extensionData = null)
    {
        $this->ExtensionData = $extensionData;
        return $this;
    }
    /**
     * Get ResponseStatus value
     * @return string|null
     */
    public function getResponseStatus()
    {
        return $this->ResponseStatus;
    }
    /**
     * Set ResponseStatus value
     * @param string $responseStatus
     * @return \AceParts\Trw\StructType\OrderResponse
     */
    public function setResponseStatus($responseStatus = null)
    {
        // validation for constraint: string
        if (!is_null($responseStatus) && !is_string($responseStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseStatus, true), gettype($responseStatus)), __LINE__);
        }
        $this->ResponseStatus = $responseStatus;
        return $this;
    }
    /**
     * Get ResponseMessage value
     * @return string|null
     */
    public function getResponseMessage()
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param string $responseMessage
     * @return \AceParts\Trw\StructType\OrderResponse
     */
    public function setResponseMessage($responseMessage = null)
    {
        // validation for constraint: string
        if (!is_null($responseMessage) && !is_string($responseMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseMessage, true), gettype($responseMessage)), __LINE__);
        }
        $this->ResponseMessage = $responseMessage;
        return $this;
    }
    /**
     * Get CustomerAccount value
     * @return string|null
     */
    public function getCustomerAccount()
    {
        return $this->CustomerAccount;
    }
    /**
     * Set CustomerAccount value
     * @param string $customerAccount
     * @return \AceParts\Trw\StructType\OrderResponse
     */
    public function setCustomerAccount($customerAccount = null)
    {
        // validation for constraint: string
        if (!is_null($customerAccount) && !is_string($customerAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAccount, true), gettype($customerAccount)), __LINE__);
        }
        $this->CustomerAccount = $customerAccount;
        return $this;
    }
    /**
     * Get OrderNumber value
     * @return string|null
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }
    /**
     * Set OrderNumber value
     * @param string $orderNumber
     * @return \AceParts\Trw\StructType\OrderResponse
     */
    public function setOrderNumber($orderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        $this->OrderNumber = $orderNumber;
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
     * @return \AceParts\Trw\StructType\OrderResponse
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
     * @return \AceParts\Trw\StructType\OrderResponse
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
     * Get CustomerReference value
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->CustomerReference;
    }
    /**
     * Set CustomerReference value
     * @param string $customerReference
     * @return \AceParts\Trw\StructType\OrderResponse
     */
    public function setCustomerReference($customerReference = null)
    {
        // validation for constraint: string
        if (!is_null($customerReference) && !is_string($customerReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerReference, true), gettype($customerReference)), __LINE__);
        }
        $this->CustomerReference = $customerReference;
        return $this;
    }
    /**
     * Get OrderLines value
     * @return \AceParts\Trw\ArrayType\ArrayOfOrderLine|null
     */
    public function getOrderLines()
    {
        return $this->OrderLines;
    }
    /**
     * Set OrderLines value
     * @param \AceParts\Trw\ArrayType\ArrayOfOrderLine $orderLines
     * @return \AceParts\Trw\StructType\OrderResponse
     */
    public function setOrderLines(\AceParts\Trw\ArrayType\ArrayOfOrderLine $orderLines = null)
    {
        $this->OrderLines = $orderLines;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \AceParts\Trw\StructType\OrderResponse
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
