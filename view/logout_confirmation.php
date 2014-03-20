<?php // User not logged in, redirect to login page
if (!isset($_SESSION["user_id"])) {	header("Location: test_user_authenticate.php"); }
?>
<!DOCTYPE html>
<html >
	<head>
		<title>Authentication example</title>
		<link href="css/main.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h2>You have been looged out - Thank you!</h2>
		<p>
			<a href="test_user_authenticate.php">Login again</a>
		</p>
	</body>
</html>