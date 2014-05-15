<?php
	function spamFilter($text){
		$words = array('buy now', 'credit card', 'car insurance');
		for ($i = 0; $i < count($words); $i++){
			if (strpos($text, $words[$i])){
				echo 'Spam Alert!';
			}
		}
	}

	$string1 = "Great car insurance at competitive prices";
	$string2 = "Apply for a interest free credit card now";
	$string3 = "A meeting has been scheduled for this Monday";

	spamFilter($string1);
	spamFilter($string2);
	spamFilter($string3);


?>