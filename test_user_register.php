<!DOCTYPE html>
<html>
	<head>
		<title>Simple MVC authenticate example</title>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>Test authenticate user</h1>
		<p>
			The action for the login form below calls controller_user_authenticate.php
		</p>
		<p>
			The controller_user_authenticate.php call on the model to check the username and password against the values in the database
		</p>
		<p>
			If the values match the user is redirected to a login success page,
		</p>
		<p>
			otherwise an error page is displayed
		</p>
		<form action="controller_user_authenticate.php" method="get" >
			<label>Username:
				<input type="text" name="user_name" />
			</label>
			<label>Password:
				<input type="text" name="password" />
			</label>
			<input type="submit" value="Submit" />
		</form>
		<h1>Test register user</h1>
		<p>
			Please enter a user name and password to register
		</p>
		<form action="controller_user_register.php" method="get" >
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