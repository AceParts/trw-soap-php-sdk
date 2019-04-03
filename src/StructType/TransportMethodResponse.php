<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransportMethodResponse StructType
 * @subpackage Structs
 */
class TransportMethodResponse extends AbstractStructBase
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
     * The ExtensionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ExtensionDataObject
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
     * The TransportMethods
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTransportMethod
     */
    public $TransportMethods;
    /**
     * Constructor method for TransportMethodResponse
     * @uses TransportMethodResponse::setResponseEmpty()
     * @uses TransportMethodResponse::setExtensionData()
     * @uses TransportMethodResponse::setResponseStatus()
     * @uses TransportMethodResponse::setResponseMessage()
     * @uses TransportMethodResponse::setCustomerAccount()
     * @uses TransportMethodResponse::setTransportMethods()
     * @param bool $responseEmpty
     * @param \StructType\ExtensionDataObject $extensionData
     * @param string $responseStatus
     * @param string $responseMessage
     * @param string $customerAccount
     * @param \ArrayType\ArrayOfTransportMethod $transportMethods
     */
    public function __construct($responseEmpty = null, \StructType\ExtensionDataObject $extensionData = null, $responseStatus = null, $responseMessage = null, $customerAccount = null, \ArrayType\ArrayOfTransportMethod $transportMethods = null)
    {
        $this
            ->setResponseEmpty($responseEmpty)
            ->setExtensionData($extensionData)
            ->setResponseStatus($responseStatus)
            ->setResponseMessage($responseMessage)
            ->setCustomerAccount($customerAccount)
            ->setTransportMethods($transportMethods);
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
     * @return \StructType\TransportMethodResponse
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
     * @return \StructType\TransportMethodResponse
     */
    public function setExtensionData(\StructType\ExtensionDataObject $extensionData = null)
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
     * @return \StructType\TransportMethodResponse
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
     * @return \StructType\TransportMethodResponse
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
     * @return \StructType\TransportMethodResponse
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
     * Get TransportMethods value
     * @return \ArrayType\ArrayOfTransportMethod|null
     */
    public function getTransportMethods()
    {
        return $this->TransportMethods;
    }
    /**
     * Set TransportMethods value
     * @param \ArrayType\ArrayOfTransportMethod $transportMethods
     * @return \StructType\TransportMethodResponse
     */
    public function setTransportMethods(\ArrayType\ArrayOfTransportMethod $transportMethods = null)
    {
        $this->TransportMethods = $transportMethods;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TransportMethodResponse
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
