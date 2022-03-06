<?php

//What is a class and instance
require_once 'Person.php';
require_once 'Student.php';

$personInstance = new Person('Peter', 'Jordan');
$personInstance->setAge(19);
$person2Instance = new Person('Bread', 'Jim');
$person2Instance->setAge(22);

echo $personInstance->name . PHP_EOL;
echo $personInstance->getAge() . PHP_EOL;

echo $person2Instance->name . PHP_EOL;
echo $person2Instance->getAge() . PHP_EOL;

echo Person::getCounter() . ' Persons Created.' . PHP_EOL;

$student = new Student('Peter', 'Vladosky', 'ZF1930');
var_dump($student);