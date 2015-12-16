<?php 

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use PrimitiveObjects\SimpleObject;

$o = new SimpleObject('test!');

echo $o->getValue();