<?php

abstract class Banco
{
    protected float $saldo;

    protected function getSaldo(): float
    {
        return $this->saldo;
    }

    protected function setSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }

    abstract protected function sacar();
    abstract protected function depositar();
}

class Nubank extends Banco
{
    public function sacar()
    {
        echo "Sacou" . PHP_EOL;
    }

    public function depositar()
    {
        echo "Depositou" . PHP_EOL;
    }
}

class Santander extends Banco
{
    public function sacar()
    {
        echo "Sacou" . PHP_EOL;
    }

    public function depositar()
    {
        echo "Depositou" . PHP_EOL;
    }
}

$nubank = new Nubank();
$santander = new Santander();