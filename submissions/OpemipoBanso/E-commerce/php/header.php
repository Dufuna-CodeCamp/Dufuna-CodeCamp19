<?php
    session_start();
?>
<header id="header" class="main-header">
    <div class="main-header-center">
        <span class="nav-icon">
            <i class="fa fa-bars"></i>
        </span>
        <a href="./index.php" class="header_brand">
            <h3>kas<span class="brand"><i class="fa fa-shopping-basket"></i></span>wa</h3>
        </a>
        <div class="main-header-search">
            <form class="main-header-search__input" action="action_page.php">
            <input
                type="text"
                placeholder="Search by product, category..."
                name="search"
            />
            <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <a href="cart.php" class="main-header__cart-btn">
            <span class="nav-icon">
                <i class="fa fa-cart-plus fa-2x"></i>
                <?php 
                if(isset($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                    echo "<div class=\"main-header__cart-items\">$count</div>";
                }else{
                    echo "<div class=\"main-header__cart-items\">0</div>";
                }
                ?>
            </span>
        </a>
        <ul class="main-header-nav__items">
            <?php
                if (isset($_SESSION['userId'])) {
                    echo'
                    <li class="main-header-nav__item">
                        <form action="./php/logout.php" method="post">
                        <a name="logout-submit" class="btn " type="submit">Logout</a>
                        </form>
                    </li>';
                } else {
                    echo'
                    <li class="main-header-nav__item">
                        <a href="">About us</a>
                    </li>
                    <li class="main-header-nav__item">
                        <a href="login.php">Log in</a>
                    </li>
                    <li class="main-header-nav__item main-header-nav__item--cta">
                        <a href="signup.php" class="btn ">Sign up</a>
                    </li>';
                }
            ?>
        </ul>
    </div>
</header>
<div class="nav-bar">
      <div class="nav-bar__dropdown">
        <button class="nav-bar__dropdown--dropbtn">
          Groceries
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="nav-bar__dropdown--content">
          <a href="#">All-purpose flour</a>
          <a href="#">Vinegar</a>
          <a href="#">Sugar</a>
        </div>
      </div>
      <div class="nav-bar__dropdown">
        <button class="nav-bar__dropdown--dropbtn">
          Fruits
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="nav-bar__dropdown--content">
          <a href="#">Avocados</a>
          <a href="#">Berries</a>
          <a href="#">Apples</a>
        </div>
      </div>
      <div class="nav-bar__dropdown">
        <button class="nav-bar__dropdown--dropbtn">
          Vegetables
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="nav-bar__dropdown--content">
          <a href="#">Lettuce</a>
          <a href="#">Pumpkin</a>
          <a href="#">Carrot</a>
        </div>
      </div>
      <div class="nav-bar__dropdown">
        <button class="nav-bar__dropdown--dropbtn">
          Oils
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="nav-bar__dropdown--content">
          <a href="#">Peanut oil</a>
          <a href="#">Avocado oil</a>
          <a href="#">Vegetable oil</a>
        </div>
      </div>
      <div class="nav-bar__dropdown">
        <button class="nav-bar__dropdown--dropbtn">
          Dairy
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="nav-bar__dropdown--content">
          <a href="#">Cheese</a>
          <a href="#">Milk</a>
          <a href="#">Butter</a>
        </div>
      </div>
      <div class="nav-bar__dropdown">
        <button class="nav-bar__dropdown--dropbtn">
          Poultry
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="nav-bar__dropdown--content">
          <a href="#">Turkey</a>
          <a href="#">Chicken</a>
          <a href="#">Egg</a>
        </div>
      </div>
      <div class="nav-bar__dropdown">
        <button class="nav-bar__dropdown--dropbtn">
          Roots and Tubers
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="nav-bar__dropdown--content">
          <a href="#">Potatoes</a>
          <a href="#">Yam</a>
          <a href="#">Cassava</a>
        </div>
      </div>
      <div class="nav-bar__dropdown">
        <button class="nav-bar__dropdown--dropbtn">
          Cereals
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="nav-bar__dropdown--content">
          <a href="#">Wheat</a>
          <a href="#">Rice</a>
          <a href="#">Rye</a>
        </div>
      </div>
      <div class="nav-bar__dropdown">
        <button class="nav-bar__dropdown--dropbtn">
          Plantatation
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="nav-bar__dropdown--content">
          <a href="#">Oil palm</a>
          <a href="#">Cocoa</a>
          <a href="#">Rubber</a>
        </div>
      </div>
      <div class="nav-bar__dropdown">
        <button class="nav-bar__dropdown--dropbtn">
          Inputs
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="nav-bar__dropdown--content">
          <a href="#">Seedlings</a>
          <a href="#">Pesticides</a>
          <a href="#">Organic fertilizers</a>
        </div>
      </div>
      <div class="nav-bar__dropdown">
        <button class="nav-bar__dropdown--dropbtn">
          Logistics
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="nav-bar__dropdown--content">
          <a href="#">Packaging</a>
          <a href="#">Transportation</a>
          <a href="#">Inventory Control</a>
        </div>
      </div>
    </div>