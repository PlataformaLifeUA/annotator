<?php include 'header.php'; ?>

<?php 
if(!is_known_user() || is_new_user() || is_user_starting()) {
	include 'presentation.php';
} else {
	include 'anotate.php';
}
?>

<?php
include 'footer.php';
?>

