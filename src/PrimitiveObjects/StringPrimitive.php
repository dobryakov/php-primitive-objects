<?php

namespace PrimitiveObjects;

use PrimitiveObjects\Constraints\StringConstraint;

/**
 * Primitive string object
 */
class StringPrimitive extends SimplePrimitive {

    protected function init() {
        $this->constraints = [ new StringConstraint() ];
    }

}
