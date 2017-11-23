<?php
	session_start();
	extract($_POST);
	$email=trim($email);
	$password=trim($password);
	echo $email." ".$password."<br>";
	$lines=file('details.txt');
	$flag=0;
	foreach ($lines as $string)
	{
		$str=explode(",",$string);
		echo $str[0].",".$str[1].",".$str[2]."<br>";
		if(!strcmp($str[1],$email) && !strcmp($str[2],$password))
		{	
			echo "it exists";
			$_SESSION['name']=$str[0];
			$_SESSION['university']=$str[4];
			$_SESSION['file_name']=$str[5];
			$_SESSION['person']=$str[3];
			if($str[3]=="student")
				header("Location:onlydiv.php");
			else
			{
				header("Location:teacher_dash.php");
			}
			$flag=1;
			exit;
		}
	}
	if($flag!=1)
	{
		header("Location:login.php");
		exit;
	}
?>