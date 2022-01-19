<?php 

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$connection = mysqli_connect('localhost', 'root', 'root', 'test_db');
	if (!$connection) {		
		die('Databases connection FAILED :( ');
	}
	
	if ($username && $password) {
		echo "You are in";
	}else{
		if ((!$username) && (!$password)) {
			echo "Enter username and password";
		}else{
			if (!$username) {
				echo "Enter username";
			}
			if (!$password) {
				echo "Enter password";
			}
		}
	}

	$query = "INSERT INTO users(username, password) ";
	$query .= "VALUES ('$username', '$password')";

	$result = mysqli_query($connection, $query);
	if (!$result) {
		die('Query FAILED'.mysqli_error($connection));
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="col-sm-6 mt-4">
		<form action="index.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label for="password">password</label>
				<input type="password" class="form-control" name="password">
			</div>
			<input type="submit" class="btn-primary" name="submit" value="Submit">
		</form>
		<br><a href="../index.php">Back</a>
	</div>
</div>
</body>
</html>
