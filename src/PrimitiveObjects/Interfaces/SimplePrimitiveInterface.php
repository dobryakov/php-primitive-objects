<?php

namespace PrimitiveObjects\Interfaces;

/**
 * Basic abstract primitive entity
 */
interface SimplePrimitiveInterface
{
    /**
     * Loading the value
     */
    public function getValue();

    /**
     * Saving the value
     */
    public function setValue($value);
}