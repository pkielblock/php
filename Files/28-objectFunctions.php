<?php

class Student {
    public string $name;
    public string $major;
    public float $gpa;

    public function __construct(string $name, string $major, float $gpa)
    {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
    }

    function hasHonors(): bool
    {
        if ($this->gpa >= 3.5){
            return true;
        } else {
            return false;
        }
    }
}

$student1 = new Student('Peter', 'Computer Science', 2.8);
$student2 = new Student('Alice', 'Business', 3.8);

if ($student1->hasHonors()) {
    echo $student1->name . ' has honors with a ' . $student1->gpa . ' gpa.' . PHP_EOL;
} else {
    echo $student1->name . ' has no honors with a ' . $student1->gpa . ' gpa.' . PHP_EOL;
}

if ($student2->hasHonors()) {
    echo $student2->name . ' has honors with a ' . $student2->gpa . ' gpa.' . PHP_EOL;
} else {
    echo $student2->name . ' has no honors with a ' . $student2->gpa . ' gpa.' . PHP_EOL;
}