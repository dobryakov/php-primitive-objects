<?php

namespace PrimitiveObjects\Numerics;

use PrimitiveObjects\Constraints\NumericConstraint;
use PrimitiveObjects\Interfaces\SimplePrimitiveInterface;
use PrimitiveObjects\SimplePrimitive;

/**
 * Primitive numeric object
 */
class NumericPrimitive extends SimplePrimitive implements SimplePrimitiveInterface {

    protected function init() {
        $this->addConstraint(new NumericConstraint());
    }

}
