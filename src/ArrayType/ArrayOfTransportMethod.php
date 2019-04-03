<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTransportMethod ArrayType
 * @subpackage Arrays
 */
class ArrayOfTransportMethod extends AbstractStructArrayBase
{
    /**
     * The TransportMethod
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TransportMethod[]
     */
    public $TransportMethod;
    /**
     * Constructor method for ArrayOfTransportMethod
     * @uses ArrayOfTransportMethod::setTransportMethod()
     * @param \StructType\TransportMethod[] $transportMethod
     */
    public function __construct(array $transportMethod = array())
    {
        $this
            ->setTransportMethod($transportMethod);
    }
    /**
     * Get TransportMethod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TransportMethod[]|null
     */
    public function getTransportMethod()
    {
        return isset($this->TransportMethod) ? $this->TransportMethod : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTransportMethod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransportMethod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransportMethodForArrayConstraintsFromSetTransportMethod(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTransportMethodTransportMethodItem) {
            // validation for constraint: itemType
            if (!$arrayOfTransportMethodTransportMethodItem instanceof \StructType\TransportMethod) {
                $invalidValues[] = is_object($arrayOfTransportMethodTransportMethodItem) ? get_class($arrayOfTransportMethodTransportMethodItem) : sprintf('%s(%s)', gettype($arrayOfTransportMethodTransportMethodItem), var_export($arrayOfTransportMethodTransportMethodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TransportMethod property can only contain items of type \StructType\TransportMethod, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TransportMethod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\TransportMethod[] $transportMethod
     * @return \ArrayType\ArrayOfTransportMethod
     */
    public function setTransportMethod(array $transportMethod = array())
    {
        // validation for constraint: array
        if ('' !== ($transportMethodArrayErrorMessage = self::validateTransportMethodForArrayConstraintsFromSetTransportMethod($transportMethod))) {
            throw new \InvalidArgumentException($transportMethodArrayErrorMessage, __LINE__);
        }
        if (is_null($transportMethod) || (is_array($transportMethod) && empty($transportMethod))) {
            unset($this->TransportMethod);
        } else {
            $this->TransportMethod = $transportMethod;
        }
        return $this;
    }
    /**
     * Add item to TransportMethod value
     * @throws \InvalidArgumentException
     * @param \StructType\TransportMethod $item
     * @return \ArrayType\ArrayOfTransportMethod
     */
    public function addToTransportMethod(\StructType\TransportMethod $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TransportMethod) {
            throw new \InvalidArgumentException(sprintf('The TransportMethod property can only contain items of type \StructType\TransportMethod, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TransportMethod[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TransportMethod|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TransportMethod|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TransportMethod|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TransportMethod|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TransportMethod|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TransportMethod
     */
    public function getAttributeName()
    {
        return 'TransportMethod';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfTransportMethod
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
