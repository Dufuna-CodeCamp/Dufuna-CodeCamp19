<?php

session_start();

require_once('./php/component.php');
require_once('./php/CreateDB.php');

// instantiating CreateDB class

$database = new CreateDB("Productdb","Producttb");

if (isset($_POST['add'])) {
    // print_r($_POST['product_id']);
    if (isset($_SESSION['cart'])) {
        $item_array_id = array_column($_SESSION['cart'], "product_id");
         print_r($item_array_id);
         if(in_array($_POST ['product_id'], $item_array_id)) {
            echo "<script>alert('Product is already added in the cart...!')</script>";
            echo "<script>window.location = 'index.php</script>";
         }else{
            $count = count($_SESSION['cart']);
            $item_array = array(
            'product_id'=>$_POST['product_id']
        );
        $_SESSION['cart'][$count] = $item_array;
        print_r($_SESSION['cart']);
         }

    }else {
        $item_array = array(
            'product_id'=>$_POST['product_id']
        );

        // create new session variable
        $_SESSION['cart'][0]=$item_array;
        print_r($_SESSION['cart']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./css/kasuwa-homepage-nav-cart.css" />
    <link rel="stylesheet" href="./css/kasuwa-shared-styles.css" />
    <title>Kasuwa main</title>
  </head>

  <body>
    <div class="backdrop"></div>
    <?php require_once("php/header.php")?>
   <main>
      <div class="top-wrapper">
        <div class="top-container">
          <h1>Kasuwa.ng</h1>
          <p>Nigeria's first agricultural digital market place</p>
          <p>Click to Shop safe, with speed and comfort!</p>
        </div>
      </div>
      <div class="clear-float"></div>
      <section class="product-class__items--container">
        <div class="product-class__items--headers">
          <p>Our Products</p>
        </div>
        <div class="product-class__items">
            <?php
            $result = $database->getData();
            while ($row = mysqli_fetch_assoc($result)) {
                component($row['product_name'], $row['product_price'],$row['product_image'], $row['id']);
            }
            ?>
        </div>
        <div id="more-div" class="product-class__items">
          <a class="product-class__items--button" id="see-more">View more</a>
        </div>
      </section>
      <section class="description--container">
        <div class="description--items">
          <div class="description--item"></div>
        </div>
      </section>
    </main>

    <?php require "php/footer.php";?>
  </body>
</html>
