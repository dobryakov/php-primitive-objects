<?php

namespace Grido\PrimitiveObjects\Arrays;
use Grido\PrimitiveObjects\Strings\StringPrimitive;

/**
 * Primitive array-of-string object (as example)
 */
class ArrayOfStringsPrimitive extends ArrayPrimitive {

    /**
     * Add item to array with easy validation. Yahooo :)
     */
    public function push(StringPrimitive $item) {
        $this->value[] = $item;
    }

}
