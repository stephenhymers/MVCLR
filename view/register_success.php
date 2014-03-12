<?php // User not logged in, redirect to login page
if (!isset($_SESSION["user_id"])) {	header("Location: test_authenticate_user.php"); }
?>
<!DOCTYPE html>
<html >
	<head>
		<title>Authenticate example</title>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1> Welcome <?php echo $_SESSION["user_name"] ?></h1>
		<h2> Registeration Suceeded! </h2>
		<p>
			User ID: <?php echo $_SESSION["user_id"] ?>
			Username: <?php echo $_SESSION["user_name"] ?>
			Logged in: <?php echo date('l, F jS, Y', $_SESSION["login_time"]) ?>
		</p>
		<p>
			<a href="controller_logout_user.php">logout</a>
		</p>
	</body>
</html>