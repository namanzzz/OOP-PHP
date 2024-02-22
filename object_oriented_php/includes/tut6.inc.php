<?php

// constructors and desctructors in OOP PHP
class Person
{
    private $name;
    private $age;
    private $eyeColor;

    //methods

    public function setName($name)
    {
        $this->name = $name;
    }

    // getInfo method
    public function getInfo(){
        echo "name: $this->name, age: $this->age, eye color: $this->eyeColor <br>";
    }




    // constructors
    // runs at the beginning
    // constructor is automatically created when an object is created


    // (parameterized constructor)
    public function __construct($name, $age, $eyeColor)
    {
        $this->name = $name;
        $this->age = $age;
        $this->eyeColor = $eyeColor;
    }

    




    //destructors
    // run at the end when the object is closed off


    public function __destruct()
    {
        echo "This is the end of the class <br>";
    }

}
