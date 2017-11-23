<?php
	$lines=file("form_values.txt");
	for($var=count($lines)-1;$var>=0;--$var)
	{
		$str=explode("?",$lines[$var]);
		$sub=substr($str[2],0,159);
		$a=$str[3];
		echo "<div class='notiCard'>
					<a href='show_threads.php?head=$str[1]'>
					<h3>$str[1]</h3>
					<p>$sub</p></a>
					<a href=home_upload/$a download>$a</a>
			</div>";
	}
?>
<script>
	window.scrollBy(0,document.body.scrollHeight);
</script>