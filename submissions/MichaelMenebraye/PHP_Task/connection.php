<?php
session_start();
$brands = $_POST ['brands'];
$brand_name = $_POST ['brand_name'];
$quantity = $_POST ['quantity'];
$price = $_POST ['price'];

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'ecommerce_sample';

$dsn = 'mysql:host='. $host . ';dbname='. $dbname;

$pdo = new PDO($dsn, $user, $password);

$sql = "INSERT INTO sample (brands, brand_name, quantity, price) VALUES (:brands, :brand_name, :quantity, :price)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['brands' => $brands, 'brand_name' => $brand_name, 'quantity' => $quantity, 'price' => $price]);
    
?>