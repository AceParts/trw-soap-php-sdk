<?php

namespace AceParts\Trw\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStockEnquiry ArrayType
 * @subpackage Arrays
 */
class ArrayOfStockEnquiry extends AbstractStructArrayBase
{
    /**
     * The StockEnquiry
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \AceParts\Trw\StructType\StockEnquiry[]
     */
    public $StockEnquiry;
    /**
     * Constructor method for ArrayOfStockEnquiry
     * @uses ArrayOfStockEnquiry::setStockEnquiry()
     * @param \AceParts\Trw\StructType\StockEnquiry[] $stockEnquiry
     */
    public function __construct(array $stockEnquiry = array())
    {
        $this
            ->setStockEnquiry($stockEnquiry);
    }
    /**
     * Get StockEnquiry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \AceParts\Trw\StructType\StockEnquiry[]|null
     */
    public function getStockEnquiry()
    {
        return isset($this->StockEnquiry) ? $this->StockEnquiry : null;
    }
    /**
     * This method is responsible for validating the values passed to the setStockEnquiry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStockEnquiry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStockEnquiryForArrayConstraintsFromSetStockEnquiry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStockEnquiryStockEnquiryItem) {
            // validation for constraint: itemType
            if (!$arrayOfStockEnquiryStockEnquiryItem instanceof \AceParts\Trw\StructType\StockEnquiry) {
                $invalidValues[] = is_object($arrayOfStockEnquiryStockEnquiryItem) ? get_class($arrayOfStockEnquiryStockEnquiryItem) : sprintf('%s(%s)', gettype($arrayOfStockEnquiryStockEnquiryItem), var_export($arrayOfStockEnquiryStockEnquiryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StockEnquiry property can only contain items of type \AceParts\Trw\StructType\StockEnquiry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set StockEnquiry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \AceParts\Trw\StructType\StockEnquiry[] $stockEnquiry
     * @return \AceParts\Trw\ArrayType\ArrayOfStockEnquiry
     */
    public function setStockEnquiry(array $stockEnquiry = array())
    {
        // validation for constraint: array
        if ('' !== ($stockEnquiryArrayErrorMessage = self::validateStockEnquiryForArrayConstraintsFromSetStockEnquiry($stockEnquiry))) {
            throw new \InvalidArgumentException($stockEnquiryArrayErrorMessage, __LINE__);
        }
        if (is_null($stockEnquiry) || (is_array($stockEnquiry) && empty($stockEnquiry))) {
            unset($this->StockEnquiry);
        } else {
            $this->StockEnquiry = $stockEnquiry;
        }
        return $this;
    }
    /**
     * Add item to StockEnquiry value
     * @throws \InvalidArgumentException
     * @param \AceParts\Trw\StructType\StockEnquiry $item
     * @return \AceParts\Trw\ArrayType\ArrayOfStockEnquiry
     */
    public function addToStockEnquiry(\AceParts\Trw\StructType\StockEnquiry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AceParts\Trw\StructType\StockEnquiry) {
            throw new \InvalidArgumentException(sprintf('The StockEnquiry property can only contain items of type \AceParts\Trw\StructType\StockEnquiry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->StockEnquiry[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \AceParts\Trw\StructType\StockEnquiry|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \AceParts\Trw\StructType\StockEnquiry|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \AceParts\Trw\StructType\StockEnquiry|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \AceParts\Trw\StructType\StockEnquiry|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \AceParts\Trw\StructType\StockEnquiry|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StockEnquiry
     */
    public function getAttributeName()
    {
        return 'StockEnquiry';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \AceParts\Trw\ArrayType\ArrayOfStockEnquiry
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
