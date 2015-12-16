<?php

namespace PrimitiveObjects\Constraints;

use PrimitiveObjects\Exceptions\ConstraintException;

class StringConstraint extends SimpleConstraint {

    /**
     * Validate the value to must be string
     */
    public function validate($value) {
        if (!is_string($value)) {
            throw new ConstraintException;
        }
    }

}
