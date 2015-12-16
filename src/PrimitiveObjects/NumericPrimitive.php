<?php

namespace PrimitiveObjects;

use PrimitiveObjects\Constraints\NumericConstraint;

class NumericPrimitive extends SimpleObject {

    protected function init() {
        $this->constraints = [ new NumericConstraint() ];
    }

}
