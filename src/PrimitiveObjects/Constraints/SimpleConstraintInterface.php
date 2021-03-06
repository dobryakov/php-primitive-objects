<?php

namespace Grido\PrimitiveObjects\Constraints;

interface SimpleConstraintInterface
{
    /**
     * Validate the value to match this constraint
     */
    public function validate($value);
}