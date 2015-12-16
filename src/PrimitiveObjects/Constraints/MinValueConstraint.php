<?php

namespace PrimitiveObjects\Constraints;

use PrimitiveObjects\Exceptions\ConstraintException;
use PrimitiveObjects\NumericPrimitive;

/**
 * Minimal value constraint
 */
class MinValueConstraint extends SimpleConstraint {

    protected $boundary;

    public function __construct(NumericPrimitive $boundary) {
        $this->boundary = $boundary;
    }

    public function validate($value) {
        if ($value > $this->boundary->getValue()) {
            throw new ConstraintException;
        }
    }

} 