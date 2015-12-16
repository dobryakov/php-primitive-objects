<?php

namespace PrimitiveObjects;

use PrimitiveObjects\Constraints\NumericConstraint;

class NumericPrimitive extends SimplePrimitive {

    protected function init() {
        $this->constraints = [ new NumericConstraint() ];
    }

}
