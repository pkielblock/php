<?php

class Pessoa
{
    private array $dados = array();

    public function __set(string $nome, string $valor): void
    {
        $this->dados[$nome] = $valor;
    }

    public function __get(string $nome): string
    {
        return $this->dados[$nome];
    }

    public function __toString(): string
    {
        return "Tentei imprimir o objeto " . PHP_EOL;
    }

    public function __invoke(): string
    {
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Pedro";
$pessoa->idade = 19;

echo $pessoa;
echo $pessoa();