<?php

if (isset($_POST['submit'])) {
   $email = $_POST['email'];
   $Firstname = $_POST['First_name'];
   session_start();
   fetchDetails($email, $Firstname);
   header( 'Location:result.php');
}

function fetchDetails($email, $Firstname)
{
    //Logic to fetch from the database goes here
    $serverName = "localhost";
    $database = "ecommerce";
    $username = "Akin";
    $password = "password";

    //Open database connection
    $ring = mysqli_connect($serverName, $username, $password, $database);
    // Check that connection exists
    if (!$ring) {
        die ("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM Users WHERE email = '".$email."' AND First_name = '".$Firstname."' LIMIT 1";
    $result = mysqli_query($ring, $sql);

    $row = mysqli_fetch_assoc($result);

    if ( !$row) {
        $_SESSION['message'] = "Invalid login credentials";
    } else {    
        $_SESSION['message'] = "Authentication Successfull";
        $_SESSION['First_name'] = $row['First_name'];
        $_SESSION['email'] = $row['email'];
    }
    mysqli_close($ring);
}
?>
