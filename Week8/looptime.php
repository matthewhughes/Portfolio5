<?php
	function loopTime($int){
		$mtime = microtime();
		$mtime = explode(" ",$mtime);
		$mtime = $mtime[1] + $mtime[0];
		$starttime = $mtime;

		for($i = 0; $i < $int; $i++){
		}

		$mtime = microtime();
		$mtime = explode(" ",$mtime);
		$mtime = $mtime[1] + $mtime[0];
		$endtime = $mtime;
		$totaltime = ($endtime - $starttime);
		echo "Executed in ".$totaltime." seconds";
	}

	loopTime(100);
	loopTime(1000);
	loopTime(10000);
	loopTime(200);
	loopTime(2000);
	loopTime(20000);

?>