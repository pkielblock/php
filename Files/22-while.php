<?php

$i = 1;
echo 'While Loop' . PHP_EOL;
while ($i <= 5){
    echo $i . PHP_EOL;
    $i++;
}

$i = 6;
echo 'Do While Loop' . PHP_EOL;
do {
    echo $i . PHP_EOL;
    $i++;
} while ($i <= 5);
