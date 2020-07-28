<?php 
	session_start();

	// variable declaration
	$server = "SERVER_NAME";
	$user = "USERNAME";
	$pass = "PASSWORD";
	$db = "DATABASE_NAME";
	$username = "";
	$email    = "";
	$password = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$conn = new mysqli($server, $user, $pass, $db);
	if ($conn->connect_error) {
    die("Connection to database failed: " . $conn->connect_error);
	}

	// REGISTER USER
	if (isset($_POST['register'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password1 = mysqli_real_escape_string($db, $_POST['password1']);
		$password2 = mysqli_real_escape_string($db, $_POST['password2']);

		$sql = "INSERT INTO people (user, password) VALUES ('$username','$password')";
	
		if ($conn->query($sql) === TRUE) {
			echo "Registered successfully.";
		} else {
			array_push($errors, "Account already exists");
		}

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($password1)) { array_push($errors, "Password is required"); }

		if ($password1 != $password2) {
			array_push($errors, "The two passwords do not match");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
		}
	}
	

	$conn->close();

?>