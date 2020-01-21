<?php

$host = "localhost";
$username = "root";
$password = "freeze";
$dbname = "frozen_fresh";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);