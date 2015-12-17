<?php

namespace Grido\PrimitiveObjects\Ranges;

use Grido\PrimitiveObjects\Interfaces\NumericPrimitiveInterface;

/**
 * Numeric range primitive
 */
class NumericRangePrimitive extends RangePrimitive
{

    /** @var  $left  NumericPrimitive */
    protected $left;

    /** @var  $right NumericPrimitive */
    protected $right;

    /**
     * Set range as left and right values
     */
    public function setRange(NumericPrimitiveInterface $left, NumericPrimitiveInterface $right) {
        $this->left  = $left;
        $this->right = $right;
    }

    /**
     * Return range as array
     */
    public function getRange() {
        return [ $this->left, $this->right ];
    }

    /**
     * Return true if $needle is in range
     */
    public function inRange(NumericPrimitiveInterface $needle) {
        return ( ($this->left->getValue() <= $needle->getValue()) && ($this->right->getValue() >= $needle->getValue()) );
    }

} 