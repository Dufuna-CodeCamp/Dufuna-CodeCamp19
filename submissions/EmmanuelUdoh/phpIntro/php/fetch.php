<?php
require "config.php";
/**
 * This file Handles Php Data Object connection to Db
 * which can be of any type e.g SQL db and runs commands in init.sl
 */
try {
    $connection = new PDO("$dsn, $username, $password, $options);
    $stmt = $connection->query("SELECT * FROM kimaj.brands");
    $brands = array();
    while ($item = $stmt->fetch()) {
        $brands[$item['id']] = $item['brand_name'];
    }
    $_SESSION['brands'] = $brands;
} catch(PDOException $error) {
    echo $error->getMessage();
}