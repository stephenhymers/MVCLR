<?php
require_once 'model/model_authenticate.php';

// call model to authenticate
$is_valid_user = user_authenticate();

// return view (login fail or success views)
if ($is_valid_user) {
	include 'view/login_success.php';
} else {
	include 'view/login_fail.php';
}
?>