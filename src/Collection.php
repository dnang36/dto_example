<?php

namespace src;
use interface\CollectionInterface;

class Collection implements CollectionInterface{

    private array $element;

    public function __construct($element)
    {
        $this->element=$element;
    }

    public function __toString()
    {
        return self::class . '@' . spl_object_hash($this);
    }


    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }

    public function isEmty()
    {
        // TODO: Implement isEmty() method.
        return empty($this->element);
    }

    public function filter($callback)
    {
        // TODO: Implement filter() method.
    }

    public function clear()
    {
        // TODO: Implement clear() method.
    }

    public function add($element)
    {
        // TODO: Implement add() method.
        $this->element[] = $element;
        return true;
    }

    public function first()
    {
        // TODO: Implement first() method.
    }

    public function last()
    {
        // TODO: Implement last() method.
    }

    public function map($callback)
    {
        // TODO: Implement map() method.
    }

    public function count()
    {
        // TODO: Implement count() method.
    }

    public function getIterator()
    {
        // TODO: Implement getIterator() method.
    }
}