<?php

class Pessoa
{
    public function atribuiNome(string $nome): string
    {
        return "O nome da pessoa é " . $nome . PHP_EOL;
    }
}

class Exibe
{
    public Pessoa $pessoa;
    public string $nome;

    public function __construct(string $nome)
    {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome(): void
    {
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Pedro Henrique");
$exibe->exibeNome();