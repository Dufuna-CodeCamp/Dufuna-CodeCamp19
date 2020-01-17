<?php
require "config.php";

try {
    session_start();
    $connection = new PDO ($dsn, $username, $password, $options);
    $stmt = $connection->query("SELECT * FROM addProducts.brands");
    $brands = array();
    while ($item = $stmt->fetch()) {
        array_push($brands, $item['brand_name']);
    }
    $_SESSION['brands'] = $brands;
}catch(PDOException $error){
    echo $error-> getMessage();
}

?>