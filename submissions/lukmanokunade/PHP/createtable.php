<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "dufunahelp";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE products (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    itemname VARCHAR(30) NOT NULL,
    quantity INT(3),
    date TIMESTAMP
    )";

  $sql =  "CREATE TABLE brands (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    brand_name VARCHAR(30) NOT NULL
  )";

  $sql =  "INSERT INTO brands (`brand_name`)
    VALUES
    ('Binatone'),
    ('Samsung'),
    ('LG'),
    ('Apple'),
    ('Hp'),
    ('Sony'),
    ('Nexus'),
    ('Casio')";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database tables created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

    "ALTER TABLE products
    ADD COLUMN brand_id INT(11) UNSIGNED NOT NULL,
    ADD FOREIGN KEY fk_brand(brand_id) REFERENCES brands(id) ON DELETE CASCADE";

$conn = null;
?>