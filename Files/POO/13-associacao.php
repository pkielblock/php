<?php

class Pedido
{
    public int $numero;
    public Cliente $cliente;
}

class Cliente
{
    public string $nome;
    public string $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Pedro Henrique";
$cliente->endereco = "Rua Oliveira, Número: 19";

$pedido = new Pedido;
$pedido->numero = 123;
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'nome' => $pedido->cliente->nome,
    'endereco' => $pedido->cliente->endereco
);

var_dump($dados);