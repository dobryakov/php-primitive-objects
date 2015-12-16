<?php

namespace PrimitiveObjects\Ranges;

class RangePrimitive implements RangePrimitiveInterface
{

    protected $left;
    protected $right;

    /**
     * Constructor receives the left value and right value for range
     */
    public function __construct(SimplePrimitiveInterface $left, SimplePrimitiveInterface $right) {
        $this->setRange($left, $right);
    }

    protected function setRange(SimplePrimitiveInterface $left, SimplePrimitiveInterface $right) {
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