<?php

namespace Grido\PrimitiveObjects\Callbacks;

class SimpleCallback implements SimpleCallbackInterface
{

    protected $name = 'SimpleCallback';

    /**
     * Do something with value when callback is called
     */
    public function act($value) {
        // do something with value
    }

    public function getName() {
        return $this->name;
    }

}
