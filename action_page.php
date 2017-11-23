<?php
$myfile=fopen("comments.txt",'a') or die("Unable to open file");
extract($_POST);
fwrite($myfile,$firstname.",");
fwrite($myfile,$lastname.",");
fwrite($myfile,$email.",");
fwrite($myfile,$country.",");
fwrite($myfile,$subject."\r\n\n");
fclose($myfile);
header("Location:contact.html");
exit;
?>