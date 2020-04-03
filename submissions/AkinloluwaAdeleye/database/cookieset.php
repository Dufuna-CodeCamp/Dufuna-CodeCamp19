<?php

$cookie_name1 = "loggedin";
$cookie_name2 = "Myname";
if(isset($_COOKIE[$cookie_name2])) {
    $cookie_value2 = $_COOKIE[$cookie_name2];
    echo "Welcome to your page $cookie_value2";
}
if(isset($_COOKIE[$cookie_name1])) {
    $cookie_value1 = $_COOKIE[$cookie_name1];
    echo "Your Email address is $cookie_value1"."<br>";
    echo '<a href="Readmore.php">logoutcookie</a>';
}
else {
    echo "You are not logged in";
}


