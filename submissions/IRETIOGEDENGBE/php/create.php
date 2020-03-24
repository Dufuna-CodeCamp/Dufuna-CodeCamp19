<?php
require 'configure.php';
try {
    $connect = new PDO ( $dsn, $username, $password, $options );
    $stmt_brands = $connect->query( 'SELECT * FROM productList.brands' );
    $brands = array();
    $brand_id = array();
    while ( $item = $stmt_brands->fetch() ) {
        array_push( $brands, $item['brand_name'] );
        array_push( $brand_id, $item['id'] );
    }
    $mappedBrands = array_combine( $brand_id, $brands );

} catch( PDOException $error ) {
    echo $error-> getMessage();
}
?>

<?php
if ( isset( $_POST['submit'] ) ) {
    require 'configure.php';
    require 'helper.php';

    try {
        $connect = new PDO ( $dsn, $username, $password, $options );
        $newProduct = array(
            'itemname' => $_POST['name'],
            'quantity' => $_POST['quantity'],
            'about' => $_POST['about'],
            'manufacturer' => $_POST['manufacturer'],
            'brand_id' => $_POST['brands'],
        );
        $sql = sprintf(
            'INSERT INTO %s (%s) values (%s)',
            'products',
            implode( ', ', array_keys( $newProduct ) ),
            ':'.implode( ', :', array_keys( $newProduct ) )
        );
        $statement = $connect->prepare( $sql );
        $statement->execute( $newProduct );
        $stmt_brands = $connect->query( 'SELECT * FROM productList.brands' );
        $brands = array();
        $brand_id = array();
        while ( $item = $stmt_brands->fetch() ) {
            array_push( $brands, $item['brand_name'] );
            array_push( $brand_id, $item['id'] );
        }
        $mappedBrands = array_combine( $brand_id, $brands );
    } catch( PDOException $error ) {
        echo 'Products not available in database'. '<br>' . $error->getMessage();
    }
}
?>

<?php
if ( isset( $_POST['submit'] ) && $statement ) {

    echo $_POST['name'].' '. 'successfully added.';
}
?>

<h2>Add a Product</h2>
<div class = 'signin'>
<form  method = 'post'>
<label class = 'add_product' for = 'name'>Product Name</label>
<input type = 'text' name = 'name' id = 'name'>
<select name = 'brands'>
<?php foreach ( $mappedBrands as $key => $value ) {
    ?>
    <option value = <?php echo $key;
    ?>> <?php echo $value ?></option>
    <?php }
    ?>
    </select><br><br>
    <label class = 'add_product' for = 'quantity'>Quantity</label>
    <input type = 'number' name = 'quantity' id = 'quantity'><br><br>
    <label class = 'add_product' for = 'manufacturer'>About the Manufacturer</label>
    <input type = 'text' name = 'manufacturer' id = 'manufacture'><br><br>
    <label class = 'add_product' for = 'about'>Product Description</label>
    <input type = 'text' name = 'about' id = 'about'><br><br>
    <input class = 'log' type = 'submit' name = 'submit' value = 'submit'>
    <button><a href = 'overview.php'>view products in database</a>

    </form>
    </div>
