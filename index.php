<?php
require_once("include/html_functions.php");

?>

<?php 
our_header("home"); 
$url1 = $_SERVER['SERVER_NAME'];
$url = "/users/register.php?if_success=http://$url1/users/home.php";
?>


<div class="column prepend-1 span-24 first last">
 <br>
  <p>
  	<b><h1>Total Application Security</b></h1>
    Total Application Security is industrys first truly integrated web application security and compliance solution. <br>It helps organizations detect application layer vulnerabilities accurately, patch them instantly without any change in code,<br> and continuously monitor for emerging threats and DDoS attacks to mitigate them.
<br>Total Application Security detects application-layer vulnerabilities accurately with web application scanning (detect),<br> patches them instantly with web application firewall (protect), and monitors traffic continuously for emerging threats and DDoS attacks (monitor).<br> It also includes 24x7 managed service support to perform pen testing, create custom rules, and maintain zero false positives.
  </p>
  <br><br><br>
  <h3>New to INDUSFACE?</h3>
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


<?php our_footer(); ?>
