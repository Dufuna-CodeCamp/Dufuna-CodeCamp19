<?php
setcookie("loggedin", "val", time() - (3500), "/", "", 0 );
header("Location: cookies.html");

 