About
-----

Bring a bit of "true OOP" to your PHP code by using primitives (strings, numbers, arrays) as a first-class objects :)

Inspired by
-----------

    "Most of the problems in software engineering occurs by the reason of
     variables get incorrect values somewhere in your code" (c) Erlang authors.

Why?
----

When you are expecting several "primitive types" as an arguments to your function, you always need to validate its inside.
This is an unefficient way which provides a lot of unusable code.
It's much better to validate and operate with them by convention-like principle bringed by true functional languages:

    Each thing is an object.

Key ideas
---------

String is an object. Numeric is an object. Array is an object (and it contains objects too). Do you want to write something like this?

    function doCoolStuff( String $name, Numeric $weight ) {
      // you will get exception if $name is not string, and/or $weight is not numeric,
      // without ANY other checks or validations in your function's body.
    }

Or, maybe:

    "Person"->pluralize() // -> "People"

It may be possible now :)

How it works
------------

Look at the code examples in test/PrimitiveObjectsTest.php to understand.

All validations and constraints incapsulated into object classes, and in case of incorrect data you will get an exception BEFORE it comes to your function's body.

You can create "immutable objects" by declining data changes if value is already set.

You can construct your own "types" of objects by combining different constraints even in runtime. For example, you can create:

* array of strings,
* with constraint of 10 items max,
* and with constraint each item to be a string with length in range 1..255,
* and begins with capitalized letter,
* and so on :)

TODO
----

* Values audit (history of changes for each object).


