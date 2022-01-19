<?php 
	$connection = mysqli_connect('localhost', 'root', 'root', 'test_db');
	if (!$connection) {
		die('Databases connection FAILED :( ');
	}

	$query = "SELECT * FROM users";

	$result = mysqli_query($connection, $query);
	if (!$result) {
		die('Query FAILED' .mysqli_error());
	}








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="col-sm-6 mt-4">
		<?php 
			while ($row = mysqli_fetch_assoc($result)) {
		?>
				<pre>
		<?php print_r($row); ?>
				</pre>
		<?php  



}
		?>
		
		
	</div>
	<br><a href="../index.php">Back</a>
</div>
</body>
</html>


