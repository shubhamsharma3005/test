
<?php
   {
	  $home = $_GET['home'];
	  	if($home=="")
	  		 {
	    		echo("Not a valid URL!!");
	    		echo("<br>Redirecting to home page.. .");
	    		header( "refresh:3;url=home.php?home=index.php" );
	  		 }
	  	else 
	  		 {
	    echo("Goto: ".$home);
	    header('Location: '.$home);
	  		 }
   }
?>