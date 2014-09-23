<?php
date_default_timezone_set("America/Los_Angeles");
$date = new DateTime();


?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<title>A Simple Time Counter</title>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;

	}

	</style>
</head>
<body>
	<div align='center'>
		<div class='jumbotron'><h1>The current Time and Date:</h1></div>
		<h2> <?php echo 'Today is: '. date("l").' '.date("m/d/Y").'<br>'; ?> </h2>
		<h2><?php echo "At " . date("h:i:sa");?></h2>
		  <div class="btn-group">
		   	<button class="btn btn-success" onClick=location.reload();>Update the Time!</button>
		  </div>

	</div>
</body>
</html>