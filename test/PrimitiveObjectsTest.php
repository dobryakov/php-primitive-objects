<?php

use Grido\PrimitiveObjects\Numerics\NumericPrimitive;
use Grido\PrimitiveObjects\Ranges\NumericRangePrimitive;
use Grido\PrimitiveObjects\Arrays\ArrayOfStringsPrimitive;
use Grido\PrimitiveObjects\Strings\StringPrimitive;
use Grido\PrimitiveObjects\Callbacks\HistoryCallback;

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
     * @expectedException Grido\PrimitiveObjects\Exceptions\ConstraintException
     */
    public function testStringException() {

        $value = [];
        new StringPrimitive($value);

    }

    /**
     * @expectedException Grido\PrimitiveObjects\Exceptions\ConstraintException
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

    /**
     * Test for Range Primitive
     */
    public function testRangePrimitive() {

        $left  = new NumericPrimitive(5);
        $right = new NumericPrimitive(10);

        $in_range  = new NumericPrimitive(7);
        $out_range = new NumericPrimitive(17);

        $obj   = new NumericRangePrimitive($left, $right);

        $this->assertTrue($obj->inRange($in_range));
        $this->assertFalse($obj->inRange($out_range));

    }

    /**
     * Use Array Primitive as usual array
     */
    public function testArrayAccess() {

        $data = [ 'abc', 'def', 'ghi' ];
        $obj  = new ArrayOfStringsPrimitive();
        foreach ($data as $s) {
            $obj->push(new StringPrimitive($s));
        }

        $this->assertEquals($obj->reset()->getValue(), reset($data));

        // foreach

        $result = [];
        foreach($obj as $item) {
            $result[] = $item->getValue();
        }
        $this->assertEquals($data, $result);

        // almost-true functional style of iteration

        $obj->reset();
        $result = [];
        while ($obj->current() != null) {
            $result[] = $obj->current()->getValue();
            $obj->next();
        }
        $this->assertEquals($data, $result);

    }

    /**
     * Get history of value changes
     */
    public function testHistoryCallback() {
        $data = [ 'abc', 'def', 'ghi' ];
        $obj  = new StringPrimitive();
        $obj->addCallback(new HistoryCallback());
        foreach($data as $word) {
            $obj->setValue($word);
        }
        $this->assertEquals($data, $obj->getCallback('HistoryCallback')->getHistory());
    }

}

