<?php
include 'functions.php';

connect_db();

// get the HTTP method, path and body of the request
// $method = $_SERVER['REQUEST_METHOD']; 
$user = getUser($_POST['hash'], 'POST');
if($user == null) {	
	error(400, t('There is not a user related to that hash code.', false, false));
} else if($_POST['name'] == null) {
	error(400, t("The name field cannot be empty.", false, false), "name");
} else if($_POST['email'] == null) {
	error(400, t("The email field cannot be empty.", false, false), "email");
} else if($_POST['pass'] == null) {
	error(400, t("The password field cannot be empty.", false, false), "pass");
} else if(!is_email($_POST['email'])) {
	error(400, t("The email field has not a valid email format.", false, false), "email");
} else {
	$error = updateUser($user, $_POST['name'], $_POST['email'], $_POST['pass']);
	if(!empty($error)) {
		error(400, $error, "email");
	} else {
		echo json_encode($user);
	}
}

disconnect_db();
?>