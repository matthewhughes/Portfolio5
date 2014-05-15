<?php
	function color ($text, $color)
	{
		if($color == 'bk'){
			$color = 'black';
		} else if ($color == 'rd'){
			$color = 'red';
		} else if ($color == 'be'){
			$color = 'blue';
		} else if ($color == 'yw'){
			$color = 'yellow';
		}

		echo '<p style="color:' . $color . '">' . $text . '</p>';
	}

	color('hello world', 'bk');
	color('hello world', 'rd');
	color('hello world', 'be');
	color('hello world', 'yw');

?>