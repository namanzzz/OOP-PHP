<?php

    class Person
    {
        private $name;
        private $age;
        private $eyeColor;

        public static $drinkingAge = 21;
        // will be universal for all the objects created using this class template

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getInfo()
        {
            echo "name: $this->name, age: $this->age, eye color: $this->eyeColor <br>";
        }


        public static function setDrinkingAge($newDrinkingAge){
                self::$drinkingAge = $newDrinkingAge;
        }  

        public function getDrinkingAge(){
            return self::$drinkingAge; // "self" for static properties
            // otherwise "this" keyword
        }

        public function __construct($name, $age, $eyeColor)
        {
            $this->name = $name;
            $this->age = $age;
            $this->eyeColor = $eyeColor;
        }

    }
?>