# TRW SOAP PHP SDK

## Usage

```php
<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://webservices.trwaftermarket.com/eos/v1/DistributorWebService.asmx?wsdl',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://webservices.trwaftermarket.com/eos/v1/DistributorWebService.asmx?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_SOAP_VERSION => SOAP_1_2,
);
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for getShippingAddresses operation/method
 */
#if ($get->getShippingAddresses(new \StructType\GetShippingAddresses()) !== false) {
#    print_r($get->getResult());
#} else {
#    print_r($get->getLastError());
#}
/**
 * Sample call for getStockAvailability operation/method
 */
/**
 * Samples for Get ServiceType
 */
$stockRequest = (new \StructType\StockAvailabilityRequest())
        ->setUserId('USER_ID')
        ->setPassword('PASS_WORD')
        ->setCustomerAccount('ACC_NO')
        ->setParts((new ArrayType\ArrayOfStockEnquiry([
            (new \StructType\StockEnquiry())->setPartNumber('PARTNO123')->setQuantity('5'),
        ])));


$stockQuery = (new \StructType\GetStockAvailability())
        ->setRequest($stockRequest);

if ($get->getStockAvailability($stockQuery) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}

/**
 * Sample call for getStockPrice operation/method
 */
#if ($get->getStockPrice(new \StructType\GetStockPrice()) !== false) {
#    print_r($get->getResult());
#} else {
#    print_r($get->getLastError());
#}
/**
 * Sample call for getTransportMethods operation/method
 */
#if ($get->getTransportMethods(new \StructType\GetTransportMethods()) !== false) {
#    print_r($get->getResult());
#} else {
#    print_r($get->getLastError());
#}
/**
 * Samples for Place ServiceType
 */
#$place = new \ServiceType\Place($options);
/**
 * Sample call for placeOrders operation/method
 */
#if ($place->placeOrders(new \StructType\PlaceOrders()) !== false) {
#    print_r($place->getResult());
#} else {
#    print_r($place->getLastError());
#}

```
