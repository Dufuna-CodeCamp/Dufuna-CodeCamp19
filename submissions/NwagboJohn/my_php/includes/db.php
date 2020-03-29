<?php

function connect($host = "localhost", $user = "root", $password = "")
{
    $conn = new mysqli($host, $user, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    };
    return $conn;
}

function createDb()
{
    $conn = connect();
    $conn->query("CREATE DATABASE IF NOT EXISTS `store`");
    if ($conn->select_db("store")) {
        $sql = "CREATE TABLE IF NOT EXISTS `store`.`dataEntry` (
               `id` INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
               `brand` VARCHAR(30) NOT NULL,
               `model` VARCHAR(30) NOT NULL,
               `price` VARCHAR(12) NOT NULL,
               `quantity` VARCHAR(12) NOT NULL,
               `dates` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);";
        if ($conn->query($sql)) {
            echo "Table created successfully";
        }
    }
    $conn = null;
}

function connectDb($dbName = "store")
{
    $conn = connect();
    $conn->select_db("store");
    return $conn;
}