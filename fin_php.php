<?php
session_start();
$myfile=fopen("form_values.txt",'a') or die("Unable to open file");
$head=$_POST["INP"]."?"; 
$text=$_POST['content']."?";
fwrite($myfile,$_SESSION['name']."?");
fwrite($myfile,$head);
fwrite($myfile,$text);
$flag=0;
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
		$fileDestination='home_upload/'.$fileName;
		move_uploaded_file($fileTmpName, $fileDestination);
		$flag=1;
		fwrite($myfile,$fileName);
	}
fwrite($myfile,"\r\n");
fclose($myfile);
if(!$_SESSION['person']=='lecturer')
{
	if($flag==0)
		header("Location:onlydiv.php?didntuploadfile");
	else
		header("Location:onlydiv.php?uploadedfile");
}
	
else
{
	if($flag==0)
		header("Location:teacher_dash.php?notuploadingfile");
	else
		header("Location:teacher_dash.php?uploadingfile");	
}
exit;
?>