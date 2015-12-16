<?php

namespace PrimitiveObjects;

use PrimitiveObjects\Constraints\NumericConstraint;

/**
 * Primitive numeric object
 */
class NumericPrimitive extends SimplePrimitive {

    protected function init() {
        $this->constraints = [ new NumericConstraint() ];
    }

}
