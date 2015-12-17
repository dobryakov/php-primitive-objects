<?php

namespace Grido\PrimitiveObjects\Strings;

use Grido\PrimitiveObjects\Constraints\StringConstraint;
use Grido\PrimitiveObjects\SimplePrimitive;

/**
 * Primitive string object
 */
class StringPrimitive extends SimplePrimitive {

    protected function init() {
        $this->addConstraint(new StringConstraint());
    }

}
