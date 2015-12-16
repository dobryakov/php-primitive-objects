<?php

namespace PrimitiveObjects;

use PrimitiveObjects\Constraints\StringConstraint;

class StringPrimitive extends SimpleObject {

    protected function init() {
        $this->constraints = [ new StringConstraint() ];
    }

}
