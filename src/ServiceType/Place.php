<?php

namespace AceParts\Trw\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Place ServiceType
 * @subpackage Services
 */
class Place extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named placeOrders
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \AceParts\Trw\StructType\PlaceOrders $parameters
     * @return \AceParts\Trw\StructType\PlaceOrdersResponse|bool
     */
    public function placeOrders(\AceParts\Trw\StructType\PlaceOrders $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->placeOrders($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \AceParts\Trw\StructType\PlaceOrdersResponse
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
