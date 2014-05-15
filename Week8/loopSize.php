<?php
	function numSize($num1, $num2){
		if($num1 > $num2){
			$diff = $num1 - $num2;
		} else {
			$diff = $num2 - $num1;
		}

		echo "Numbers passed were" . $num1 . 'and ' . $num2;
		echo "The difference between these numbers was " . $diff; 
	}

	numSize(9, 10);
	numSize(11, 11111);


?>