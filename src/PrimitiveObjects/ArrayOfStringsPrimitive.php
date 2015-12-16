<?php

namespace PrimitiveObjects;

class ArrayOfStringsPrimitive extends ArrayPrimitive {

    /**
     * Add item to array with easy validation. Yahooo :)
     */
    public function push(StringPrimitive $item) {
        $this->value[] = $item;
    }

} 