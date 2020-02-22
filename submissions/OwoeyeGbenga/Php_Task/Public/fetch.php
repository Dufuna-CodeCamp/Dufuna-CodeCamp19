<?php
require "config.php";
/**
 * This file Handles Php Data Object connection to Db
 * which can be of any type e.g SQL db and runs commands in init.sl
 */
try {
    session_start();
    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $options);
    $stmt = $connection->query("SELECT * FROM glitz.brands");
    $brands = array();
    while ($item = $stmt->fetch()) {
        $brands[$item['id']] = $item['brand_name'];
    }
    $_SESSION['brands'] = $brands;
} catch(PDOException $error) {
    echo $error->getMessage();
}
