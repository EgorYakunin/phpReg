<?php 
	$connection = mysqli_connect('localhost', 'root', 'root', 'test_db');
	if (!$connection) {
		die('Database connection FAILED :( ');
	}
?>