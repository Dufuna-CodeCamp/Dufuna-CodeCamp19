<?php
require "helper.php";
require "config.php";

try {
    $connection = new PDO ("mysql:host=$host", $username, $password, $options);
    $stmt = $connection->query("SELECT * FROM addProducts.products");
    $products = array();
    while ($item = $stmt->fetch()) {
        array_push($products, $item);
    }
}catch(PDOException $error){
    echo $sql . "<br>" . $error-> getMessage();
}
?>
<?php require "header.php"; ?>

<h2> All products</h2>
<table>
    <thead>
        <tr>
         <th>id</th>
         <th>Item name</th>
         <th>Brand_Id</th>
         <th>date</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $row) : ?>
        <tr>
            <td><?php echo escape($row["id"]); ?></td>
            <td><?php echo escape($row["itemname"]); ?></td>
            <td><?php echo escape($row["brand_id"]); ?></td>
            <td><?php echo escape($row["date"]); ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<a href="create.php">Back to create</a>

<?php require "footer.php";  ?>