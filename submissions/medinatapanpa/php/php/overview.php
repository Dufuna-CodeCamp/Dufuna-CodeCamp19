<?php
require "config.php";

try {
    $connection = new PDO("mysql:host= $host", "$username", "$password", "$options");
    $stmt = $connection->query("SELECT * FROM spices.products INNER JOIN brand_name ON product.brand_id = brand.id");
    $products = array();
    while ($item = $stmt->fetch())
    {
        array_push($products, $item);
    }
   }
 catch(PDOException $error) {
    echo $sql . "please check input fields<br>" . $error->getMessage();
}
?>
<?php require "header.php"; ?>

<h2>All Products</h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Product Brand</th>
      <th>Item Name</th>
      <th>Brand Id</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($products as $row) : ?>
    <tr>
      <td><?php echo escape($row["id"]); ?></td>
      <td><?php echo escape($row["brand_name"]); ?></td>
      <td><?php echo escape($row["itemname"]); ?></td>
      <td><?php echo escape($row["brand_id"]); ?></td>
      <td><?php echo escape($row["added_time"]); ?> </td>
  </tr>
  <?php endforeach; ?>
  </tbody>
</table>
<?php require "footer.php"; ?>
<a href="create.php">Back to Create</a>