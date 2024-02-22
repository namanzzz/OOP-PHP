<?php
    class Person{
        public $name;
        public $age;
        public $eyeColor;

        public function setName(string $newName){
            $this->name = $newName;
        }

        public function getName(){
            return $this->name;
        }

    }




?>