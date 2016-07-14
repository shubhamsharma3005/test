<?php

$dbhost = "localhost";
$username = "root";
$pass = "";
$database = "vuln";

require_once("database.php");
//$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');
//mysql_select_db($dbname);
$db = new DB($dbhost, $username, $pass, $database);

?>
