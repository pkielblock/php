<?php

class Veiculo
{
    public string $modelo;
    public string $cor;
    public int $ano;

    public function Andar(): void
    {
        echo "Andou" . PHP_EOL;
    }

    public function Parar(): void
    {
        echo "Parou" . PHP_EOL;
    }
}

class Carro extends Veiculo
{
    public function ligarLimpador()
    {
        echo "Limpando" . PHP_EOL;
    }
}

class Moto extends Veiculo
{
    public function empinarMoto()
    {
        echo "CHAMANDO NO GRAU" . PHP_EOL;
    }
}

$carro = new Carro();
$carro->modelo = "Corsinha";
$carro->cor = "Prata";
$carro->ano = 2001;
$carro->Andar();
$carro->Parar();
$carro->ligarLimpador();
var_dump($carro);

echo PHP_EOL;

$moto = new Moto();
$moto->modelo = "XRE 300";
$moto->cor = "Vermelha";
$moto->ano = "2022";
$moto->Andar();
$moto->Parar();
$moto->empinarMoto();
var_dump($moto);

