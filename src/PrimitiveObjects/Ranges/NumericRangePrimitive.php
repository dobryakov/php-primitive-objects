<?php

namespace Grido\PrimitiveObjects\Ranges;

use Grido\PrimitiveObjects\Interfaces\NumericPrimitiveInterface;

/**
 * Numeric range primitive
 */
class NumericRangePrimitive extends RangePrimitive
{

    /**
     * Return true if $needle is in range
     */
    public function inRange(NumericPrimitiveInterface $needle) {
        return ( ($this->left->getValue() <= $needle->getValue()) && ($this->right->getValue() >= $needle->getValue()) );
    }

} 