<?php

$servidor = "localhost";
$usuario = "pedro";
$senha = "123";
$banco = "primeiro_banco";

$pdo = new PDO("mysql:host=$servidor;dbname=$banco","$usuario","$senha");

//sanitize entries
function limparPost($dado){
    $dado = trim($dado);
    $dado = stripslashes($dado);
    $dado = htmlspecialchars($dado);

    return $dado;
}