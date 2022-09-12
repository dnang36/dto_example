<?php

namespace src;
use interface\Arrayable;
use interface\Jsonable;

abstract class Data implements Arrayable , Jsonable {

    use HasAttributes;

    public static function from(array $attributes = []): Data
    {
        $instance = new static();
        return $instance->setAttributes($attributes);
    }

    public static function collection(array $items): Collection
    {
        $items = array_map(function ($item) {
            if ($item instanceof static) {
                return $item;
            } else {
                return static::from($item);
            }
        }, $items);

        return new Collection($items);
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
        return $this->attributesToArray();
    }

    public function toJson($options=0)
    {
        // TODO: Implement toJson() method.
        return json_encode($this->toArray(), $options);
    }
}