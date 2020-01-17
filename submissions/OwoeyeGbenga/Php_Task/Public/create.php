<?php
if (isset($_POST['submit'])) {
    require "config.php";
    require "helper.php";

    try {
        $connection = new PDO($dsn, $username, $password, $options);

        $newProduct = array(
            "itemname" => $_POST['itemname'],
            "quantity" => $_POST['quantity'],
            "brand_id" => $_POST['brand'] + 1
        );

        /**
         * This is equivalent to
         * INSERT INTO products (itemname, quantity) values (:itemname, :quantity)
         */
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
}
?>

<?php if (isset($_POST['submit']) && $statement) { ?>
    > <?php echo $_POST['itemname']; ?> successfully added.
<?php } ?>


<h2>Add A Product </h2>

<form method="post">
    <label for="itemname">Name of Product</label>
    <input type="text" name="itemname" id="itemname">
    <?php session_start(); ?>

    <select name="brand">
        <?php for ($i = 0; $i < count($_SESSION['brands']); $i++) { ?>
            <option value= <?php echo $i; ?>> <?php echo $_SESSION['brands'][$i] ?></option>
        <?php } ?>

    </select>

    <label for="quantity">Quantity</label>
    <input type="text" name="quantity" id="quantity">

    <input type="submit" name="submit" value="Submit">
</form>


<?php require "templates/footer.php"; ?>
