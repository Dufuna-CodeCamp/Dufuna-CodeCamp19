
<!DOCTYPE html>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="index.css">
    </head>
  ` <body>
  
      <h1>AVAILABLE STOCK</h1>

      <?php
         $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "store";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT id, brand, model,price,quantity,dates FROM dataEntry ";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              echo  "<table><tr><th>SERIAL NO</th><th>BRAND</th><th>MODEL</th><th>PRICE</th><th>QUANTITY</th><th>DATE</th></tr>";
            // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>" . $row["id"]. "</td><td>" . $row["brand"]."</td><td>". $row["model"]. "</td><td>". $row["price"]. "</td><td>". $row["quantity"]. "</td><td>". $row["dates"]. "</td></tr>";
          }
            echo "</table>";
          } 
          else {
              echo "0 results";
          }   

          $conn->close();
     ?>
        <button><a href="ecommerceDb.php">upload stock</a></button>

  </body>
</html>
