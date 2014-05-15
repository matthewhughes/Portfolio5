<?php
	
	echo '<table>';
	echo '<tr><th>sum</th><tr>';
	echo '<tr><th>answer</th><tr>';

	 for($i = 0; $i < 100; $i++){
	 	echo "<tr><td>";
	 	echo $i . " * 9";
	 	echo '</td><td>';
	 	echo $i * 7;
	 	echo '</td></tr>';
	 }
?>