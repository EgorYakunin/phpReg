<?php
/*

Made by Yakunin Egor 
Saturday, 8 February 2020

I FUCKING SPENDED THERE HOURS TO UNDERSTATD THAT A FUCKING DOLLAR SIGHT IS MISSING AAAAAAA !!!!!

*/

	include "connection.php";
	include "queres.php";

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id = $_POST['id'];

	$query = "UPDATE users SET ";
	$query .= "username = '$username', ";
	$query .= "password = '$password' ";
	$query .= "WHERE id = $id ";



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
    <title>Update</title>
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
			<div class="form-group">
				<label>Chose users id</label><br>
				<select name="id">
					<?php 
						showAllData();
					?>
				</select>
			</div>
			<input type="submit" class="btn-primary" name="submit" value="Update">
		</form>
		<br><a href="../index.php">Back</a>
	</div>
</div>
</body>
</html>








