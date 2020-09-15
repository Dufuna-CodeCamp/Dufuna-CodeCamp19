<?php

function AddHeader($title = "Home", array $css = [])
{
?>
<!DOCTYPE html>
<html>

    <head>
        <?php
        echo "<title>Buy More - $title</title>\r\n";
        echo "<link href='http://fonts.googleapis.com/css?family=Questrial|Droid+Sans|Alice|Open+Sans' rel='stylesheet' type='text/css'>\r\n";
        if (!is_null($css)) {
            foreach ($css as $cssFile) {
                if (substr($cssFile, -4) !== ".css") {
                    $cssFile .= ".css";
                }
                echo "<link rel=\"stylesheet\" type=\"text/css\" href='css/$cssFile'>\r\n";
            }
        }
        ?>
    </head>
    <?php
}