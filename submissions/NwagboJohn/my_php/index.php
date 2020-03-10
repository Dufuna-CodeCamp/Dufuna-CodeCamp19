<!doctype html>
<html>

    <head>
        <title>Buy More</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>

    <body>
        <h1> BUY MORE</h1>
        <hr>
        <div id="form">
            <h1>UPLOAD STOCK</h1>
            <form action="logic.php" method="post">
                BRAND <input type="text" name="brands"><br><br>
                MODEL <input type="text" name="model"><br><br>
                PRICE <input type="text" name="price"><br><br>
                QUANTITY <input type="text" name="quantity"><br><br>
                <input type="submit" name="submit" value="upload">
            </form>
            <button id="show">
                <a href="show.php">show stock</a>
            </button>
        </div>

    </body>

</html>
