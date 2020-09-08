<?php
    class Person {
        private $name = "Nolan";
        private $eyeColor = "Green";
        private $age = "29";
        

        public function __construct($name, $eyeColor, $age, $last = "Boxill") {
            $this->name = $name;
            $this->eyeColor = $eyeColor;
            $this->age = $age;
            $this->last = $last;
        }

        public function __destruct() {
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function owner() {
            $a = $this->first;
            return $a;
        }  

        public function getName() {
            $a = $this->name;
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