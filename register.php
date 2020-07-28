<?php include('./php/server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register | Penguin Club</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('./php/errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="username" maxlength = "12">
		</div>
		<div class="input-group">
			<label>Email Address</label>
			<input type="email" name="email">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register">Register</button>
		</div>
	</form>
</body>
</html>