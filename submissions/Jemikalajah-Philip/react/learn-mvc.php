<?php
//define a class
    class User{
        // properties (attributes)
        public $name;
        //methods (functions)
        public function sayHello(){
            return $this->name." says hello";
        }
    }

    $user1 = new User();
    $user1->name = "oke";
    echo $user1->name;

    echo "<br>";

    echo $user1->sayHello();

    echo "<br>"; 

    $user2 = new User();
    $user2->name = "john";
    echo $user2->name;

    echo "<br>"; 

    echo $user2->sayHello();

?>