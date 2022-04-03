<?php

$texto = $_POST['texto'];
$dados = json_decode($texto, true);

$dados['Nome'] = ["Pedro"];

$json = json_encode($dados);

echo $json;
