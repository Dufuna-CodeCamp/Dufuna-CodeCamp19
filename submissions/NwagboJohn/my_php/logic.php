<?php
//creating connection
$hostName = "localhost";
$userName = "root";
$password = "";
$conn     = mysqli_connect($hostName, $userName, $password);
if ($conn === false) {
    die("error:could not connect." . mysqli_connect_error());
}
;
//creating database
$q        = mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS store");
$database = mysqli_select_db($conn, "store");
//linking the database to connection
$conn2    = mysqli_connect($hostName, $userName, $password, "store");
//created table
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS dataEntry (
               id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
               brand VARCHAR(30) NOT NULL,
               model VARCHAR(30) NOT NULL,
               price VARCHAR(12) NOT NULL,
               quantity VARCHAR(12) NOT NULL,
               dates DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);");
//collecting details from the form
if (isset($_REQUEST['submit'])) {
    $brand_name = mysqli_real_escape_string($conn2, $_REQUEST['brands']);
    $model_name = mysqli_real_escape_string($conn2, $_REQUEST['model']);
    $price_tag  = mysqli_real_escape_string($conn2, $_REQUEST['price']);
    $quantity   = mysqli_real_escape_string($conn2, $_REQUEST['quantity']);
    //inserting collected data into the tables
    if ($brand_name == "nokia" || $brand_name == "infinix" || $brand_name == "samsung" || $brand_name == "techno" || $brand_name == "gionee" || $brand_name == "iphone") {
        $sql = "INSERT INTO dataEntry(brand,model,price,quantity) VALUES ('$brand_name','$model_name','$price_tag','$quantity')";
        if (mysqli_query($conn2, $sql)) {
            echo "record successfully added";
        } else {
            echo "could not submit entry" . mysqli_error($conn2);
        }
    } else {
        echo "the brand is not found in the database" . "<br>";
    }
}

?>
<button><a href="show.php">show stock</a></button>
<button><a href="ecommerceDb.php">upload stock</a></button>
