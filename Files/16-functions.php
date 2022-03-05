<?php

function sayHi(string $name, int $age): void
{
    echo 'Hi ' . $name . ', you are ' . $age . ' years old.' . PHP_EOL;
}

sayHi('Peter', 19);
sayHi('Tom', 32);
sayHi('Dave', 54);
