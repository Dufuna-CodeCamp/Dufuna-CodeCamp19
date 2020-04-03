<?php
 class User{
     public $name;
     public $age;

     public function __construct($name,$age){
         $this->name=$name;
         $this->age = $age;
     }
     public function sayHello(){
        return $this->name." says hello";
     }
     public function __destruct(){
         echo "destructor ran";
     }
 }

$user1 = new User("oke", 36);
echo $user1->name." is ".$user1->age." years old";
echo"<br>";
echo $user1->sayHello();

echo"<br>";
echo"<br>";

$user2 = new User("uche", 26);
echo $user2->name." is ".$user2->age." years old";
echo"<br>";
echo $user2->sayHello();


echo"<br>";
echo"<br>";
?>