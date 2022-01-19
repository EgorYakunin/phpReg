<?php
/*

Made by Yakunin Egor 
Saturday, 8 February 2020

I FUCKING SPENDED THERE HOURS TO UNDERSTATD THAT A FUCKING DOLLAR SIGHT IS MISSING AAAAAAA !!!!!

*/

	include "connection.php";
	include "queres.php";

if (isset($_POST['submit'])) {
	$id = $_POST['id'];
	$query = "DELETE FROM users ";
	$query .= "WHERE id = $id ";
	$result = mysqli_query($connection, $query);

	if (!$result) {
		die('Query FAILED'.mysqli_error($connection));
	}else{
		echo "Done ! ";
	}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="col-sm-6 mt-4">
		<form action="index.php" method="post">
			<div class="form-group">
				<label>Chose id you whant to delete</label><br>
				<select name="id">
					<?php 
						deleteRow();
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








