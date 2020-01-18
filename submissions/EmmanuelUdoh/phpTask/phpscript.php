<?php
/*$host = "localhost";
$db_name = "ecommerce sample";
$username = "root";
$password = "mysql";
$con = new PDO("mysql:host={$host}; dbname={$db_name}", $username, $password);
$query = "SELECT id, brand_id, name, description, price, manufacturer, picture_url FROM products WHERE id = ? LIMIT 0,1";
$stmt = $con -> prepare($query);
$product_id = 4;
$stmt ->bindParam(1, $product_id);
$stmt ->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
echo "<div> Name: " . $row['name'] . "</div>";
echo "<div> Description: " . $row['description'] . "</div>";
echo "<div>Price: N" . $row['price'] . "</div>";*/

$host = "localhost";
$username = "root";
$password = "mysql";
$dbname = "myEcommerce_sample";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //$sql = "CREATE DATABASE myEcommerce_sample";
    $sql = /*"CREATE TABLE brands (
        id INT(20) NOT NULL AUTO_INCREMENT,
 		name VARCHAR (20) NOT NULL,
 		description TEXT NOT NULL,
 		PRIMARY KEY (id)
    )"; */
    
    /*"CREATE TABLE products (
        `id` INT NOT NULL AUTO_INCREMENT,
        `brand_id` INT(50) NOT NULL,
        `name` VARCHAR(20) NOT NULL,
        `description` TEXT NOT NULL,
        `price` INT(6) NOT NULL,
        `manufacturer` VARCHAR(50) NOT NULL,
        `picture url` VARCHAR(100) NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (brand_id) REFERENCES brands(id) ON DELETE CASCADE,
        date TIMESTAMP
    )";*/

    "INSERT INTO brands (id, name, description) 
    VALUES ('101', 'Prada', 'nice wrist watch'),('405', 'Tecno', 'camon powerful phone'),('1005','Sony', 'camera with excellent pixels'),
    ('56','Hisense', 'powerful tv called like'),('68','Binatone', 'stepdown home appliance')";
    
   
    $conn->exec($sql);
    echo "new record created successfully<br>";
} 
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>