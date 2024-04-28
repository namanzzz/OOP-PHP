<?php
// Scope Resolution operator ::
// Here is the first class example

class FirstClass
{

    const example = "You cant change this!";

    // methods
    public static function test()
    {
        $testing = "This is a test";
        return $testing;
    }
}
// scope resolution operator ::
// $a = FirstClass::example;
// echo $a;

//  $b = FirstClass::test();
//  echo $b;


// second class which inherits the data from first class


class SecondClass extends FirstClass{
    // properties
    public static $staticProperty = "A static property!";

    // Methods
    public static function anotherTest(){
        echo parent::example;
        echo self::$staticProperty;
    }

}

$b = SecondClass::anotherTest();
echo $b;

// scope resolution :: can be used both in child class and outside of the parent class to access static, const properties
