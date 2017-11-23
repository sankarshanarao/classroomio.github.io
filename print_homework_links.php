<?php
    $directory = 'home_upload/';
    if (!is_dir($directory)) {
        exit('Invalid diretory path');
    }
    $files = array();
    foreach (scandir($directory) as $file) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;

        $files[] = $file;
    }
	foreach ($files as $a)
	{
		echo "<a href=\"upload/$a\" "."download>$a</a>"."<br>";
	}
?>