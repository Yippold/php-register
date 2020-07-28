<?php 
	session_start();

	$server = "SERVER_NAME";
	$user = "USERNAME";
	$pass = "PASSWORD";
	$db = "DATABASE_NAME";
	$errors = array();
	$_SESSION['success'] = "";

	$connection = new mysqli($server, $user, $pass, $db);
	if ($connection->connect_error) {
    die("Failed the connection to the database: " . $connection->connect_error);
	}

	if (isset($_POST['register'])){
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$password1 = mysqli_real_escape_string($connection, $_POST['password1']);
		$password2 = mysqli_real_escape_string($connection, $_POST['password2']);

		if (count($errors) == 0) {
			$password = md5($password1);//encrypt the password before saving in the database
			$sql = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($connection, $sql);
			
		# next script is temporarily deactivated because it makes the infos appear twice in the db so i'll fix that later lol
		/*if ($connection->query($sql) === TRUE) {
			echo "Successfully registered";
		} else {
			array_push($errors, "An error has occured");
		}*/

		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password1)) { array_push($errors, "Password is required"); }

		if ($password1 != $password2) {
			array_push($errors, "The two passwords do not match");
		}
	}
}
	

	$connection->close();

?>
