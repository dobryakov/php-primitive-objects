<?php

use PrimitiveObjects\StringPrimitive;
use PrimitiveObjects\NumericPrimitive;

class PrimitiveObjectsTest extends PHPUnit_Framework_TestCase
{
    public function testStringPrimitive() {

        $value = 'test!';
        $obj = new StringPrimitive($value);
        $this->assertEquals($obj->getValue(), $value);

    }

    public function testNumericPrimitive() {

        $value = 0.123;
        $obj = new NumericPrimitive($value);
        $this->assertEquals($obj->getValue(), $value);

    }

    /**
     * @expectedException PrimitiveObjects\Exceptions\ConstraintException
     */
    public function testStringException() {

        $value = [];
        new StringPrimitive($value);

    }

    /**
     * @expectedException PrimitiveObjects\Exceptions\ConstraintException
     */
    public function testNumericException() {

        $value = 'abc';
        new NumericPrimitive($value);

    }

}