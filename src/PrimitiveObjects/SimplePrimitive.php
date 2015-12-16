<?php

namespace PrimitiveObjects;

use PrimitiveObjects\Constraints\SimpleConstraint; // CTRL + Space

class SimplePrimitive {

    protected $value;
    protected $constraints = [];

    /**
     * Do some initialization in children classes
     */
    protected function init() {

    }

    /**
     * Constructor receives the value and constraints array
     */
    public function __construct($value, $constraints = []) {
        $this->init();
        foreach($constraints as $constraint) {
            $this->constraints[] = $constraint;
        }
        $this->setValue($value);
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
    }

    /**
     * Loading the value
     */
    public function getValue() {
        return $this->value;
    }

}