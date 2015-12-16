<?php

namespace PrimitiveObjects;

use PrimitiveObjects\Constraints\ArrayConstraint;

class ArrayPrimitive extends SimplePrimitive {

    protected function init() {
        $this->constraints = [ new ArrayConstraint() ];
    }

    /**
     * Add item to array
     */
    public function push($item) {
        $this->value[] = $item;
    }

    public function next() {
        next($this->value);
    }

    public function reset() {
        reset($this->value);
    }

    public function count() {
        return count($this->value);
    }

} 