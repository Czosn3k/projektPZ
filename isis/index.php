<?php
	require('classes.php');
	
	$users_conn = new UsersConnection();

	$users_conn::getUserById(1);
?>