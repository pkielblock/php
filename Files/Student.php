<?php

require_once 'Person.php';

class Student extends Person
{
    public string $studentId;

    public function __construct(string $name, string $surname, string $studentId)
    {
        parent::__construct($name, $surname);
        $this->age = 19;
        $this->studentId = $studentId;
    }
}