<?php

namespace App;

abstract class ModelDecorator implements CollectionInterface
{
    public function __construct(public CollectionInterface $collection) {}

    public function getPrice() : int {
        return $this->collection->getCountPerPage();
    }
}
