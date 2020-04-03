<?php

session_start();
echo '<p style="color: red">' . $_SESSION['message'] . '<br>';
echo '<a href="index.html">Try agin</a>';
?>