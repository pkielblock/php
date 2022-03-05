<?php

//isset used to verify if a position of an array or object exists.
if (!isset($argv[1])) {
    die('Preencha com um argumento');
}

$age = $argv[1];


if (!is_numeric($age)) {
    die('Cara manda um number ae');
}

if ($age >= 18) {
    echo 'Você é maior de idade';
} else {
    echo 'Você não é mairo de idade';
}