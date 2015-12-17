<?php

namespace Grido\PrimitiveObjects;

use Grido\PrimitiveObjects\Callbacks\SimpleCallbackInterface;
use Grido\PrimitiveObjects\Constraints\SimpleConstraint;
use Grido\PrimitiveObjects\Constraints\SimpleConstraintInterface;
use Grido\PrimitiveObjects\Interfaces\SimplePrimitiveInterface; // CTRL + Space

/**
 * Basic abstract primitive entity
 */
abstract class SimplePrimitive implements SimplePrimitiveInterface
{

    protected $value;
    protected $constraints = [];
    protected $callbacks   = [];

    /**
     * Do some initialization in children classes
     */
    protected function init() {

    }

    /**
     * Constructor receives the value, and array of constraints
     */
    public function __construct($value = null, $constraints = []) {
        $this->init();
        foreach($constraints as $constraint) {
            $this->addConstraint($constraint);
        }
        if ($value !== null) {
            $this->setValue($value);
        }
    }

    /**
     * Add constraint to this object
     */
    public function addConstraint(SimpleConstraintInterface $constraint) {
        $this->constraints[] = $constraint;
    }

    /**
     * Add callback to this object
     */
    public function addCallback(SimpleCallbackInterface $callback) {
        $this->callbacks[$callback->getName()] = $callback;
    }

    public function getCallback($name) {
        return $this->callbacks[$name];
    }

    /**
     * Validate the value through constraints before saving
     */
    protected function validate($value) {
        foreach ($this->constraints as $constraint) {
            /** @var $constraint SimpleConstraint */
            $constraint->validate($value);
        }
    }

    /**
     * Saving the value
     */
    public function setValue($value) {
        $this->validate($value);
        $this->value = $value;
        foreach($this->callbacks as $callback) {
            /** @var $callback SimpleCallbackInterface */
            $callback->act($value);
        }
    }

    /**
     * Loading the value
     */
    public function getValue() {
        return $this->value;
    }

}