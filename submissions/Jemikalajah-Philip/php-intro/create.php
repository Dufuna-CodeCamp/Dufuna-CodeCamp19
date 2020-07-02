<?php
require "config.php";
try {
    $connection = new PDO ($dsn, $dbusername, $dbpassword, $options);
    $stmt_brands = $connection->query("SELECT * FROM addProducts.brands");
    $brands = array();
    $brand_id = array();
    while ($item = $stmt_brands->fetch()) {
        array_push($brands, $item['brand_name']);
        array_push($brand_id, $item['id']);
    }
   $mappedBrands = array_combine( $brand_id, $brands);
   
}catch(PDOException $error){
    echo $error-> getMessage();
}
?>

<?php
if (isset($_POST['submit'])){
    require "config.php";
    require "helper.php";
    
    try {
        $connection = new PDO ($dsn, $dbusername, $dbpassword, $options);
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
        echo "Products not added to database". "<br>" . $error->getMessage();
    }
}
?>

<?php require "header.php"; ?>


<?php
if (isset($_POST['submit']) && $statement){ 
    echo $_POST['itemname']." ". "successfully added.";
    } ?>

    <h2>Add a Product</h2>
    <div class="signin">
    <form  method="post">
        <label class="add_product" for="itemname">Name of Product</label>
        <input type="text" name="itemname" id="itemname">
        <select name="brands">
           <?php foreach ($mappedBrands as $key => $value) { ?>
            <option value= <?php echo $key;?>> <?php echo $value ?></option>
            <?php } ?>
        </select>
        <label class="add_product" for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity">
        <label class="add_product" for="manufacturer">About the Manufacturer</label>
        <input type="text" name="manufacturer" id="manufacture">
        <label class="add_product" for="about">About the Product</label>
        <input type="text" name="about" id="about"><br><br>
        <input class="log" type="submit" name="submit" value="submit">
    </form>
    </div>
<?php require "footer.php";  ?>