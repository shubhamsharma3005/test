<html lang="en">
<head>
<meta charset="UTF-8">
<title>Slides.. .</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
    <ul class="nav nav-pills">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Messages <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#">Inbox</a></li>
                <li><a href="#">Drafts</a></li>
                <li><a href="#">Sent Items</a></li>
                <li class="divider"></li>
                <li><a href="#">Trash</a></li>
            </ul>
        </li>
        <li class="dropdown pull-right">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li class="divider"></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </li>
    </ul>
    
		<?php
			if(isset($_GET["page"])) 
			{
 				$page = $_GET["page"];
			} 
			else 
			{
 				$page = "Slide1";
			}

			function ispage($ref, $page) 
			{
 				return ($ref==$page)?' selected':'';
			}
		?>

<div class="row">
	<div class="col-lg-2">
		<div class="form-group"><br><br>
	  		<label>Select Slide:</label>
	  		<form name="form1" method="get" action="index.php">
		  		<select class="form-control" name="page" onchange="document.form1.submit();">
			  		<option value="Slide1" <?php echo(ispage('Slide1', $page)); ?>>Slide 1</option>
					<option value="Slide2" <?php echo(ispage('Slide2', $page)); ?>>Slide 2</option>
					<option value="Slide3" <?php echo(ispage('Slide3', $page)); ?>>Slide 3</option>
			    </select>
			 </form>
		</div>
		
		<div style="border:solid 2px #000; width:600px;"><?php require($page); ?></div>
		
	</div>
</div>
</div>
</body>
</html>                                		

