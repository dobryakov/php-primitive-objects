<?php

namespace PrimitiveObjects;

use PrimitiveObjects\Constraints\SimpleConstraint; // CTRL + Space

class SimpleObject {

    protected $value;
    protected $constraints = [];

    protected function init() {
        // do some initialization
    }

    public function __construct($value, $constraints = []) {
        $this->init();
        foreach($constraints as $constraint) {
            $this->constraints[] = $constraint;
        }
        $this->setValue($value);
    }

    protected function validate($value) {
        foreach ($this->constraints as $constraint) {
            /** @var $constraint SimpleConstraint */
            $constraint->validate($value);
        }
    }

    public function setValue($value) {
        $this->validate($value);
        $this->value = $value;
    }

    public function getValue() {
        return $this->value;
    }

}