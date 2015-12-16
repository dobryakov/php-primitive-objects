<?php

use PrimitiveObjects\Strings\StringPrimitive;
use PrimitiveObjects\Numerics\NumericPrimitive;
use PrimitiveObjects\ArrayOfStringsPrimitive;
use PrimitiveObjects\Ranges\NumericRangePrimitive;

class PrimitiveObjectsTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test for strings
     */
    public function testStringPrimitive() {

        $value = 'test!';
        $obj = new StringPrimitive($value);
        $this->assertEquals($obj->getValue(), $value);

    }

    /**
     * Test for numeric
     */
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

    /**
     * Test for array of strings (for example)
     */
    public function testArrayOfStringsPrimitive() {

        $data = [ 'abc', 'def', 'ghi' ];
        $obj  = new ArrayOfStringsPrimitive();
        foreach ($data as $s) {
            $obj->push(new StringPrimitive($s));
        }
        $this->assertEquals($obj->count(), count($data));

    }

    public function testRangePrimitive() {

        $left  = new NumericPrimitive(5);
        $right = new NumericPrimitive(10);

        $in_range  = new NumericPrimitive(7);
        $out_range = new NumericPrimitive(17);

        $obj   = new NumericRangePrimitive($left, $right);

        $this->assertTrue($obj->inRange($in_range));
        $this->assertFalse($obj->inRange($out_range));

    }

}