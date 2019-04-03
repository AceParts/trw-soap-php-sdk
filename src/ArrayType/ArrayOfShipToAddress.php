<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipToAddress ArrayType
 * @subpackage Arrays
 */
class ArrayOfShipToAddress extends AbstractStructArrayBase
{
    /**
     * The ShipToAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ShipToAddress[]
     */
    public $ShipToAddress;
    /**
     * Constructor method for ArrayOfShipToAddress
     * @uses ArrayOfShipToAddress::setShipToAddress()
     * @param \StructType\ShipToAddress[] $shipToAddress
     */
    public function __construct(array $shipToAddress = array())
    {
        $this
            ->setShipToAddress($shipToAddress);
    }
    /**
     * Get ShipToAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ShipToAddress[]|null
     */
    public function getShipToAddress()
    {
        return isset($this->ShipToAddress) ? $this->ShipToAddress : null;
    }
    /**
     * This method is responsible for validating the values passed to the setShipToAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipToAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipToAddressForArrayConstraintsFromSetShipToAddress(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfShipToAddressShipToAddressItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipToAddressShipToAddressItem instanceof \StructType\ShipToAddress) {
                $invalidValues[] = is_object($arrayOfShipToAddressShipToAddressItem) ? get_class($arrayOfShipToAddressShipToAddressItem) : sprintf('%s(%s)', gettype($arrayOfShipToAddressShipToAddressItem), var_export($arrayOfShipToAddressShipToAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ShipToAddress property can only contain items of type \StructType\ShipToAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ShipToAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ShipToAddress[] $shipToAddress
     * @return \ArrayType\ArrayOfShipToAddress
     */
    public function setShipToAddress(array $shipToAddress = array())
    {
        // validation for constraint: array
        if ('' !== ($shipToAddressArrayErrorMessage = self::validateShipToAddressForArrayConstraintsFromSetShipToAddress($shipToAddress))) {
            throw new \InvalidArgumentException($shipToAddressArrayErrorMessage, __LINE__);
        }
        if (is_null($shipToAddress) || (is_array($shipToAddress) && empty($shipToAddress))) {
            unset($this->ShipToAddress);
        } else {
            $this->ShipToAddress = $shipToAddress;
        }
        return $this;
    }
    /**
     * Add item to ShipToAddress value
     * @throws \InvalidArgumentException
     * @param \StructType\ShipToAddress $item
     * @return \ArrayType\ArrayOfShipToAddress
     */
    public function addToShipToAddress(\StructType\ShipToAddress $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ShipToAddress) {
            throw new \InvalidArgumentException(sprintf('The ShipToAddress property can only contain items of type \StructType\ShipToAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ShipToAddress[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ShipToAddress|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ShipToAddress|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ShipToAddress|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ShipToAddress|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ShipToAddress|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ShipToAddress
     */
    public function getAttributeName()
    {
        return 'ShipToAddress';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfShipToAddress
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
