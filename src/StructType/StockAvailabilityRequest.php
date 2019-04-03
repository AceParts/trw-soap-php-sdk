<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StockAvailabilityRequest StructType
 * @subpackage Structs
 */
class StockAvailabilityRequest extends AbstractStructBase
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
     * The Parts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfStockEnquiry
     */
    public $Parts;
    /**
     * Constructor method for StockAvailabilityRequest
     * @uses StockAvailabilityRequest::setExtensionData()
     * @uses StockAvailabilityRequest::setUserId()
     * @uses StockAvailabilityRequest::setPassword()
     * @uses StockAvailabilityRequest::setCustomerAccount()
     * @uses StockAvailabilityRequest::setParts()
     * @param \StructType\ExtensionDataObject $extensionData
     * @param string $userId
     * @param string $password
     * @param string $customerAccount
     * @param \ArrayType\ArrayOfStockEnquiry $parts
     */
    public function __construct(\StructType\ExtensionDataObject $extensionData = null, $userId = null, $password = null, $customerAccount = null, \ArrayType\ArrayOfStockEnquiry $parts = null)
    {
        $this
            ->setExtensionData($extensionData)
            ->setUserId($userId)
            ->setPassword($password)
            ->setCustomerAccount($customerAccount)
            ->setParts($parts);
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
     * @return \StructType\StockAvailabilityRequest
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
     * @return \StructType\StockAvailabilityRequest
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
     * @return \StructType\StockAvailabilityRequest
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
     * @return \StructType\StockAvailabilityRequest
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
     * Get Parts value
     * @return \ArrayType\ArrayOfStockEnquiry|null
     */
    public function getParts()
    {
        return $this->Parts;
    }
    /**
     * Set Parts value
     * @param \ArrayType\ArrayOfStockEnquiry $parts
     * @return \StructType\StockAvailabilityRequest
     */
    public function setParts(\ArrayType\ArrayOfStockEnquiry $parts = null)
    {
        $this->Parts = $parts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\StockAvailabilityRequest
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
