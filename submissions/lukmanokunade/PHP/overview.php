<?php
require "index.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $stmt = $connection->query("SELECT * FROM dufunahelp.products");
    $products = array();
    while ($item = $stmt->fetch()) {
        array_push($products, $item);
    }
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>
</head>
<body>

<h2>All Products</h2>
<table>
    <thead>
    <tr>
        <th>#</th>
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
<a href="upload.php">Back to upload</a>

</body>
</html>