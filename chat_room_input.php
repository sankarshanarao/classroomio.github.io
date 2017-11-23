<?php
	session_start();
	extract($_POST);
	$writefile=fopen("chat.txt",'a') or die("Unable to open file");
	fwrite($writefile,$_SESSION['name'].':');
	fwrite($writefile,$chat."\r\n");
	header("Location:chat_room.php");
	exit;
?>