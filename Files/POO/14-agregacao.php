<?php

class Produtos
{
    public string $nome;
    public string $valor;

    public function __construct(string $nome, string $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho
{
    public array $produtos;

    public function adiciona(Produtos $produto): void
    {
        $this->produtos[] = $produto;
    }

    public function exibe(): void
    {
        foreach ($this->produtos as $produto)
        {
            echo $produto->nome . PHP_EOL;
            echo $produto->valor . PHP_EOL;
            echo PHP_EOL;
        }
    }
}

$produto = new Produtos("Notebook", "1500");
$produto2 = new Produtos("Mouse", "550");

$carrinho = new Carrinho();
$carrinho->adiciona($produto);
$carrinho->adiciona($produto2);

$carrinho->exibe();