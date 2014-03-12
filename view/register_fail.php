<!DOCTYPE html>
<html >
	<head>
		<title>Authentication Example</title>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h2>Registration failed! Please try again!</h2>
		<p>Please enter a user name and password to register</p>
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