<?php

class Animal
{
    public function andar(): void
    {
        echo "O animal andou";
    }

    public function correr(): void
    {
        echo "O animal correu";
    }
}

class Cavalo extends Animal
{
    //Substituir ou reescrever um método herdado;
    public function andar(): void
    {
        $this->correr();
    }
}

$animal = new Cavalo();
$animal->andar();