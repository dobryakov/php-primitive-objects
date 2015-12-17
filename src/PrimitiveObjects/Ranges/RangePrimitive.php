<?php

namespace Grido\PrimitiveObjects\Ranges;

use Grido\PrimitiveObjects\Interfaces\NumericPrimitiveInterface;
use Grido\PrimitiveObjects\Interfaces\RangePrimitiveInterface;

abstract class RangePrimitive implements RangePrimitiveInterface
{

    /** @var  $left  NumericPrimitiveInterface */
    protected $left;

    /** @var  $right NumericPrimitiveInterface */
    protected $right;

    /**
     * Constructor receives the left value and right value for range
     */
    public function __construct($left, $right) {
        $this->setRange($left, $right);
    }

    protected function setRange(NumericPrimitiveInterface $left, NumericPrimitiveInterface $right) {
        $this->left  = $left;
        $this->right = $right;
    }

    /**
     * Return range as array
     */
    public function getRange() {
        return [ $this->left, $this->right ];
    }

} 