<?php

require_once("include/html_functions.php");
$url1 = $_SERVER['SERVER_NAME'];
$url = "/users/register.php?if_success=http://$url1/users/home.php";
?>

<?php our_header("download"); ?>

<link rel="stylesheet" href="/css/divide.css" type="text/css" media=""> 
<div class="container">
	<div class="left"><br><br><br>
			<h4>&nbsp &nbsp &nbsp &nbsp &nbsp 
				<a href="download.php?file=files/State-of-Application-Security-in-India-2014.pdf">Download</a> State-of-Application-Security-in-India-2014 </h4>
			<h4>&nbsp &nbsp &nbsp &nbsp &nbsp 
				<a href="download.php?file=files/2014_Mid_Year_Security_Threat_Review.pdf">Click here</a> to download ebook 2014_Mid_Year_Security_Threat_Review. </h4>
	
	</div>
	<div class="right"><br><br><br>
		<h3>New Here?</h3>
		  <p>
		    <h4><a href="<?=h($url)?>">Create an account</a></h4>
		  </p>
		  <p>
		    <h4><a href="/users/sample.php?userid=1">Check out a sample user!</a></h4>
		  </p>
		  <p>
		    <h4><a href="/calendar.php">What is going on today?</a></h4>
		  </p>
		  <p>
		    <h4>Or you can test to see if Application can handle a file:</h4> <br />
		  <script>
		    document.write('<form enctype="multipart/form-data" action="/pic' + 'check' + '.php" method="POST"><input type="hidden" name="MAX_FILE_SIZE" value="30000" />Check this file: <input name="userfile" type="file" /> <br /><br>With this name: <input name="name" type="text" /> <br /> <br /><input type="submit" value="Send File" /><br /> </form>');
		  </script><br>
		  </p>
	</div>
</div>

<?php our_footer(); ?>
