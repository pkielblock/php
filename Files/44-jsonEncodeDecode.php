<?php

$texto = '
{
  "cep": "09132-130",
  "logradouro": "Rua Cruz de Malta",
  "complemento": "",
  "bairro": "Jardim Santo André",
  "localidade": "Santo André",
  "uf": "SP",
  "ibge": "3547809",
  "gia": "6269",
  "ddd": "11",
  "siafi": "7057"
}
';

//Transform in Object
//$dados = json_decode($texto);
//echo $dados->cep . PHP_EOL;

//Transform JSON in Associative Array
$dados = json_decode($texto, true);
echo $dados["cep"] . PHP_EOL;

$dados['nome'] = "Pedro";

//Transformar Array em JSON | JSON_PRETTY_PRINT (Prints in a better way to view) | JSON_UNESCAPED_UNICODE (allow accents)
$json = json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

var_dump($json);




