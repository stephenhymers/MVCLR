<!DOCTYPE html>
<html>
	<head>
		<title>Simple MVC authenticate example</title>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>Test authenticate user</h1>
		<p>
			The action for the login form below calls controller_authenticate_user.php
		</p>
		<p>
			controller_authenticate_user.php checks the username and password against the values in the database
		</p>
		<p>
			If the values match the user is redirected to a login success page (view_login_success.php),
		</p>
		<p>
			otherwise an error page (view_login_fail.php) is displayed
		</p>
		<form action="controller_authenticate_user.php" method="get" >
			<label>Username:
				<input type="text" name="user_name" />
			</label>
			<label>Password:
				<input type="text" name="password" />
			</label>
			<input type="submit" value="Submit" />
		</form>
		<h3>check cookies are enabled!</h3>
		<h1>Test register user</h1>
		<p>
			Please enter a user name and password to register
		</p>
		<form action="controller_register_user.php" method="get" >
			<label>Username:
				<input type="text" name="user_name" />
			</label>
			<label>Password:
				<input type="text" name="password" />
			</label>
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>