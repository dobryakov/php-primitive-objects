<?php

namespace PrimitiveObjects\Constraints;

use PrimitiveObjects\Exceptions\ConstraintException;

class ArrayConstraint extends SimpleConstraint {

    /**
     * Validate the value to must be array
     */
    public function validate($value) {
        if (!is_array($value)) {
            throw new ConstraintException;
        }
    }

} 