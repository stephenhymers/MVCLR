<?php
require_once 'model/model_authenticate.php';

// call model to authenticate
$is_registered = user_register();

// return view (login fail or success views)
if ($is_registered) {
	include 'view/register_success.php';
} else {
	include 'view/register_fail.php';
}
?>