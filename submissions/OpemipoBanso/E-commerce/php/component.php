<?php
function component($productname, $productprice, $productimg, $productid) {
    $element = "
            <a href=\"\" class=\"product-class__item\">
            <form action=\"index.php\" method=\"post\">
              <div class=\"product-class__item--img\">
                <img
                  src=\"$productimg\"
                  alt=\"Bunch of Berries\"
                  class=\"product-img\"
                />
                <button type=\"submit\" class=\"bag-btn\" name=\"add\" data-id=\"1\">
                  <i class=\"fa fa-shopping-cart\"></i>
                  add to bag
                </button>
                <input type=\"hidden\" name=\"product_id\" value=\"$productid\">
              </div>
              <h2 class=\"product-class--label--name\">$productname</h2>
              <h4 class=\"product-class--label--price\">$productprice</h4>
            </form>
          </a>
    ";
    echo $element;
}


function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    <form action=\"cart.php?action=remove&id=$productid\" method=\"POST\" class=\"cart-items\">
        <div class=\"cart-items-cont\">
            <div class=\"cart-item-img-box\">
                <img class=\"cart-item-img\" src=$productimg alt=\"\">
            </div>
            <div class=\"cart-item-info\">
                <h5 class=\"product-name\">$productname</h5>
                <h6 class=\"product-seller\">Seller: Agropark</h6>
                <h5 class=\"product-price\">$productprice</h5>
                <button type=\"submit\" class=\"btn cart-btn btn-cart-save\">Save item</button>
                <button type=\"submit\" name=\"remove\" class=\"btn cart-btn btn-cart-remove\">Remove</button>
            </div>
            <div class=\"cart-items-quant\">
                <button type=\"button\"><i class=\"fa fa-minus\"></i></button>
                <input type=\"text\" class=\"form-control\" name=\"\" value=\"1\">
                <button type=\"button\"><i class=\"fa fa-plus\"></i></button>
            </div>
        </div>
    </form>
    ";
    echo $element;
}

