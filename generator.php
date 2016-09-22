<?php


$csv = array_map('str_getcsv', file('shakespeare.csv'));
$numberOfWords = count($csv);
$error = "";
$defaultWordCount = 4;
$addNumber = 'off';
$addSymbol = 'off';
$symbolArray = ['!','@','#','$','%','^','&','*','?','+'];
$wordCount = $defaultWordCount;

if (array_key_exists('word_count',$_POST)){
	global $wordCount;
	$wordCount = $_POST['word_count'];
}

if (array_key_exists('add_number',$_POST)){
	$addNumber = $_POST['add_number'];
}

if (array_key_exists('add_symbol',$_POST)){
	$addSymbol = $_POST['add_symbol'];
}

$password = generatePassword($wordCount,$addNumber,$addSymbol);



function generatePassword($wordCount,$addNumber,$addSymbol){
	global $error;
	$error = "";
	if ((intval($wordCount) >= 0) and (intval($wordCount) < 10)){
		global $csv;
		global $numberOfWords;
		
		if (intval($wordCount) == 0){
			$password = "";
		}
		else{
			$password = $csv[rand(0,$numberOfWords-1)][0];
		}
		
		for($i = 1; $i < $wordCount; $i++){
			$password = $password."-".$csv[rand(0,$numberOfWords-1)][0];
		}
		
		if ($addNumber == 'on'){
			$password = $password.rand(0,9999);
		}
		
		if ($addSymbol == 'on'){
			global $symbolArray;
			$numberOfSymbols = count($symbolArray);
			$password = $password.$symbolArray[rand(0,$numberOfSymbols-1)];
		}
		return $password;
	}
	else{
		$error = "The number of words must be an integer between 1 and 9";
		return 1;
	}
}