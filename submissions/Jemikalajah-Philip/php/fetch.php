<?php
require "config.php";

try {
    session_start();
    $connection = new PDO ($dsn, $username, $password, $options);
    $stmt_brands = $connection->query("SELECT * FROM addProducts.brands");
    $stmt_products = $connection ->query("SELECT * FROM addProducts.products");
    $brands = array();
    $brand_id = array();
    while ($item = $stmt_brands->fetch() or $item = $stmt_products -> fetch()) {
        array_push($brands, $item['brand_name']);
        array_push($brand_id, $item['brand_id']);
    }
    $mapped = array_combine($brands, $brand_id);
    $_SESSION['mapped'] = $brands;
}catch(PDOException $error){
    echo $error-> getMessage();
}

?>