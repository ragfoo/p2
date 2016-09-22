<?php




$testVariable = $_POST['word_count'];

$password = "";

function generatePassword($wordCount){
	$wordList = [
	    'Apples',
	    'Oranges',
	    'Milk'
	    ];
	
	$password = "hello";
	for($i = 0; $i < $wordCount; $i++){
		$password = $password."-".$wordList[rand(0,2)];
	}
	
	return $password;
}