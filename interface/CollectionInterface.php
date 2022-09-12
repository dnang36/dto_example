<?php

namespace interface;
use interface\Countable;
use interface\IteratorAggregate;
use interface\ArrayAccess;
use interface\Arrayable;

interface CollectionInterface extends Countable, IteratorAggregate, ArrayAccess, Arrayable  {

    public function isEmty();

    public function filter(\Closure $callback);

    public function clear();

    public function add($element);

    public function first();

    public function last();

    public function map(\Closure $callback);

}