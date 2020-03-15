<?php
require "configure.php";
try{
    $connect= new PDO ("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("sample.sql");
    $connect->exec($sql);
    echo "Products table and database created successfully";
}
catch (PDOException $error){
    echo $sql . "<br>".$error->getMessage();
}
?>