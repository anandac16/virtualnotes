<?php

$u = "root";
$p = "linuxindo";
$l = "localhost";
$db = "blogtools";
$custom_path = "custom/";

$connect = mysql_connect($l,$u,$p);
$db_select = mysql_select_db($db);
?>
