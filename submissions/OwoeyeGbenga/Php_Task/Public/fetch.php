<?php
require "config.php";
/**
 * This file Handles Php Data Object connection to Db
 * which can be of any type e.g SQL db and runs commands in init.sl
 */

try {
    session_start();
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $stmt = $connection->query("SELECT * FROM glitz_store.brands");
    $brands = array();
    while ($item = $stmt->fetch()) {
        array_push($brands, $item['brand_name']);
    }
    $_SESSION['brands'] = $brands;
} catch(PDOException $error) {
    echo $error->getMessage();
}
