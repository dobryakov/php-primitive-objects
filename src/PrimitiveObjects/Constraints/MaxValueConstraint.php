<?php

namespace PrimitiveObjects\Constraints;

use PrimitiveObjects\Exceptions\ConstraintException;

/**
 * Maximum value constraint
 */
class MaxValueConstraint extends MinValueConstraint {

    public function validate($value) {
        if ($value < $this->boundary->getValue()) {
            throw new ConstraintException;
        }
    }

}