<?php

require "includes/db.php";

createDb();

if (isset($_REQUEST['submit'])) {
    $conn = connectDb();

    $brand_name = mysqli_real_escape_string($conn, $_REQUEST['brands']);
    $model_name = mysqli_real_escape_string($conn, $_REQUEST['model']);
    $price_tag  = mysqli_real_escape_string($conn, $_REQUEST['price']);
    $quantity   = mysqli_real_escape_string($conn, $_REQUEST['quantity']);

    //inserting collected data into the tables

    if (in_array(strtolower($brand_name), ["nokia", "infinix", "samsung", "techno", "iphone", "gionee"])) {
        $sql = "INSERT INTO dataEntry (brand, model, price, quantity) VALUES ('$brand_name','$model_name','$price_tag','$quantity')";
        if ($conn->query($sql)) {
            echo "Record successfully added";
        } else {
            echo "Could not submit entry.\n" . $conn->error;
        }
    } else {
        echo "The brand could not be found in the database" . "<br>";
    }
}

header("Location: show.php");

?>