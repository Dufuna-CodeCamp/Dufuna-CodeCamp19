<?php

$cookie_name1 = "loggedin";
$cookie_name2 = "Myname";

$serverName = "localhost";
$database = "ecommerce";
$username = "Akin";
$password = "password";

$part = mysqli_connect($serverName, $username, $password, $database);


if (isset($_POST['submit'])) {
   $email = $_POST['email'];
   $Firstname = $_POST['First_name'];

   $sql = "SELECT * FROM Users WHERE email = '".$email."' AND First_name = '".$Firstname."'";
   $result = mysqli_query($part, $sql);
   $count = mysqli_num_rows ($result);

   if ($count == 1) {
       $cookie_value1 = $email;
       $cookie_value2 = $Firstname;
       setcookie($cookie_name1, $cookie_value1, time() + (3500), "/", "", 0);
       setcookie($cookie_name2, $cookie_value2, time() + (3500), "/", "", 0);
       header( 'Location:cookieset.php');
   } else {
       echo "Email or First name is not valid";
   }
  

    mysqli_close($part);
}
