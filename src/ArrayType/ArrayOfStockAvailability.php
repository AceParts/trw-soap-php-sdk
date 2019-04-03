<?php

namespace AceParts\Trw\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStockAvailability ArrayType
 * @subpackage Arrays
 */
class ArrayOfStockAvailability extends AbstractStructArrayBase
{
    /**
     * The StockAvailability
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \AceParts\Trw\StructType\StockAvailability[]
     */
    public $StockAvailability;
    /**
     * Constructor method for ArrayOfStockAvailability
     * @uses ArrayOfStockAvailability::setStockAvailability()
     * @param \AceParts\Trw\StructType\StockAvailability[] $stockAvailability
     */
    public function __construct(array $stockAvailability = array())
    {
        $this
            ->setStockAvailability($stockAvailability);
    }
    /**
     * Get StockAvailability value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \AceParts\Trw\StructType\StockAvailability[]|null
     */
    public function getStockAvailability()
    {
        return isset($this->StockAvailability) ? $this->StockAvailability : null;
    }
    /**
     * This method is responsible for validating the values passed to the setStockAvailability method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStockAvailability method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStockAvailabilityForArrayConstraintsFromSetStockAvailability(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStockAvailabilityStockAvailabilityItem) {
            // validation for constraint: itemType
            if (!$arrayOfStockAvailabilityStockAvailabilityItem instanceof \AceParts\Trw\StructType\StockAvailability) {
                $invalidValues[] = is_object($arrayOfStockAvailabilityStockAvailabilityItem) ? get_class($arrayOfStockAvailabilityStockAvailabilityItem) : sprintf('%s(%s)', gettype($arrayOfStockAvailabilityStockAvailabilityItem), var_export($arrayOfStockAvailabilityStockAvailabilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StockAvailability property can only contain items of type \AceParts\Trw\StructType\StockAvailability, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set StockAvailability value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \AceParts\Trw\StructType\StockAvailability[] $stockAvailability
     * @return \AceParts\Trw\ArrayType\ArrayOfStockAvailability
     */
    public function setStockAvailability(array $stockAvailability = array())
    {
        // validation for constraint: array
        if ('' !== ($stockAvailabilityArrayErrorMessage = self::validateStockAvailabilityForArrayConstraintsFromSetStockAvailability($stockAvailability))) {
            throw new \InvalidArgumentException($stockAvailabilityArrayErrorMessage, __LINE__);
        }
        if (is_null($stockAvailability) || (is_array($stockAvailability) && empty($stockAvailability))) {
            unset($this->StockAvailability);
        } else {
            $this->StockAvailability = $stockAvailability;
        }
        return $this;
    }
    /**
     * Add item to StockAvailability value
     * @throws \InvalidArgumentException
     * @param \AceParts\Trw\StructType\StockAvailability $item
     * @return \AceParts\Trw\ArrayType\ArrayOfStockAvailability
     */
    public function addToStockAvailability(\AceParts\Trw\StructType\StockAvailability $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AceParts\Trw\StructType\StockAvailability) {
            throw new \InvalidArgumentException(sprintf('The StockAvailability property can only contain items of type \AceParts\Trw\StructType\StockAvailability, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->StockAvailability[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \AceParts\Trw\StructType\StockAvailability|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \AceParts\Trw\StructType\StockAvailability|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \AceParts\Trw\StructType\StockAvailability|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \AceParts\Trw\StructType\StockAvailability|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \AceParts\Trw\StructType\StockAvailability|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StockAvailability
     */
    public function getAttributeName()
    {
        return 'StockAvailability';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \AceParts\Trw\ArrayType\ArrayOfStockAvailability
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
