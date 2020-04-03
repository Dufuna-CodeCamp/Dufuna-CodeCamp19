<?php

session_start();
if(isset($_POST["submit"])) {
$Product_name = $_POST['Product_name'];
$Quantity = $_POST['Quantity'];
$Price = $_POST['Price'];
$Product_id = $_POST['Product_id'];
$Brand_id = $_POST['Brand_id'];
$product_description = $_POST['Product_description'];
$Brand_name = $_POST['Brand_name'];

$host = 'localhost';
$user = 'Akin';
$password = 'password';
$dbname = 'ecommerce';

$dsn = 'mysql:host='. $host . ';dbname='. $dbname;

$pdo = new PDO($dsn, $user, $password);

$sql = "INSERT INTO arrivals (Product_name, Quantity, Price, Product_id, Brand_id, Product_description, Brand_name) VALUES (:Product_name, :Quantity, :Price, :Product_id, :Brand_id, :Product_description, :Brand_name)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['Product_name' => $Product_name, 'Quantity' => $Quantity, 'Price' => $Price, 'Product_id' => $Product_id, 'Brand_id' =>$Brand_id, 'Product_description' => $product_description, 'Brand_name' => $Brand_name]);

    
}
?>