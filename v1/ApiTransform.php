<?php

namespace App\Api\v1;

abstract class ApiTransform
{

    /**
     * Transform one item
     * @param   mixed $item the item to transform
     * @return  the transformed item
     */
    public abstract function one($item);

    /**
     * Map item array to its transform.
     * This has the effect of changing the keys and eliminating
     * array elements for which there's no transform listed.
     * Runs each item through the one (transform) function
     * @param mixed $items - an array of items to transform
     * @return array
     */
    public function all($items) {
        return array_map([$this, 'one'], $items->toArray());
    }
}
