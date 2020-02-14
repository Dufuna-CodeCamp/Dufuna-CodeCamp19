<?php
    $dbhost = 'localhost';
    $dbusername = 'root';
    $dbpassword = 'mysql';
    $dbname = 'ecommerce_sample';
    try {
        $dsn  ="mysql:host=" .  $dbhost . ";dbname="  .  $dbname;
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
    }
    catch (PDOException $e) {
        echo "Database connection failed: "  .  $e->getMessage( );
    } 
    if (isset($_POST['submit']))
    {
        $product_name = $_POST['product'];
        $brand_id = $_POST['brand'];
        $quantity = $_POST['number'];
        $date = $_POST['timestamp'];
        $sql = "INSERT INTO products (Brand_id, Name, Quantity, Date) VALUES (:Brand_id, :Name, :Quantity, :Date)";
        $stmt=  $pdo->prepare($sql);
        $stmt->execute(['Brand_id'=>$brand_id, 'Name'=>$product_name, 'Quantity'=>$quantity, 'Date'=>$date]);
        if ($stmt) {
            header ("location:overview.php?remarks=success");
            exit;
        }
        else {
            echo "<h2>Failed to insert</h2>";
        }
    }
?>