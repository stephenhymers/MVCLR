<?php
require_once 'model/model_authenticate.php';

// call model to logout
user_logout();
// Redirect to logout page
include 'view/logout_confirmation.php';
?>