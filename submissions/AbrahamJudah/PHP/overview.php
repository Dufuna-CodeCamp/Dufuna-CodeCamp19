<?php
    echo "<h2>Data inserted successfully!</h2>";
    $dbhost = 'localhost';
    $dbusername = 'root';
    $dbpassword = 'mysql';
    $dbname = 'ecommerce_sample';
    try {
        $dsn  ="mysql:host=" .  $dbhost . ";dbname="  .  $dbname;
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Database Connection Successful";
        //Fetch All Data from Table
        $query = "SELECT * FROM products";
        $data = $pdo->query($query);
        echo '<table width ="50%"  border="1" cellpadding="5" cellspacing= "3">
                    <tr>
                        <th>id</th>
                        <th>Brand ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Date</th>
                    </tr>';
        foreach ($data as $row) {
            echo '<tr>
                        <td>'.$row["id"].'</td>
                        <td>'.$row["Brand_id"].'</td>
                        <td>'.$row["Name"].'</td>
                        <td>'.$row["Quantity"].'</td>
                        <td>'.$row["Date"].'</td>
                    </tr>';
        }
        echo '</table>';
    }
    catch (PDOException $e) {
        echo "Database connection failed: "  .  $e->getMessage( );
    } 
?>