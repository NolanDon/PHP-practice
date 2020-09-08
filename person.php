<?php
    class Person {
        public $name = "Nolan";
        public $eyeColor = "Green";
        public $age = "29";
        

        public function __construct($name, $eyeColor, $age, $last = "Boxill") {
            $this->name = $name;
            $this->eyeColor = $eyeColor;
            $this->age = $age;
            $this->first = $first;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function owner() {
            $a = $this->first;
            return $a;
        }  
    }


    class Pet extends Person {
        public function owner() {
            $a = $this->first;
            return $a;
        }
    }
?>