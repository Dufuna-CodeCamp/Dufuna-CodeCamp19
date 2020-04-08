<?php
require "createtable.php";

$brands = [];
try {
    $conn = new PDO("mysql:host=$host", $username, $password, $options);
    $stmt = $conn->query("SELECT * FROM dufunahelp.brands");
    while ($item = $stmt->fetch()) {
        $brands[$item['id']] = $item['brand_name'];
    }
} catch (PDOException $error) {
    echo $error->getMessage();
}
?>

<?php
if (isset($_POST['Submit'])) {

    try {
        $conn = new PDO($dsn, $username, $password, $options);

        $newProduct = array(
            "itemname" => $_POST['itemname'],
            "quantity" => $_POST['quantity'],
            "brand_id" => $_POST['brand']
        );
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "products",
            implode(", ", array_keys($newProduct)),
            ":" . implode(", :", array_keys($newProduct))
        );

        $statement = $conn->prepare($sql);
        $statement->execute($newProduct);
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
         }
        }

?>

<?php if (isset($_POST['Submit']) && $statement) { ?>
<?php echo $_POST['itemname']; ?> successfully added.
<?php }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD PRODUCTS</title>
</head>

<body>
    <div class="container">
        <h1>UPLOAD PRODUCTS</h1>

        <?php

            ?>
        <form method="post">
            <label for="itemname">Name of Product</label>
            <input type="text" name="itemname" id="itemname"> <br><br>
            <select name="brand">
                <?php foreach ($brands as $brandKey => $brandValue) { ?>
                <option value=<?php echo $brandKey; ?>> <?php echo $brandValue ?></option>
                <?php } ?>

            </select> <br><br>

            <label for="quantity">Quantity</label>
            <input type="text" name="quantity" id="quantity"><br><br>

            <input type="Submit" name="Submit" value="Submit">
        </form>
    </div>
</body>

</html>