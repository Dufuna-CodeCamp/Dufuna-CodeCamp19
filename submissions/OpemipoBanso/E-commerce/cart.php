<?php error_reporting(-1); ?>
<?php ini_set('display_errors', true); ?>
<?php
session_start();
require_once('php/CreateDB.php');
require_once('php/component.php');

$db = new CreateDB("Productdb", "Producttb");
if(isset($_POST['remove'])){
 if($_GET['action'] == 'remove'){
   foreach($_SESSION['cart'] as $key => $value){
     if($value['product_id'] == $_GET['id']){
       unset($_SESSION['cart'][$key]);
       echo "<script>alert('Product has been removed...!')</script>";
       echo "<script>window.location = 'cart.php</script>";
     }
   }
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
    <title>Cart</title>
  </head>

  <body>
      <?php 
        require_once('php/header.php');
      ?>
      <div class="cart-container">
        <div class="shopping-cart">
          <h6 id="cart-header">
              Your cart
          </h6>

          <?php
          $total=0;
            if (isset($_SESSION['cart'])) {
                $product_id = array_column($_SESSION['cart'], 'product_id');
                $result = $db->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    foreach($product_id as $id) {
                        if ($row['id'] == $id) {
                            cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['id']);
                            $total = $total + (int)$row['product_price'];
                        }
                    }
                }
            }else{
                echo "<h5>Your cart is empty</h5>";
            }
          ?>
          <div class="price-details">
            <h6 id="price1">PRICE DETAILS</h6>
              <?php
                if(isset($_SESSION['cart'])){
                  $count = count($_SESSION['cart']);
                  echo "<h6 class=\"price2\">Price ($count items)</h6>";
                }else{
                  echo "<h6 class=\"price2\">Price (0 items)</h6>";
                }
              ?>
            <h6 id="price3"><?php echo $total;?></h6>
            <h6 id="price4">Delivery charges</h6>
            <h6 id="price5">FREE</h6>
            <h6 id="price6">Amount payable</h6>
            <h6 id="price7"><?php echo $total;?>
          </div>
        </div>
      </div>
      <script src="kasuwa-homepage-products.js"></script>
      <script src="sharedScript.js"></script>
  </body>
</html>
