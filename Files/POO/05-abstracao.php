<?php

abstract class Banco
{
    protected float $saldo;

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }

    abstract protected function sacar(float $saque);
    abstract protected function depositar(float $deposito);
}

class Nubank extends Banco
{
    public function sacar(float $saque): float
    {
        return $this->saldo -= $saque;
    }

    public function depositar(float $deposito): float
    {
        return $this->saldo += $deposito;
    }
}

$nubank = new Nubank();

$nubank->setSaldo(1000);
echo "Saldo: " . $nubank->getSaldo() . PHP_EOL;

$nubank->depositar(5000);
echo "Saldo Após Depósito: " . $nubank->getSaldo() . PHP_EOL;

$nubank->sacar(2500);
echo "Saldo Após Saque: " . $nubank->getSaldo() . PHP_EOL;