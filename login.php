<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login Page For Students/Teacher</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label><b>Username</b></label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label><b>Password</b></label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		
		<p>
			Not yet a member? <a href="register.php"><b>Sign up</b></a>
		</p>
		<p>
			Log In Admin <a href="admin/create_user.php"><b>Admin page</b></a>
		</p>
		
	</form>
</body>
</html>