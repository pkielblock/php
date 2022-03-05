<?php
$friends = [
    'Peter',
    'Paul',
    'Lisa',
    'Jim'
];

$friends[3] = 'Melissa';
$friends[4] = 'Jim';

echo $friends[0] . PHP_EOL;
echo $friends[1] . PHP_EOL;
echo $friends[2] . PHP_EOL;
echo $friends[3] . PHP_EOL;
echo $friends[4] . PHP_EOL;
echo count($friends);
