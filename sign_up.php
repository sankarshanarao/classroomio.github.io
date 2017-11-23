<?php
$myfile=fopen("details.txt",'a') or die("Unable to open file");
	fwrite($myfile,$_POST['name'].",");
	fwrite($myfile,$_POST['email'].",");
	fwrite($myfile,$_POST['password'].",");
	fwrite($myfile,$_POST['category'].",");
	fwrite($myfile,$_POST['university'].",");
	if($_FILES)
	{
		$file=$_FILES['file'];
		$fileName = $file['name'];
		$fileTmpName = $file['tmp_name'];
		$fileSize = $file['size'];
		$fileError = $file['error'];
		$fileType = $file['type'];
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpg', 'jpeg', 'png','gif');
		$fileDestination='img_upload/'.$fileName;
		move_uploaded_file($fileTmpName, $fileDestination);
		fwrite($myfile,$fileName);
	header("Location:sign_up_main.html?Sign_Up_Successfull");
	}
	else
	{
		echo "No files exist";
		header("Location:sign_up_main.html?Sign_Up_Not_Successfull");
	}
	fwrite($myfile,"\r\n");
	exit;
?>