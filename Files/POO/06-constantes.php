<?php

class Pessoa
{
    const nome = "Pedro";

    public function exibirNome(): void
    {
        echo self::nome;
    }
}

Class Pedro extends Pessoa
{
    const nome = "Henrique";

    public function exibirNome(): void
    {
        echo parent::nome;
    }
}

$pedro = new Pedro();
$pedro->exibirNome();