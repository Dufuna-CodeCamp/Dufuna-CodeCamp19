<?php

require "includes/ui.php";

AddHeader("Upload new stock", ["common", "form"]);

?>

<body>
    <div class="container">
        <h1 class="header"> Buy More</h1>
        <div id="upload" class="form">
            <form action="logic.php" method="post" autocomplete=on>
                <h1>Upload new stock</h1>
                <p>
                    <label for="brand" class="brand">Brand</label>
                    <input id="brand" type="text" name="brands" placeholder="Samsung" required>
                </p>
                <p>
                    <label for="model" class="model">Model</label>
                    <input id="model" type="text" name="model" placeholder="Galaxy S20" required>
                </p>
                <p>
                    <label for="price" class="price">Price</label>
                    <input id="price" type="text" name="price" placeholder="350000" required>
                </p>
                <p>
                    <label for="quantity" class="quantity">Quantity</label>
                    <input id="quantity" type="text" name="quantity" placeholder="50" required>
                </p>
                <div class="form-bottom">
                    <p>
                        <a href="show.php" class="show-stock">Show stock</a>
                    </p>
                    <p class="upload button">
                        <input type="submit" name="submit" value="Upload">
                    </p>
                </div>
            </form>

        </div>
    </div>
</body>

</html>