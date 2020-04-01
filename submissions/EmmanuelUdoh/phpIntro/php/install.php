<?php
require "config.php";
/**
 * This file Handles Php Data Object connection to Db
 * which can be of any type e.g SQL db and runs commands in init.sl
 */
try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("../data/init.sql");
    $connection->exec($sql);
    echo "Database and table Products created successfully.";
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
