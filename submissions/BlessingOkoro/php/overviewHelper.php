<?php
require "config.php";

try {
    session_start();
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("../data/fetch.sql");
    $stmt = $connection->query("SELECT * FROM frozen_fresh.products");
    $products = array();
    while ($item = $stmt->fetch()) {
        array_push($products, $item);
    }
    $_SESSION['products'] = $products;
    var_dump($products);
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>