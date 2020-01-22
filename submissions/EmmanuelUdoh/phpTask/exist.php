<?php
 $conn = mysqli_connect("localhost", "root", "mysql", "myEcommerce_sample");
 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $products = $_POST['products'];
    $brand = $_POST['brand'];
    $quantity = $_POST['quantity'];

    $sql_e = "SELECT * FROM myEcommerce_sample WHERE brand = '$brand'";
    $res_e = mysqli_query($conn, $sql_e) or die(mysqli_error($conn));

    if(mysqli_num_rows($res_u) > 0) {
        $brand_error = "sorry... Brand does not exist. Hence, you cannot upload item";
    }else {
        $query = "INSERT INTO myEcommerce_sample (name, products, brand, quantity)
        VALUES ('$name', '$email', '" .md5 ($quantity) . "')";
        $result = mysqli_query($conn, $query) or die (mysqli_error($conn));
        echo "saved successfully";
        exit();

    }
 }


?>