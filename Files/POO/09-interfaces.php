<?php

interface Crud
{
    public function create(string $data): void;
    public function read(): void;
    public function update(): void;
    public function delete(): void;
}

class Noticias implements Crud
{
    public function create(string $data): void
    {
        echo "Noticia Criada" . PHP_EOL;
    }

    public function read(): void
    {
        echo "Noticia Mostrada" . PHP_EOL;
    }

    public function update(): void
    {
        echo "Noticia Atualizada" . PHP_EOL;
    }

    public function delete(): void
    {
        echo "Noticia Deletada" . PHP_EOL;
    }
}

$noticias = new Noticias();
$noticias->create("11/05/2022");
$noticias->read();
$noticias->update();
$noticias->delete();