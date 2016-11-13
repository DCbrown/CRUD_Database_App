<?php
//Database Connection Script
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
	//Test Connections
	if (!$connection) {
		die("Database connection failed");
	}
?>	