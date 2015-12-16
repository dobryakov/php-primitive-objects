<?php

namespace PrimitiveObjects\Ranges;
use PrimitiveObjects\Numerics\NumericPrimitive;

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
     * Constructor receives the left value and right value for range
     */
    public function __construct(NumericPrimitive $left, NumericPrimitive $right) {
        $this->setRange($left, $right);
    }

    /**
     * Set range as left and right values
     */
    public function setRange(NumericPrimitive $left, NumericPrimitive $right) {
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
    public function inRange(NumericPrimitive $needle) {
        return ( ($this->left->getValue() <= $needle->getValue()) && ($this->right->getValue() >= $needle->getValue()) );
    }

} 