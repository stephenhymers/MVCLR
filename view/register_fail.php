<!DOCTYPE html>
<html >
	<head>
		<title>Authentication Example</title>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h2>Registration failed! Please try again!</h2>
		<p>Please enter a user name and password to register</p>
		<form action="controller_user_register.php" method="get" >
			<label>Username:
				<input type="text" name="user_name" />
			</label>
			<label>Password:
				<input type="text" name="password" />
			</label>
			<input type="submit" value="Submit" />
		</form>		
		<p>
			<a href="test_user_authenticate.php">Home</a>
		</p>
	</body>
</html>