<?php

namespace PrimitiveObjects\Numerics;

use PrimitiveObjects\Constraints\NumericConstraint;
use PrimitiveObjects\SimplePrimitive;

/**
 * Primitive numeric object
 */
class NumericPrimitive extends SimplePrimitive {

    protected function init() {
        $this->addConstraint(new NumericConstraint());
    }

}
