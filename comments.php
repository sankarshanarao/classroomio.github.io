<?php
	session_start();
	$head=$_SESSION['head'];
	$user=$_SESSION['name'];
	$t=time();
	$comment=$user.": ".$_POST['comment']." Time:".date("F d,Y h:i:s",$t);
	$lines=file("comments.txt");
	$flag=0;
	for($var=0;$var<count($lines);++$var)
	{
		//echo $lines[$var];
		$sub=$lines[$var];
		$str=explode("?",$sub);
		if($str[0]==$head)
		{
			$str_temp="";
			//$str_temp="$user?";
			for($i=0;$i<count($str)-1;++$i)
			{
				$str_temp=$str_temp.$str[$i]."?";
			}
			$str_temp=$str_temp.$comment."?\r\n";
			$lines[$var]=$str_temp;
			$flag=1;
			echo "present";
			break;
		}
	}
	$op=fopen("comments.txt","w");
	for($c=0;$c<count($lines);++$c)
	{
		fwrite($op,$lines[$c]);
	}
	fclose($op);
	if($flag==0)
	{
		echo "no such thing";
		$op=fopen("comments.txt","a");
		fwrite($op,$head);
		fwrite($op,"?".$comment."?\r\n");
		fclose($op);
	}
	header("Location:show_threads.php?head=$head");
	exit;
?>
<script>
	window.scrollBy(0,document.body.scrollHeight);
</script>