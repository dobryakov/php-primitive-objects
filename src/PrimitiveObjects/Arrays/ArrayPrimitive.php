<?php

namespace Grido\PrimitiveObjects\Arrays;
use Grido\PrimitiveObjects\Constraints\ArrayConstraint;
use Grido\PrimitiveObjects\SimplePrimitive;

/**
 * Primitive array object
 */
abstract class ArrayPrimitive extends SimplePrimitive implements \Iterator {

    protected function init() {
        $this->addConstraint(new ArrayConstraint());
    }

    /**
     * Next item from internal array (for iterators)
     */
    public function current() {
        return current($this->value);
    }

    /**
     * Current key from internal array (for iterators)
     */
    public function key() {
        return key($this->value);
    }

    /**
     * Rewind internal array (for iterators)
     */
    public function rewind() {
        return $this->reset();
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

    /**
     * See Iterator interface
     */
    function valid(){
        return array_key_exists($this->key(), $this->value);
    }

}
