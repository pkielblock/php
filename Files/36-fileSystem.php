<?php
//Magic constants
echo __DIR__ . PHP_EOL;
echo __FILE__ . PHP_EOL;
echo __LINE__ . PHP_EOL;

//create directory
mkdir('test');

//rename directory
rename('test', 'test2');

//delete directory
rmdir('test2');

//read and write file and folders inside directory
$files = scandir('./');
var_dump($files);

file_put_contents('35-dates.php', '//Testing put contest function');

echo file_get_contents('35-dates.php') . PHP_EOL;

//get content from URL
$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo $usersJson . PHP_EOL;

$users = json_decode($usersJson, true);
var_dump($users);

//check if a file exists
echo file_exists('35-dates.php') . PHP_EOL;
//check if a folder is a directory
echo is_dir('../Files') . PHP_EOL;