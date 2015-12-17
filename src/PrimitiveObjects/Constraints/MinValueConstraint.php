<?php

namespace Grido\PrimitiveObjects\Constraints;

use Grido\PrimitiveObjects\Exceptions\ConstraintException;
use Grido\PrimitiveObjects\Numerics\NumericPrimitive;

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