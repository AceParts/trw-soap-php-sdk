<?php

namespace AceParts\Trw\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getShippingAddresses
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AceParts\Trw\StructType\GetShippingAddresses $parameters
     * @return \AceParts\Trw\StructType\GetShippingAddressesResponse|bool
     */
    public function getShippingAddresses(\AceParts\Trw\StructType\GetShippingAddresses $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getShippingAddresses($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStockAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AceParts\Trw\StructType\GetStockAvailability $parameters
     * @return \AceParts\Trw\StructType\GetStockAvailabilityResponse|bool
     */
    public function getStockAvailability(\AceParts\Trw\StructType\GetStockAvailability $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStockAvailability($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getStockPrice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AceParts\Trw\StructType\GetStockPrice $parameters
     * @return \AceParts\Trw\StructType\GetStockPriceResponse|bool
     */
    public function getStockPrice(\AceParts\Trw\StructType\GetStockPrice $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getStockPrice($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTransportMethods
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AceParts\Trw\StructType\GetTransportMethods $parameters
     * @return \AceParts\Trw\StructType\GetTransportMethodsResponse|bool
     */
    public function getTransportMethods(\AceParts\Trw\StructType\GetTransportMethods $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->getTransportMethods($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AceParts\Trw\StructType\GetShippingAddressesResponse|\AceParts\Trw\StructType\GetStockAvailabilityResponse|\AceParts\Trw\StructType\GetStockPriceResponse|\AceParts\Trw\StructType\GetTransportMethodsResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
