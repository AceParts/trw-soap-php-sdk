<?php

namespace AceParts\Trw\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StockPriceRequest StructType
 * @subpackage Structs
 */
class StockPriceRequest extends AbstractStructBase
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
     * @var \AceParts\Trw\ArrayType\ArrayOfStockEnquiry
     */
    public $Parts;
    /**
     * Constructor method for StockPriceRequest
     * @uses StockPriceRequest::setExtensionData()
     * @uses StockPriceRequest::setUserId()
     * @uses StockPriceRequest::setPassword()
     * @uses StockPriceRequest::setCustomerAccount()
     * @uses StockPriceRequest::setParts()
     * @param \AceParts\Trw\StructType\ExtensionDataObject $extensionData
     * @param string $userId
     * @param string $password
     * @param string $customerAccount
     * @param \AceParts\Trw\ArrayType\ArrayOfStockEnquiry $parts
     */
    public function __construct(\AceParts\Trw\StructType\ExtensionDataObject $extensionData = null, $userId = null, $password = null, $customerAccount = null, \AceParts\Trw\ArrayType\ArrayOfStockEnquiry $parts = null)
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
     * @return \AceParts\Trw\StructType\ExtensionDataObject|null
     */
    public function getExtensionData()
    {
        return $this->ExtensionData;
    }
    /**
     * Set ExtensionData value
     * @param \AceParts\Trw\StructType\ExtensionDataObject $extensionData
     * @return \AceParts\Trw\StructType\StockPriceRequest
     */
    public function setExtensionData(\AceParts\Trw\StructType\ExtensionDataObject $extensionData = null)
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
     * @return \AceParts\Trw\StructType\StockPriceRequest
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
     * @return \AceParts\Trw\StructType\StockPriceRequest
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
     * @return \AceParts\Trw\StructType\StockPriceRequest
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
     * @return \AceParts\Trw\ArrayType\ArrayOfStockEnquiry|null
     */
    public function getParts()
    {
        return $this->Parts;
    }
    /**
     * Set Parts value
     * @param \AceParts\Trw\ArrayType\ArrayOfStockEnquiry $parts
     * @return \AceParts\Trw\StructType\StockPriceRequest
     */
    public function setParts(\AceParts\Trw\ArrayType\ArrayOfStockEnquiry $parts = null)
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
     * @return \AceParts\Trw\StructType\StockPriceRequest
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
