<?php

namespace AceParts\Trw;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'getShippingAddresses' => '\\AceParts\\Trw\\StructType\\GetShippingAddresses',
            'ShipToRequest' => '\\AceParts\\Trw\\StructType\\ShipToRequest',
            'ExtensionDataObject' => '\\AceParts\\Trw\\StructType\\ExtensionDataObject',
            'getShippingAddressesResponse' => '\\AceParts\\Trw\\StructType\\GetShippingAddressesResponse',
            'ShipToResponse' => '\\AceParts\\Trw\\StructType\\ShipToResponse',
            'ArrayOfShipToAddress' => '\\AceParts\\Trw\\ArrayType\\ArrayOfShipToAddress',
            'ShipToAddress' => '\\AceParts\\Trw\\StructType\\ShipToAddress',
            'getStockAvailability' => '\\AceParts\\Trw\\StructType\\GetStockAvailability',
            'StockAvailabilityRequest' => '\\AceParts\\Trw\\StructType\\StockAvailabilityRequest',
            'ArrayOfStockEnquiry' => '\\AceParts\\Trw\\ArrayType\\ArrayOfStockEnquiry',
            'StockEnquiry' => '\\AceParts\\Trw\\StructType\\StockEnquiry',
            'getStockAvailabilityResponse' => '\\AceParts\\Trw\\StructType\\GetStockAvailabilityResponse',
            'StockAvailabilityResponse' => '\\AceParts\\Trw\\StructType\\StockAvailabilityResponse',
            'ArrayOfStockAvailability' => '\\AceParts\\Trw\\ArrayType\\ArrayOfStockAvailability',
            'StockAvailability' => '\\AceParts\\Trw\\StructType\\StockAvailability',
            'ArrayOfStatusCode' => '\\AceParts\\Trw\\ArrayType\\ArrayOfStatusCode',
            'StatusCode' => '\\AceParts\\Trw\\StructType\\StatusCode',
            'getStockPrice' => '\\AceParts\\Trw\\StructType\\GetStockPrice',
            'StockPriceRequest' => '\\AceParts\\Trw\\StructType\\StockPriceRequest',
            'getStockPriceResponse' => '\\AceParts\\Trw\\StructType\\GetStockPriceResponse',
            'StockPriceResponse' => '\\AceParts\\Trw\\StructType\\StockPriceResponse',
            'ArrayOfStockPrice' => '\\AceParts\\Trw\\ArrayType\\ArrayOfStockPrice',
            'StockPrice' => '\\AceParts\\Trw\\StructType\\StockPrice',
            'getTransportMethods' => '\\AceParts\\Trw\\StructType\\GetTransportMethods',
            'TransportMethodRequest' => '\\AceParts\\Trw\\StructType\\TransportMethodRequest',
            'getTransportMethodsResponse' => '\\AceParts\\Trw\\StructType\\GetTransportMethodsResponse',
            'TransportMethodResponse' => '\\AceParts\\Trw\\StructType\\TransportMethodResponse',
            'ArrayOfTransportMethod' => '\\AceParts\\Trw\\ArrayType\\ArrayOfTransportMethod',
            'TransportMethod' => '\\AceParts\\Trw\\StructType\\TransportMethod',
            'placeOrders' => '\\AceParts\\Trw\\StructType\\PlaceOrders',
            'OrderRequest' => '\\AceParts\\Trw\\StructType\\OrderRequest',
            'ArrayOfOrderData' => '\\AceParts\\Trw\\ArrayType\\ArrayOfOrderData',
            'OrderData' => '\\AceParts\\Trw\\StructType\\OrderData',
            'placeOrdersResponse' => '\\AceParts\\Trw\\StructType\\PlaceOrdersResponse',
            'OrderResponse' => '\\AceParts\\Trw\\StructType\\OrderResponse',
            'ArrayOfOrderLine' => '\\AceParts\\Trw\\ArrayType\\ArrayOfOrderLine',
            'OrderLine' => '\\AceParts\\Trw\\StructType\\OrderLine',
        );
    }
}
