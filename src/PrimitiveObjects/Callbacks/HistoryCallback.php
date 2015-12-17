<?php

namespace Grido\PrimitiveObjects\Callbacks;

class HistoryCallback extends SimpleCallback
{

    protected $name = 'HistoryCallback';
    protected $history = [];

    public function act($value) {
        $this->history[] = $value;
    }

    public function getHistory() {
        return $this->history;
    }

}
