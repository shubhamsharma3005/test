<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<?php

require_once("../include/admins.php");
require_once("../include/html_functions.php");
require_once("../include/functions.php");

$bad_login = !(isset($_POST['adminname']) && isset($_POST['password']));
if (isset($_POST['adminname']) && isset($_POST['password']))
{
   if ($user = Admins::check_login($_POST['adminname'], $_POST['password']))
   {
      Admins::login_admin($user['id']);
      http_redirect(Admins::$HOME_URL);
   }
   else
   {
      $bad_login = True;
   }
}

if ($bad_login)
{
?>
<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Admin Area!</h1>
                    <form role="form" action="" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="name" class="sr-only">Email</label>
                            <input type="text" name="adminname" id="email" class="form-control" placeholder="Admin Name">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    </form>
                    <hr>
        	    </div>
    		</div>
    	</div>
    </div>
</section>
<?php
      }
?>

<head>
</html>