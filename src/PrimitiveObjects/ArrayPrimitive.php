<?php

namespace PrimitiveObjects;

use PrimitiveObjects\Constraints\ArrayConstraint;

/**
 * Primitive array object
 */
class ArrayPrimitive extends SimplePrimitive {

    protected function init() {
        $this->addConstraint(new ArrayConstraint());
    }

    /**
     * Add item to internal array
     */
    public function push($item) {
        $this->value[] = $item;
    }

    /**
     * Next item from internal array (for iterators)
     */
    public function next() {
        return next($this->value);
    }

    /**
     * Reset internal array
     */
    public function reset() {
        return reset($this->value);
    }

    /**
     * Return count of internal array
     */
    public function count() {
        return count($this->value);
    }

} 