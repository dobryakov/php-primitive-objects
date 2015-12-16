<?php

namespace PrimitiveObjects\Constraints;

use PrimitiveObjects\Exceptions\ConstraintException;

class NumericConstraint extends SimpleConstraint {

    /**
     * Validate the value to must be numeric
     */
    public function validate($value) {
        if (!is_numeric($value)) {
            throw new ConstraintException;
        }
    }

}
