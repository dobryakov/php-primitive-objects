<?php

namespace Grido\PrimitiveObjects\Ranges;

use Grido\PrimitiveObjects\Interfaces\RangePrimitiveInterface;

abstract class RangePrimitive implements RangePrimitiveInterface
{

    protected $left;
    protected $right;

    /**
     * Constructor receives the left value and right value for range
     */
    public function __construct($left, $right) {
        $this->setRange($left, $right);
    }

    protected function setRange($left, $right) {
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