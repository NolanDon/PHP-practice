<?php
    class Person {
        public $name = "Nolan";
        public $eyeColor = "Green";
        protected $first = "Daniel";
        private $last = "Nielsen";
        private $age = "29";
        
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