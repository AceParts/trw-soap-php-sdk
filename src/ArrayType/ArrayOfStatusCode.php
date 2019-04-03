<?php

namespace AceParts\Trw\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStatusCode ArrayType
 * @subpackage Arrays
 */
class ArrayOfStatusCode extends AbstractStructArrayBase
{
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \AceParts\Trw\StructType\StatusCode[]
     */
    public $StatusCode;
    /**
     * Constructor method for ArrayOfStatusCode
     * @uses ArrayOfStatusCode::setStatusCode()
     * @param \AceParts\Trw\StructType\StatusCode[] $statusCode
     */
    public function __construct(array $statusCode = array())
    {
        $this
            ->setStatusCode($statusCode);
    }
    /**
     * Get StatusCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \AceParts\Trw\StructType\StatusCode[]|null
     */
    public function getStatusCode()
    {
        return isset($this->StatusCode) ? $this->StatusCode : null;
    }
    /**
     * This method is responsible for validating the values passed to the setStatusCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStatusCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStatusCodeForArrayConstraintsFromSetStatusCode(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStatusCodeStatusCodeItem) {
            // validation for constraint: itemType
            if (!$arrayOfStatusCodeStatusCodeItem instanceof \AceParts\Trw\StructType\StatusCode) {
                $invalidValues[] = is_object($arrayOfStatusCodeStatusCodeItem) ? get_class($arrayOfStatusCodeStatusCodeItem) : sprintf('%s(%s)', gettype($arrayOfStatusCodeStatusCodeItem), var_export($arrayOfStatusCodeStatusCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StatusCode property can only contain items of type \AceParts\Trw\StructType\StatusCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set StatusCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \AceParts\Trw\StructType\StatusCode[] $statusCode
     * @return \AceParts\Trw\ArrayType\ArrayOfStatusCode
     */
    public function setStatusCode(array $statusCode = array())
    {
        // validation for constraint: array
        if ('' !== ($statusCodeArrayErrorMessage = self::validateStatusCodeForArrayConstraintsFromSetStatusCode($statusCode))) {
            throw new \InvalidArgumentException($statusCodeArrayErrorMessage, __LINE__);
        }
        if (is_null($statusCode) || (is_array($statusCode) && empty($statusCode))) {
            unset($this->StatusCode);
        } else {
            $this->StatusCode = $statusCode;
        }
        return $this;
    }
    /**
     * Add item to StatusCode value
     * @throws \InvalidArgumentException
     * @param \AceParts\Trw\StructType\StatusCode $item
     * @return \AceParts\Trw\ArrayType\ArrayOfStatusCode
     */
    public function addToStatusCode(\AceParts\Trw\StructType\StatusCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \AceParts\Trw\StructType\StatusCode) {
            throw new \InvalidArgumentException(sprintf('The StatusCode property can only contain items of type \AceParts\Trw\StructType\StatusCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->StatusCode[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \AceParts\Trw\StructType\StatusCode|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \AceParts\Trw\StructType\StatusCode|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \AceParts\Trw\StructType\StatusCode|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \AceParts\Trw\StructType\StatusCode|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \AceParts\Trw\StructType\StatusCode|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StatusCode
     */
    public function getAttributeName()
    {
        return 'StatusCode';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \AceParts\Trw\ArrayType\ArrayOfStatusCode
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
