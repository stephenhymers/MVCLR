<?php
/*
 * Authenticates a user_name and password
 * input - $request parameters user_name and password
 * output - true or false
 * output - session variable - user_id, user_name, login_time
 */
function user_authenticate() {

	// get user_name and password from the request
	$request = get_request();
	$user_name = $request['user_name'];
	$password = $request['password'];

	$isSuccess = user_login($user_name, $password);
	return $isSuccess;
}

/*
 * check the user_name and password against values from the database
 * if the select sql query returns a match then set session variables and return true
 * otherwise return false
 * input - user_id and password
 * output - true or false
 * output - session variable - user_id, user_name, login_time
 */
function user_login($user_name, $password) {
	// Create query
	$sql = "SELECT * FROM tbl_user WHERE user_name = '" 
		. $user_name . "'" . " AND password = '" . $password . "'";
	// get the user_name and password from the database
	$db_result_resource = do_sql_query($sql);
	// check if any data was returned from the database
	if ($row = mysql_fetch_assoc($db_result_resource)) {
		// Login succeeds, create session variables
		session_start();
		$_SESSION["user_id"] = $row["user_id"];
		$_SESSION["user_name"] = $user_name;
		$_SESSION["login_time"] = time();
		// free database resources
		mysql_free_result($db_result_resource);
		mysql_close();

		return TRUE;
	} else {
		return FALSE;
	}
}

/*
 * user logout
 * delete cookies and destroy session
 */
function user_logout() {

	// Initialise the session.
	session_start();

	// Unset all of the session variables.
	$_SESSION = array();

	// also delete the session cookie.
	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time() - 600, '/');
	}

	// Finally, destroy the session.
	session_destroy();
}

/*
 * register a user_name and password by inserting a new record in the database
 * input - user_id and password from $request
 * output - true or false
 * output - session variable - user_id, user_name, login_time
 */
function user_register() {

	// get user_name and password from the request
	$request = get_request();
	$user_name = $request['user_name'];
	$password = $request['password'];

	// check if form values left empty
	if (empty($user_name) || empty($password))
		return false;

	// check if the user_name already exists in the database
	$sql = "SELECT * FROM tbl_user WHERE user_name = '" . $user_name . "'";
	$db_result_resource = do_sql_query($sql);
	if ($row = mysql_fetch_assoc($db_result_resource)) {
		return false;
	}

	// Create query to insert new user
	$sql = "INSERT INTO tbl_user (user_name, password) VALUES ('$user_name', '$password')";
	// execute the query
	$db_result_resource = do_sql_query($sql);
	// check if the data was inserted
	if ($db_result_resource == 1) {
		// 1 record inserted, login the new user and create session variables
		$isSuccess = user_login($user_name, $password);
		return $isSuccess;
	} else {
		return FALSE;
	}
}

/*
 * Execute any SQL query
 * input - SQL query string
 * output - reference to the database query result
 */
function do_sql_query($sql) {
	// DB Connection data
	$host = "localhost";
	$user_name = "root";
	$password = "";
	$db = "db_user";

	// set up the connection to the DB
	$mysql_connect = mysql_connect($host, $user_name, $password);
	// good to error check
	if (!$mysql_connect) {
		die('Error connecting to the database: ' . mysql_error());
	}

	// select the particular database
	$db_selected = mysql_select_db($db, $mysql_connect);
	// good to error check
	if (!$db_selected) {
		die('Error selecting the database : ' . mysql_error());
	}

	// submit the SQL query
	$db_result_resource = mysql_query($sql);
	// good to error check
	if (!$db_result_resource) {
		die("Could not successfully run query ($sql) from DB: " . mysql_error());
	}

	//this is a reference to a data resource not the actual data
	return $db_result_resource;
}

/*
 * Store the request parameters into an array
 * input - $REQUEST (i.e. get, post and URL parameters)
 * output - array of properties
 */
function get_request() {

	$request = array();

	// parameters in forms - get and post
	if ($_SERVER['REQUEST_METHOD']) {
		$request = $_REQUEST;
		return $request;
	}
}
?>
