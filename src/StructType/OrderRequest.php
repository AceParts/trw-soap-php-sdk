<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderRequest StructType
 * @subpackage Structs
 */
class OrderRequest extends AbstractStructBase
{
    /**
     * The ExtensionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ExtensionDataObject
     */
    public $ExtensionData;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserId;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Password;
    /**
     * The CustomerAccount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerAccount;
    /**
     * The ShipToCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShipToCode;
    /**
     * The TransportMethod
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransportMethod;
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
     * The ShippingDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ShippingDate;
    /**
     * The OrderLines
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfOrderData
     */
    public $OrderLines;
    /**
     * Constructor method for OrderRequest
     * @uses OrderRequest::setExtensionData()
     * @uses OrderRequest::setUserId()
     * @uses OrderRequest::setPassword()
     * @uses OrderRequest::setCustomerAccount()
     * @uses OrderRequest::setShipToCode()
     * @uses OrderRequest::setTransportMethod()
     * @uses OrderRequest::setOrderTypeCode()
     * @uses OrderRequest::setCustomerReference()
     * @uses OrderRequest::setShippingDate()
     * @uses OrderRequest::setOrderLines()
     * @param \StructType\ExtensionDataObject $extensionData
     * @param string $userId
     * @param string $password
     * @param string $customerAccount
     * @param string $shipToCode
     * @param string $transportMethod
     * @param string $orderTypeCode
     * @param string $customerReference
     * @param string $shippingDate
     * @param \ArrayType\ArrayOfOrderData $orderLines
     */
    public function __construct(\StructType\ExtensionDataObject $extensionData = null, $userId = null, $password = null, $customerAccount = null, $shipToCode = null, $transportMethod = null, $orderTypeCode = null, $customerReference = null, $shippingDate = null, \ArrayType\ArrayOfOrderData $orderLines = null)
    {
        $this
            ->setExtensionData($extensionData)
            ->setUserId($userId)
            ->setPassword($password)
            ->setCustomerAccount($customerAccount)
            ->setShipToCode($shipToCode)
            ->setTransportMethod($transportMethod)
            ->setOrderTypeCode($orderTypeCode)
            ->setCustomerReference($customerReference)
            ->setShippingDate($shippingDate)
            ->setOrderLines($orderLines);
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
     * @return \StructType\OrderRequest
     */
    public function setExtensionData(\StructType\ExtensionDataObject $extensionData = null)
    {
        $this->ExtensionData = $extensionData;
        return $this;
    }
    /**
     * Get UserId value
     * @return string|null
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param string $userId
     * @return \StructType\OrderRequest
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \StructType\OrderRequest
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
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
     * @return \StructType\OrderRequest
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
     * @return \StructType\OrderRequest
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
     * Get TransportMethod value
     * @return string|null
     */
    public function getTransportMethod()
    {
        return $this->TransportMethod;
    }
    /**
     * Set TransportMethod value
     * @param string $transportMethod
     * @return \StructType\OrderRequest
     */
    public function setTransportMethod($transportMethod = null)
    {
        // validation for constraint: string
        if (!is_null($transportMethod) && !is_string($transportMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transportMethod, true), gettype($transportMethod)), __LINE__);
        }
        $this->TransportMethod = $transportMethod;
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
     * @return \StructType\OrderRequest
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
     * @return \StructType\OrderRequest
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
     * Get ShippingDate value
     * @return string|null
     */
    public function getShippingDate()
    {
        return $this->ShippingDate;
    }
    /**
     * Set ShippingDate value
     * @param string $shippingDate
     * @return \StructType\OrderRequest
     */
    public function setShippingDate($shippingDate = null)
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->ShippingDate = $shippingDate;
        return $this;
    }
    /**
     * Get OrderLines value
     * @return \ArrayType\ArrayOfOrderData|null
     */
    public function getOrderLines()
    {
        return $this->OrderLines;
    }
    /**
     * Set OrderLines value
     * @param \ArrayType\ArrayOfOrderData $orderLines
     * @return \StructType\OrderRequest
     */
    public function setOrderLines(\ArrayType\ArrayOfOrderData $orderLines = null)
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
     * @return \StructType\OrderRequest
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
