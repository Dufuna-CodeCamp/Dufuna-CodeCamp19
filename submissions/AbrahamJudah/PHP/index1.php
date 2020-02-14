
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Log</title>
    <link rel="stylesheet" type="text/css"  href="prod.css">
</head>
<body>
    <div class= "container">
        <h2>Product Logging Page</h2>
        <form action="function1.php" method="POST">
            <label>Product Name</label><br>
            <input type="text" name="product"  required="required"><br>
            <label>Quantity</label><br>
            <input type="text" name="number"  required="required"><br>
            <label>Date</label><br>
            <input type="datetime-local" name="timestamp" required="required"><br>
            <select name="brand" class="brand"  required="required">
                <option value="id">Brand id</option>
                <option value="1">Apple</option>
                <option value="2">Armani</option>
                <option value="3">Burberry</option>
                <option value="4">Samsung</option>
                <option value="5">Infinix</option>
                <option value="6">Gionee</option>
                <option value="7">Acer</option>
                <option value="8">Asus</option>
                <option value="9">Adiddas</option>
                <option value="10">Chanel</option>
                <option value="11">Fendi</option>
                <option value="12">HP</option>
                <option value="13">Dell</option>
                <option value="14">Oppo</option>
                <option value="15">Nokia</option>
                <option value="16">Nike</option>
                <option value="17">Rolex</option>
                <option value="18">Omega</option>
                <option value="19">Prada</option>
                <option value="20">Gucci</option>
                <option value="21">Keexs</option>
                <option value="22">Xiaomi</option>
                <option value="23">Oakley</option>
                <option value="24">IWC</option>
                <option value="25">Breguet</option>
                <option value="26">Toshiba</option>
                <option value="27">Casio</option>
                <option value="28">87Origins</option>
                <option value="29">Versace</option>
                <option value="30">Hermes</option>
                <option value="31">Louis Vuitton</option>
                <option value="32">Tecno</option>
                <option value="33">Lenovo</option>
                <option value="34">Hanker & Reech</option>
                <input type="submit" name="submit" value="Add">
        </form> 
    </div>   
</body>
</html>