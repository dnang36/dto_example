<?php

namespace interface;

interface IteratorAggregate extends Traversable {

    public function getIterator();
}