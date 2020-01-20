<?php
if (isset($_POST['submit'])){
    require "config.php";
    require "helper.php";
    
    

    try {
        $connection = new PDO ($dsn, $username, $password, $options);
        $newProduct = array(
            "itemname" => $_POST['itemname'],
            "quantity" => $_POST['quantity'],
            "manufacturer" => $_POST['manufacturer'],
            "about" => $_POST['about'],
            "brand_id" => $_POST['brands'],
        );
        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "products",
            implode(", ", array_keys($newProduct)),
            ":".implode(", :", array_keys($newProduct))
        );
        $statement = $connection->prepare($sql);
        $statement->execute($newProduct);
    }catch(PDOException $error){
        echo $sql. "<br>" . $error->getMessage();
    }
}
?>

<?php require "header.php"; require "fetch.php";  ?>

<?php
if (isset($_POST['submit']) && $statement){ ?>
> <?php echo $_POST['itemname']; ?> successfully added.
<?php } ?>

    <h2>Add a Product</h2>
    <div class="signin">
    <form  method="post">
        <label class="add_product" for="itemname">Name of Product</label>
        <input type="text" name="itemname" id="itemname">
        <?php session_start(); ?>
        <select name="brands">
            <?php for($i=0; $i < count($_SESSION['mapped']); $i++) { ?>
                <option value= <?php echo $i;?>> <?php echo $_SESSION["mapped"][$i] ?></option>
            <?php } ?>
        </select>
        <label class="add_product" for="quantity">Quantity</label>
        <input type="text" name="quantity" id="quantity">
        <label class="add_product" for="manufacturer">About the Manufacturer</label>
        <input type="text" name="manufacturer" id="manufacture">
        <label class="add_product" for="about">About the Product</label>
        <input type="text" name="about" id="about"><br><br>

        <input class="log" type="submit" name="submit" value="submit">
    </form>
    </div>
<?php require "footer.php";  ?>