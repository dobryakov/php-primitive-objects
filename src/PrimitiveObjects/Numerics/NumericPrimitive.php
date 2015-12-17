<?php

namespace Grido\PrimitiveObjects\Numerics;

use Grido\PrimitiveObjects\Constraints\NumericConstraint;
use Grido\PrimitiveObjects\Interfaces\SimplePrimitiveInterface;
use Grido\PrimitiveObjects\SimplePrimitive;

/**
 * Primitive numeric object
 */
class NumericPrimitive extends SimplePrimitive implements SimplePrimitiveInterface {

    protected function init() {
        $this->addConstraint(new NumericConstraint());
    }

}
