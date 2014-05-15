<?
	$number = $_POST['number'];

	$farenheit = $number * 1.8 + 32;
	$roundf = round($farenheit);

	echo $number . 'Degrees Celsius is approximately ' . $roundf . ' Degrees Fahrenheit; however, to be exact it would be ' . $farenheit . ' Degrees Fahrenheit.';

?>