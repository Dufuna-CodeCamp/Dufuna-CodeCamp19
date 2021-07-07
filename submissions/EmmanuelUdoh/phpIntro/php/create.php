<?php
require "fetch.php";
require "helper.php";
if (isset($_POST['submit'])) {
    try {
        $connection = new PDO($dsn, $username, $password, $options);

        $newProduct = array(
            "itemname" => $_POST['itemname'],
            "quantity" => $_POST['quantity'],
            "brand_id" => $_POST['brand']
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
     <?php echo $_POST['itemname']; ?> successfully added.
<?php }
?>
<h2>Add A Product </h2>
<form method="post">
 <div class="form-container">
    <label for="itemname">Name of Product</label>
    <input type="text" name="itemname" id="itemname">
    <select name="brand">
        <?php foreach ($brands as $brandkey => $brandValue) { ?>
            <option value=<?php echo $brandkey; ?>> <?php echo $brandValue ?></option>
        <?php } ?>
    </select>
    <label for="quantity">Quantity</label>
    <input type="text" name="quantity" id="quantity">
    <input type="submit" name="submit" value="Submit">
 </div>    
</form>
<?php echo '<link  href=".../css/style.css" rel="stylesheet"/>'; ?>
<?php require "footer.php"; ?>