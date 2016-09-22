<?php


$csv = array_map('str_getcsv', file('shakespeare.csv'));
$numberOfWords = count($csv);

//$testVariable = $_POST['word_count'];

$password = "";

function generatePassword($wordCount){
	global $csv;
	global $numberOfWords;
	$wordList = [
	    'Apples',
	    'Oranges',
	    'Milk'
	    ];
	
	$password = $csv[rand(0,$numberOfWords-1)][0];
	for($i = 1; $i < $wordCount; $i++){
		$password = $password."-".$csv[rand(0,$numberOfWords-1)][0];
	}
	
	return $password;
}