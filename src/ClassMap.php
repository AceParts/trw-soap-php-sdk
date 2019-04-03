<?php
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
            'getShippingAddresses' => '\\StructType\\GetShippingAddresses',
            'ShipToRequest' => '\\StructType\\ShipToRequest',
            'ExtensionDataObject' => '\\StructType\\ExtensionDataObject',
            'getShippingAddressesResponse' => '\\StructType\\GetShippingAddressesResponse',
            'ShipToResponse' => '\\StructType\\ShipToResponse',
            'ArrayOfShipToAddress' => '\\ArrayType\\ArrayOfShipToAddress',
            'ShipToAddress' => '\\StructType\\ShipToAddress',
            'getStockAvailability' => '\\StructType\\GetStockAvailability',
            'StockAvailabilityRequest' => '\\StructType\\StockAvailabilityRequest',
            'ArrayOfStockEnquiry' => '\\ArrayType\\ArrayOfStockEnquiry',
            'StockEnquiry' => '\\StructType\\StockEnquiry',
            'getStockAvailabilityResponse' => '\\StructType\\GetStockAvailabilityResponse',
            'StockAvailabilityResponse' => '\\StructType\\StockAvailabilityResponse',
            'ArrayOfStockAvailability' => '\\ArrayType\\ArrayOfStockAvailability',
            'StockAvailability' => '\\StructType\\StockAvailability',
            'ArrayOfStatusCode' => '\\ArrayType\\ArrayOfStatusCode',
            'StatusCode' => '\\StructType\\StatusCode',
            'getStockPrice' => '\\StructType\\GetStockPrice',
            'StockPriceRequest' => '\\StructType\\StockPriceRequest',
            'getStockPriceResponse' => '\\StructType\\GetStockPriceResponse',
            'StockPriceResponse' => '\\StructType\\StockPriceResponse',
            'ArrayOfStockPrice' => '\\ArrayType\\ArrayOfStockPrice',
            'StockPrice' => '\\StructType\\StockPrice',
            'getTransportMethods' => '\\StructType\\GetTransportMethods',
            'TransportMethodRequest' => '\\StructType\\TransportMethodRequest',
            'getTransportMethodsResponse' => '\\StructType\\GetTransportMethodsResponse',
            'TransportMethodResponse' => '\\StructType\\TransportMethodResponse',
            'ArrayOfTransportMethod' => '\\ArrayType\\ArrayOfTransportMethod',
            'TransportMethod' => '\\StructType\\TransportMethod',
            'placeOrders' => '\\StructType\\PlaceOrders',
            'OrderRequest' => '\\StructType\\OrderRequest',
            'ArrayOfOrderData' => '\\ArrayType\\ArrayOfOrderData',
            'OrderData' => '\\StructType\\OrderData',
            'placeOrdersResponse' => '\\StructType\\PlaceOrdersResponse',
            'OrderResponse' => '\\StructType\\OrderResponse',
            'ArrayOfOrderLine' => '\\ArrayType\\ArrayOfOrderLine',
            'OrderLine' => '\\StructType\\OrderLine',
        );
    }
}
