<?php
require "config.php";
/**
 * This file Handles Php Data Object connection to Db
 * which can be of any type e.g SQL db and runs commands in init.sql
 */

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $stmt = $connection->query("SELECT * FROM myoja.brands");
    $brands = array();
    while ($item = $stmt->fetch()) {
        $brands[$item['id']] =$item['brand_name'];
    }
    $_SESSION['brands'] = $brands;
} catch(PDOException $error) {
    echo $error->getMessage();
}
