<?php 

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use PrimitiveObjects\StringPrimitive;
use PrimitiveObjects\NumericPrimitive;

$o1 = new StringPrimitive('test!');
echo $o1->getValue() . "\n";

$o2 = new NumericPrimitive(0.123);
echo $o2->getValue() . "\n";
