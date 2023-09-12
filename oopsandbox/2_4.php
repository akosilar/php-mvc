<?php
    class User {
        public $name;
        public $age;

        //runs when an object is created
        public function __construct($name,$age) {
            echo __CLASS__ . ' instantiated';
            $this->name = $name;
            $this->age = $age;

        }

        public function sayHello() {
            return $this->name . ' age: ' . $this->age .' says hello';
        }

        //called when no other references to a certain object
        //used for cleanup, closing connections, etc
        public function __destruct() {
            echo 'destructor ran...';
        }
    }

    $user1 = new User('Lars',32);

    echo $user1->sayHello();