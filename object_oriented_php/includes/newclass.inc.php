<?php


    // class NewClass {
    //     // properties and methods goes here
    //     public $info = "This is some info";
    // }

    // $object = new NewClass();
    // var_dump($object);





    /*  Visibility and Inheritance */

    // properties and methods declared using protected keyword are accessible in both class and its inherited class(child class)


    // private properties are only accessible in home class

    // public properties are accessible anywhere inside

        class Person{
            protected $first = "Naman";
            private $last = "Matoliya";
            private $age = "22";


            // public function owner()
            // {  
            //     $a = $this->first;
            //     return $a;
            // } 
        }


        // we can inherit properties and methods from person class to Pet class

        class Pet extends Person{
                public function owner()
                {
                    $a = $this->first;
                    return $a;
                } 
        }











?>