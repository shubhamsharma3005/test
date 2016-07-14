<?php

require_once("../include/admins.php");
require_once("../include/functions.php");

require_admin_login();
$admin = Admins::current_admin();

?>

<h2>Hi <?=h( $admin['login']) ?>, <br><br>Welcome to the awesome admin panel. </h2>

<a href="<?=h( Admins::$CREATE_URL )?>">Create a new user!</a>

