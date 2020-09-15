<?php
require "includes/db.php";
require "includes/ui.php";

$conn = connectDb();
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, brand, model, price, quantity, dates FROM dataEntry";
$result = $conn->query($sql);

AddHeader("Available stocks", ["common", "table"]);
?>

<body>
    <h1 class="header">Available Stock</h1>
    <div class="table-container">
        <?php
    if ($result->num_rows > 0) {
      echo "<table>
        <tr>
          <th>S/N</th>
          <th>Brand</th>
          <th>Model</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Date</th>
        </tr>";
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
              <td>" . $row["id"] . "</td>
              <td>" . $row["brand"] . "</td>
              <td>" . $row["model"] . "</td>
              <td>" . $row["price"] . "</td>
              <td>" . $row["quantity"] . "</td>
              <td>" . (new DateTime($row["dates"]))->format("F d, yy H:i A") . "</td>
            </tr>"; //date("F d, yy g:i A", strtotime($row["dates"]))
      }
      echo "</table>";
    } else {
      echo "No results";
    }

    $conn->close();
    ?>
        <a class="ext-link" href="/">Upload new stock</a>
    </div>
</body>

</html>