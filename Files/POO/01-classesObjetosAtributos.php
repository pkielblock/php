<?php

class Pessoa
{
    public string $nome;
    public int $idade;

    public function falar(): void
    {
        echo $this->nome . " de " . $this->idade . " anos acabou de falar."  . PHP_EOL;
    }
}

$pedro = new Pessoa();

$pedro->nome = "Pedro Henrique";
$pedro->idade = 19;
$pedro->falar();
var_dump($pedro);
