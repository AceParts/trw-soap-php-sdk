<?php

namespace AceParts\Trw\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrderLine ArrayType
 * @subpackage Arrays
 */
class ArrayOfOrderLine extends AbstractStructArrayBase
{
    /**
     * The OrderLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \AceParts\Trw\StructType\OrderLine[]
     */
    public $OrderLine;
    /**
     * Constructor method for ArrayOfOrderLine
     * @uses ArrayOfOrderLine::setOrderLine()
     * @param \AceParts\Trw\StructType\OrderLine[] $orderLine
     */
    public function __construct(array $orderLine = array())
    {
        $this
            ->setOrderLine($orderLine);
    }
    /**
     * Get OrderLine value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \AceParts\Trw\StructType\OrderLine[]|null
     */
    public function getOrderLine()
    {
        return isset($this->OrderLine) ? $this->OrderLine : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderLine method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderLine method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderLineForArrayConstraintsFromSetOrderLine(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOrderLineOrderLineItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrderLineOrderLineItem instanceof \AceParts\Trw\StructType\OrderLine) {
                $invalidValues[] = is_object($arrayOfOrderLineOrderLineItem) ? get_class($arrayOfOrderLineOrderLineItem) : sprintf('%s(%s)', gettype($arrayOfOrderLineOrderLineItem), var_export($arrayOfOrderLineOrderLineItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrderLine property can only contain items of type \AceParts\Trw\StructType\OrderLine, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OrderLine value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \AceParts\Trw\StructType\OrderLine[] $orderLine
     * @return \AceParts\Trw\ArrayType\ArrayOfOrderLine
     */
    public function setOrderLine(array $orderLine = array())
    {
        // validation for constraint: array
        if ('' !== ($orderLineArrayErrorMessage = self::validateOrderLineForArrayConstraintsFromSetOrderLine($orderLine))) {
            throw new \InvalidArgumentException($orderLineArrayErrorMessage, __LINE__);
        }
        if (is_null($orderLine) || (is_array($orderLine) && empty($orderLine))) {
            unset($this->OrderLine);
        } else {
            $this->OrderLine = $orderLine;
        }
        return $this;
    }
    /**
     * Add item to OrderLine value
     * @throws \InvalidArgumentException
     * @param \AceParts\Trw\StructType\OrderLine $item
     * @return \AceParts\Trw\ArrayType\ArrayOfOrderLine
     */
    public function addToOrderLine(\AceParts\Trw\StructType\OrderLine $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AceParts\Trw\StructType\OrderLine) {
            throw new \InvalidArgumentException(sprintf('The OrderLine property can only contain items of type \AceParts\Trw\StructType\OrderLine, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OrderLine[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \AceParts\Trw\StructType\OrderLine|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \AceParts\Trw\StructType\OrderLine|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \AceParts\Trw\StructType\OrderLine|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \AceParts\Trw\StructType\OrderLine|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \AceParts\Trw\StructType\OrderLine|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrderLine
     */
    public function getAttributeName()
    {
        return 'OrderLine';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \AceParts\Trw\ArrayType\ArrayOfOrderLine
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
