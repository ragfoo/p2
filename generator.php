<?php


$wordList = [
    'Apples',
    'Oranges',
    'Milk'
    ];

$testVariable = $_POST['word_count'];

$password = "";

foreach($wordList as $index => $word) {
    $password = $password.$word."-";
}