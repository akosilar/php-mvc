<?php 
    //define a class
    class User {
        //properties (attributes)
        public $name;
        //methods (functions)
        public function sayHello() {
            echo 'Hello '.  $this->name;
        }
    }

    //instantiate a user object from the user class

    $user1 = new User();
    $user1->name = 'Lars';

    //to access the property/attribute
    echo $user1->name;
    echo '<br>';
    $user1->sayHello();

//create new user
$user2 = new User();
echo '<br>';
echo $user2->sayHello();