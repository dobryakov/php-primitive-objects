<?php

namespace PrimitiveObjects\Strings;

use PrimitiveObjects\Constraints\StringConstraint;
use PrimitiveObjects\SimplePrimitive;

/**
 * Primitive string object
 */
class StringPrimitive extends SimplePrimitive {

    protected function init() {
        $this->addConstraint(new StringConstraint());
    }

}
