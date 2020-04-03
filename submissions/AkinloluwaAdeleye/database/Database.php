<html>

<head>
<?php
    $link = mysqli_connect('localhost', 'Akin', 'password');
    if ($link === false) {
        die ("can not connect: " . mysqli_connect_error());
    }
    
    $sql = "CREATE DATABASE ecommerce";
    if (mysqli_query($link, $sql)) {
        echo "Your database was created";
    } else {
        echo "Error: " . mysqli_error($link);
    }
    $db_selected = mysqli_select_db($link, "ecommerce");
    if ( !$db_selected) {
        die ( "can\'t use ecommerce : " . mysqli_error($link));
    }
    $sql = "CREATE TABLE Products (id INT NOT NULL AUTO_INCREMENT,
    brand_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    price INT NOT NUll,
    Manufacturer VARCHAR(100) NOT NULL,
    Picture_url VARCHAR(100) NOT NULL, 
    Reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
)";
    if (mysqli_query($link, $sql)) {
        echo "Your Table was created";
    } else {
        echo "Error: " . mysqli_error($link);
    }
    $sql = "INSERT INTO Products (id, brand_id, name, description, price, Manufacturer, Picture_url) VALUES (1, 10254, 'Painting brush', 'a pink pack of a set of brushes with varying thickness', 1000, 'givenchy', 'Painting brush picture_url'), 
    (2, 12254, '20 litre Paint', 'a blue 20 litre paint', 4000, 'fine coat', '20 litre paint picture url'), 
    (3, 12354, '4 litre Paint', 'a blue 4 litre paint', 1600, 'bergar', '4 litrepaint picture url'), 
    (4, 11354, 'paint remover', 'an ethanol based remover', 2600, 'bergar', 'paint remover picture url'),
    (5, 10284, 'Samsung S10', 'Samsung Galaxy s10+ smartphones', 242000, 'samsung', 'samsung s10picture_url')";
    if (mysqli_query($link, $sql)) {
        echo "Your Product data has been created";
    } else {
        echo "Error: " . mysqli_error($link);
    }
    $sql = "CREATE TABLE Users (id INT NOT NULL AUTO_INCREMENT,
    First_name VARCHAR(100) NOT NULL,
    Last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    Address TEXT NOT NUll,
    Home_Address TEXT NOT NULL,
    PRIMARY KEY(id)
)";
    if (mysqli_query($link, $sql)) {
        echo "Your Table was created";
    } else {
        echo "Error: " . mysqli_error($link);
    }
    
    $sql = "INSERT INTO Users (id, first_name, last_name, email, Address, Home_Address) VALUES (1, 'Akin', 'Adeleye', 'akinloluwaa@yahoo.com', 'Ibadan', '4 Felele street challenge'), 
    (2, 'Biodun', 'Ogunjuyigbe', 'Biodun@gmail.com', 'Osogbo', '14 ladippo akinyemi walp'), 
    (3, 'Tola', 'Vadam', 'Toluy12@Yahoo.com', 'Lagos', '30 bankole street shomolu'), 
    (4, 'Musa', 'Oke', 'oke@gmail.com', 'ikire', '1 damilohun close gbaderi')

";
    if (mysqli_query($link, $sql)) {
        echo "Your Users data has been created";
    } else {
        echo "Error: " . mysqli_error($link);
    }
     
    $sql = "CREATE TABLE Brands (id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    PRIMARY KEY(id)
)";
    if (mysqli_query($link, $sql)) {
        echo "Your Table was created";
    } else {
        echo "Error: " . mysqli_error($link);
    }
    $sql = "INSERT INTO Brands (id, name, description) VALUES (1, 'Samsung', 'one of the best smartphones manufacturers in the world'), 
    (2, 'bargar', 'one of the best manufacturers of water based paint in the world'), 
    (3, 'givenchy', 'one of the best wood work designers in Africa'), 
    (4, 'Finecoat', 'one of the best manufacturers of oil based paint in the world')";

    if (mysqli_query($link, $sql)) {
        echo "Your Brands data has been created";
    } else {
        echo "Error: " . mysqli_error($link);
    }
    
    $sql = "CREATE TABLE Arrivals (id INT NOT NULL AUTO_INCREMENT,
    Product_name VARCHAR(100) NOT NULL,
    Quantity INT NOT NULL,
    Price INT NOT NULL,
    Product_id INT NOT NULL,
    Brand_id INT NOT NULL,
    Product_description TEXT NOT NULL,
    Brand_name VARCHAR(100) NOT NULL,
    Picture_url VARCHAR(100) NOT NULL, 
    Reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
)";
    if (mysqli_query($link, $sql)) {
        echo "Your Table was created";
    } else {
        echo "Error: " . mysqli_error($link);
    }

    mysqli_close($link);
    
session_start();
if (isset($_SESSION["POST"])) {
    $_SESSION["POST"] += 1;
} else {
    $_SESSION["POST"] = 1;
}
$msg = "You have visited this site" . $_SESSION["POST"];
$msg .= "in this session";
?>
