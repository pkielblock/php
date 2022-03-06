<?php

class Person {
    public string $name;
    public string $surname;
    protected ?int $age;
    public static int $counter = 0;

    public function __construct (string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = null;
        self::$counter++;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public static function getCounter(): int
    {
        return self::$counter;
    }
}