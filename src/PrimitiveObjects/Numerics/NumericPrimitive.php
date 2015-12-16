<?php

namespace PrimitiveObjects\Numerics;

use PrimitiveObjects\Constraints\NumericConstraint;
use PrimitiveObjects\SimplePrimitive;
use PrimitiveObjects\SimplePrimitiveInterface;

/**
 * Primitive numeric object
 */
class NumericPrimitive extends SimplePrimitive implements SimplePrimitiveInterface {

    protected function init() {
        $this->addConstraint(new NumericConstraint());
    }

}
