<?php

require_once 'vendor/autoload.php';

$product = new \App\Model\Product();
$product->setId(1);
$product->setName('Acer Nitro 5');
$product->setDescription('A Powerful Laptop');

$productDao = new \App\Model\ProductDao();

//$productDao->create($product);
//$productDao->update($product);
//$productDao->delete(2);
foreach ($productDao->read($product) as $product)
{
    echo $product['nome'] . PHP_EOL;
    echo $product['descricao'] . PHP_EOL;
    echo PHP_EOL;
}