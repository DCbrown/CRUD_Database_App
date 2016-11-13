<?php include "db.php"; ?>
<?php

function createRows(){
	if(isset($_POST['submit'])){
		global $connection;	
		$username = $_POST['username'];
		$password = $_POST['password'];
		//Escape functions
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);
		//Encrypt password data into MySQL Database
		$hashFormat = "$2y$10$";
		$salt = "iusesomecrazystrings22";
		$hashF_and_salt = $hashFormat . $salt;
		$password = crypt($password, $hashF_and_salt);
		//Insert Value Data
		$query = "INSERT INTO users(username,password) ";
		$query .= "VALUES ('$username', '$password')";
		$result = mysqli_query($connection, $query);
		//Create Record Check
		if(!$result) {

			die('Query FAILED' . mysqli_error());
			echo "<div class='alert alert-danger'><strong>Bummer!</strong> There is an error.</div>";

		} else{

			echo "<div class='alert alert-success'><strong>Success!</strong>Record Created.</div>";
		}

		
	}
}
	
function showAllData() {
	global $connection;	
	//Select Users  
	$query = "SELECT * FROM users";
	//Check for results
	$result = mysqli_query($connection, $query);
	if(!$result) {
		die('Query FAILED' . mysqli_error());
	}
	//Get Data and print data from MySQL database
	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		echo "<option value='$id'>$id</option>";
	}	
}	
		
function UpdateTable(){
		//Check Connections
		if(isset($_POST['submit'])){
			global $connection;
			$username = $_POST['username'];
			$password = $_POST['password'];
			$id = $_POST['id'];
			//Update the results
			$query = "UPDATE users SET ";
			$query .= "username = '$username', ";
			$query .= "password = '$password' ";
			$query .= "WHERE id = $id ";
			//Check for results
			$result = mysqli_query($connection, $query);
			if(!$result) {

				echo "<div class='alert alert-danger'><strong>Bummer!</strong> There is an error.</div>";
				die("QUERY FAILED" . mysqli_error($connection));

			} else {

				echo "<div class='alert alert-success'><strong>Success!</strong> Record Updated.</div>";
			}
		}	

	}

function deleteRows(){
		//Check Connections
		if(isset($_POST['submit'])){
		global $connection;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];
		//Delete from users
		$query = "DELETE FROM users ";
		$query .= "WHERE id = $id ";
		//Check for results
		$result = mysqli_query($connection, $query);
		if(!$result) {

			echo "<div class='alert alert-danger'><strong>Bummer!</strong> There is an error.</div>";
			die("QUERY FAILED" . mysqli_error($connection));

		} else {

			echo "<div class='alert alert-success'><strong>Success!</strong> Record Deleted.</div>";
		}


	}

}

function readData() {
	//Check Connections
	global $connection;
	//Select from users	
	$query = "SELECT * FROM users";
	//Check for results
	$result = mysqli_query($connection, $query);
	if(!$result) {
		die('Query FAILED' . mysqli_error());
	} 
	//Get Data and print data from MySQL database
	while ($row = mysqli_fetch_assoc($result)) { 	
		print_r($row);
	}
}

?>	