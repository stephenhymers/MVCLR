<?php
require_once 'model/model.php';

// call model to authenticate
$is_registered = register_user();

// return view (login fail or success views)
if ($is_registered) {
	include 'view/register_success.php';
} else {
	include 'view/register_fail.php';
}
?>