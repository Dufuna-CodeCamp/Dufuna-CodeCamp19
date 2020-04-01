<?php
/** 
 * @param $html 
 * @return string 
 * This file helps in converting HTML characters and preserve meanings and thus preventing XSS atacks (injections) 
 */
function escape($html)
{
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}
