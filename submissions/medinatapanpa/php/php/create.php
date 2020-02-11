<?php

    session_start();
    require "config.php";
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

<?php require "hepler.php" ; ?>
<h2>Add A Product </h2>
<form method="post">
    <label for="itemname">Name of Product</label>
    <input type="text" name="itemname" id="itemname">
    <select name="brand">
        <?php foreach ($brands as $key => $value) { ?>
        <option value= <?php echo $key; ?>> <?php echo $value?></option>
        <?php } ?>
    </select>
    <label for="quantity">Quantity</label>
    <input type="text" name="quantity" id="quantity">
    <label for="brand">Brand</label>
    <input type="text" name="brand_id" id="brand_id">
    <input type="submit" name="submit" value="Submit">
</form>
<?php require "footer.php"; ?>