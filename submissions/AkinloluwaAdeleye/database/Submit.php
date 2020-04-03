<?php
session_start();
if (isset($_POST['submit'])) {
   $Product_name = $_POST['Product Name'];
   $Quantity = $_POST['Quantity'];
   $Price = $_POST['Price'];
   $Product_id = $_POST['Product id'];
   $Brand_id = $_POST['Brand id'];
   $product_description = $_POST['Product description'];
   $Brand_name = $_POST['Brand name'];
}
if (isset($_FILES['submit'])) {
    $Product_picture = $_FILES['Picture']['name'];
}

$serverName = "localhost";
$database = "ecommerce";
$username = "Akin";
$password = "password";

$link = mysqli_connect("localhost", "Akin", "password", "ecommerce");
    // Check that connection exists
    if (mysqli_connect_errno()) {
        die ("can not connect: " . mysqli_connect_error());
        exit();
    }
    $sql = "INSERT INTO Arrivals (Product name, Quantity, Price, Product id, Brand id, Product description, Brand name) VALUES (?, ?, ?, ?, ?, ?, ?)"; 
    $stmt = mysqli_prepare($link, $sql);

    mysqli_stmt_bind_param( $stmt, "i", $Product_id);
    mysqli_stmt_execute($stmt); 
   

    mysqli_stmt_close($stmt);
    mysqli_close($link);
?>
