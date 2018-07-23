<?php
include 'functions.php';

connect_db();

// get the HTTP method, path and body of the request
// $method = $_SERVER['REQUEST_METHOD']; 
$text = $_POST['text'];
if($text == null || $text == "") {	
	error(400, t('The text is necessary for the translation.', false, false));
} else {
	echo t($text);
}

disconnect_db();
?>