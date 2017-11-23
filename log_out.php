<?php
	session_start();
	$_SESSION['name']='';
	$_SESSION['university']='';
	$_SESSION['file_name']='';
	echo '<script type="text/javascript">alert("Logged Out Successfully");</script>';
	header("Location:login.php?Successfully_Logged_Out");
	exit;
?>