<?php

namespace ServiceType;

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
     * @param \StructType\GetShippingAddresses $parameters
     * @return \StructType\GetShippingAddressesResponse|bool
     */
    public function getShippingAddresses(\StructType\GetShippingAddresses $parameters)
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
     * @param \StructType\GetStockAvailability $parameters
     * @return \StructType\GetStockAvailabilityResponse|bool
     */
    public function getStockAvailability(\StructType\GetStockAvailability $parameters)
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
     * @param \StructType\GetStockPrice $parameters
     * @return \StructType\GetStockPriceResponse|bool
     */
    public function getStockPrice(\StructType\GetStockPrice $parameters)
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
     * @param \StructType\GetTransportMethods $parameters
     * @return \StructType\GetTransportMethodsResponse|bool
     */
    public function getTransportMethods(\StructType\GetTransportMethods $parameters)
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
     * @return \StructType\GetShippingAddressesResponse|\StructType\GetStockAvailabilityResponse|\StructType\GetStockPriceResponse|\StructType\GetTransportMethodsResponse
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
