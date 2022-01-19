<?php 
	$Name = $_SERVER['REMOTE_ADDR'];
	$Date = date("Y-m-d H:i:s", time());
	$UnixTime = time();
	$connection = mysqli_connect('10.0.2.15', 'root', '', 'test_db');
	if (!$connection) {		
		die('Databases connection FAILED :( ');
	}
	
	$query = "INSERT INTO users(Name, Date, UnixTime) VALUES ('$Name', '$Date', '$UnixTime')";

	$result = mysqli_query($connection, $query);
	if (!$result) {
		die('Query FAILED'.mysqli_error($connection));
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<div class="container">
	<h1>You have authorized</h1>
	<h1><?php echo($Date); ?></h1>
</div>
</body>
</html>