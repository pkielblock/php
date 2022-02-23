<?php
$phrase = "This is a string";

//Modifies all the string to lowercase
echo strtolower($phrase) . PHP_EOL;
//Modifies all the string to uppercase
echo strtoupper($phrase) . PHP_EOL;
//Shows the lenght of the string (how many letters it has (espace included))
echo strlen($phrase) . PHP_EOL;
//Show an especific character in the string
echo $phrase[0] . PHP_EOL;
//Replace Word
echo str_replace("string", "StRiNg", $phrase) . PHP_EOL;
//Get a sub string
echo substr($phrase, 0,4);