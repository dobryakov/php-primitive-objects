<?php

namespace PrimitiveObjects;

use PrimitiveObjects\Constraints\StringConstraint;

class StringPrimitive extends SimplePrimitive {

    protected function init() {
        $this->constraints = [ new StringConstraint() ];
    }

}
