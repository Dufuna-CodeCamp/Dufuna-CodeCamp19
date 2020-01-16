<?php
require "helper.php";
require "config.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("../data/fetch.sql");
    $stmt = $connection->query("SELECT * FROM myoja.products");
    $products = array();
    while ($item = $stmt->fetch()) {
        array_push($products, $item);
    }
    $_SESSION['products'] = $products;


} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>

<?php require "header.php"; ?>

<h2>All Products</h2>
<table >
  <thead>
    <tr>
      <th>Product id</th>
      <th>Item Name</th>
      <th>Brand Id</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($products as $row) : ?>
    <tr>
      <td><?php echo escape($row["id"]); ?></td>
      <td><?php echo escape($row["itemname"]); ?></td>
      <td><?php echo escape($row["brand_id"]); ?></td>
      <td><?php echo escape($row["date"]); ?> </td>
  </tr>
  <?php endforeach; ?>
  </tbody>
</table>
<?php echo '<link  href="../HTML/css/style.css" rel="stylesheet"/>'; ?>
<a href="create.php" class="back-to-create-link">Back to Create</a>
