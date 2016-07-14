<?php

require_once("include/html_functions.php");

?>

<?php our_header("about"); ?>
<br><br><br><br><br><br><br><br><br><br><br>
<html>
<title>About Us!</title>
<style type="text/css">
	.bs-example{
    	margin: 20px;
    }
    hr{
        margin: 60px 0;
    }
</style>
</head>
<body>

	<div class="bs-example">
	   
		<?php
		print("<p>");
		$file=$_GET['page'];
		system("cat $file");
		?>
		
	</div>
</body>
</html>                                		

<?php our_footer(); ?>