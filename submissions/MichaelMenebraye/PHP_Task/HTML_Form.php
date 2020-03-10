<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E_Commerce_form</title>
</head>
<body>
        <link href = "reg.css" rel = "stylesheet">
    <h1>Product Registration Details</h1>
    <form action="connection.php" method="POST">
        <div id="form">
            <select name="brands">
            <option selected hidden>brands</option>
            <option value="samsung">samsung</option>
            <option value="tecno">tecno</option>
            <option value="infinix">infinix</option>
            <option value="apple">apple</option>
            <input type="text" placeholder="brand_name" id="brand_name" name="brand_name">
            <input type="number" placeholder="quantity" id="name" name="quantity">
            <input type="text" placeholder="price" id="price" name="price">
            <input type="submit">
        </div>
    </form>
                       
</body>
</html>