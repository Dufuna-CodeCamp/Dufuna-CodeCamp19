<?php
session_start();

if (isset($_SESSION['message'])) {
    echo $_SESSION['message'] . '<br>';
}

if (isset($_SESSION['First_name'])) {
    echo 'Welcome' . $_SESSION['First_name'] . '<br>';
    echo 'Your email is' . $_SESSION['email'] . '<br>';
    echo '<a href="logout.php">Logout</a>';
} else {
    header('Location:error.php');
}
?>

