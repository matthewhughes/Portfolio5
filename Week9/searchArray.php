<?php
	$id = $_POST['id'];
	$forename = $_POST['forename'];
	$surname = $_POST['surname'];

	$file = fopen('16_webStudentList.txt', 'r');
	
	$stack = array();

	while(!feof($file)){
    	$line = fgets($file);
		$pieces = explode(',', $line);
		array_push($stack, array(
			"ID" => $pieces[0],
			"Forename" => $pieces[1],
			"Surname" => $pieces[2]
		));
	}
	fclose($file);

	if($id != ''){
		for($i = 0; $i<count($stack); $i++){
			if(array_search($id, $stack[$i]) === false){
				echo 'Not Found';
			} else {
				echo $stack[$i];
			}
		}
	}

	if($forename != ''){
		for($i = 0; $i<count($stack); $i++){
			if(array_search($forename, $stack[$i]) === false){
				echo 'Not Found';
			} else {
				echo $stack[$i];
			}
		}
	}
	if($surname != ''){
		for($i = 0; $i<count($stack); $i++)
			if(array_search($surname, $stack[$i]) === false){
				echo 'Not Found';
			} else {
				echo $stack[$i];
			}
		}
?>