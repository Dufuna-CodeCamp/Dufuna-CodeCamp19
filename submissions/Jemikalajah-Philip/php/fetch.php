<?php
require "config.php";

try {
    session_start();
    $connection = new PDO ($dsn, $username, $password, $options);
    $stmt_brands = $connection->query("SELECT * FROM addProducts.brands");
    $brands = array();
    $brand_id = array();
    while ($item = $stmt_brands->fetch()) {
        array_push($brands, $item['brand_name']);
        array_push($brand_id, $item['id']);
    }
   $mappedBrands = array_combine( $brand_id, $brands);
    $_SESSION['mappedBrands'] = $mappedBrands;
   
}catch(PDOException $error){
    echo $error-> getMessage();
}

?>