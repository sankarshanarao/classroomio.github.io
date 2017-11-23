<?php
	$lines=file("chat.txt");
	for($var=0;$var<count($lines);++$var)
		echo $lines[$var]."<br>";
?>
<script>
	window.scrollBy(0,document.body.scrollHeight);
</script>
<style>
body{
	background-color:#f0fff0;
	font-family: "Lucide Console", Monaco, monospace;
}
</style>