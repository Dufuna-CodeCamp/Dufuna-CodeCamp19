<html>

<head>
   
</head>

<body>
    <?php
    $link = mysqli_connect("localhost", "root", "");
    if ($link === false) {
        echo ("can not connect: " . mysqli_connect_error());
    }
    echo "connect successfully . Host info: " . mysqli_get_host_info($link);
    mysqli_close($link);
    ?>
</body>

</html>