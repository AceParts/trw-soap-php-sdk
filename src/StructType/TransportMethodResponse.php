<?php

namespace AceParts\Trw\StructType;

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
     * The TransportMethods
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \AceParts\Trw\ArrayType\ArrayOfTransportMethod
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
     * @param \AceParts\Trw\StructType\ExtensionDataObject $extensionData
     * @param string $responseStatus
     * @param string $responseMessage
     * @param string $customerAccount
     * @param \AceParts\Trw\ArrayType\ArrayOfTransportMethod $transportMethods
     */
    public function __construct($responseEmpty = null, \AceParts\Trw\StructType\ExtensionDataObject $extensionData = null, $responseStatus = null, $responseMessage = null, $customerAccount = null, \AceParts\Trw\ArrayType\ArrayOfTransportMethod $transportMethods = null)
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
     * @return \AceParts\Trw\StructType\TransportMethodResponse
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
     * @return \AceParts\Trw\StructType\ExtensionDataObject|null
     */
    public function getExtensionData()
    {
        return $this->ExtensionData;
    }
    /**
     * Set ExtensionData value
     * @param \AceParts\Trw\StructType\ExtensionDataObject $extensionData
     * @return \AceParts\Trw\StructType\TransportMethodResponse
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
     * @return \AceParts\Trw\StructType\TransportMethodResponse
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
     * @return \AceParts\Trw\StructType\TransportMethodResponse
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
     * @return \AceParts\Trw\StructType\TransportMethodResponse
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
     * @return \AceParts\Trw\ArrayType\ArrayOfTransportMethod|null
     */
    public function getTransportMethods()
    {
        return $this->TransportMethods;
    }
    /**
     * Set TransportMethods value
     * @param \AceParts\Trw\ArrayType\ArrayOfTransportMethod $transportMethods
     * @return \AceParts\Trw\StructType\TransportMethodResponse
     */
    public function setTransportMethods(\AceParts\Trw\ArrayType\ArrayOfTransportMethod $transportMethods = null)
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
     * @return \AceParts\Trw\StructType\TransportMethodResponse
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
