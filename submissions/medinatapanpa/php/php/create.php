<?php

    session_start();
    require "config.php";
    require "header.php";
        try {
        $connection = new PDO($dsn, $username, $password, $options);

        $newProduct = array(
            "itemname" => $_POST['itemname'],
            "quantity" => $_POST['quantity'],
            "brand_id" => $_POST['brand']
        );
            
         // INSERT INTO products (itemname, quantity) values (:itemname, :quantity)
                $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "products",
            implode(", ", array_keys($newProduct)),
            ":" . implode(", :", array_keys($newProduct))
        );

        $statement = $connection->prepare($sql);
        $statement->execute($newProduct);
    } catch (PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
?>

<?php if (isset($_POST['submit']) && $statement) { ?>
    > <?php echo $_POST['itemname']; ?> successfully added.
<?php } ?>

<?php require "helper.php" ; ?>
<h2>Add A Product </h2>
<form method="post">
    <label for="itemname">Name of Product</label>
    <input type="text" name="itemname" id="itemname">
    <label for="brand">Brand</label>
        <select name="brand">
        <?php foreach ($brands as $key => $value) { ?>
        <option value= <?php echo $key; ?>> <?php echo $value?></option>
        <?php } ?>
    </select>
    <label for="quantity">Quantity</label>
    <input type="text" name="quantity" id="quantity">
    <input type="button" name="submit" value="Submit">
</form>
<?php require "footer.php"; ?>