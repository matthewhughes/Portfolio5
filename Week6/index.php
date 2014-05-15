<?php
	$file = fopen('13_phobialist.txt', 'r');
	while(!feof($file)){
    	$line = fgets($file);
		echo $line;
	}
	fclose($file);
?>