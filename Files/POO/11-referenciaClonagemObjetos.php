<?php

class Pessoa
{
    public int $idade;

    //inicializado quando utilizamos a palavra 'clone'.
    public function __clone(): void
    {
        echo "Clonagem de objetos " . PHP_EOL;
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 19;
echo $pessoa->idade . PHP_EOL;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 20;
echo $pessoa2->idade . PHP_EOL;


