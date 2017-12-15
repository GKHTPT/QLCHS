<?php
	include_once('users.php');
	$user = new Users();
	$result = $user -> getAllUser();
	$final_res =json_decode($result, true);

?>