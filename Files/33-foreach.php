<?php

$users = [
    [
        'name' => 'Peter',
        'age' => 19,
        'student' => true
    ],
    [
        'name' => 'Alice',
        'age' => 17,
        'student' => true
    ],
    [
        'name' => 'John',
        'age' => 22,
        'student' => false
    ],
];

foreach ($users as $key => $value) {
    echo $key . " => " . $value['name'] . PHP_EOL;
}

$user = new StdClass;

$user->name = 'Peter';
$user->age = 19;

foreach ($user as $key => $value) {
    echo $key . " => " . $value . PHP_EOL;
}

$names = ['Peter' , 'Maria', 'Clara', 'Paul'];

foreach ($names as $key => $name) {
    echo $key . " => " . $name . PHP_EOL;
}