<?php
require('db/connection.php');

//Insert data (unsafe method | sql injection)
//$sql = $pdo->prepare("INSERT INTO clientes VALUES(null, 'Pedro', 'pedro@gmail.com', '03-04-2022')");
//$sql->execute();

//Correct/safe method | no sql injection
if(isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = date('d-m-Y');

    $sql = $pdo->prepare("INSERT INTO clientes VALUES(null,?,?,?)");
    $sql->execute(array($nome, $email, $data));
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserindo Dados</title>
</head>
<body>
<h1>Inserindo Dados</h1>
<form action= "insert.php" method="POST">
    <label>
        Digite Seu Nome: <input type="text" name="nome" placeholder="Nome" required>
    </label>
    <label>
        Digite Seu Email: <input type="email" name="email" placeholder="Email" required>
    </label>
    <button type="submit" name="salvar">Salvar</button>
</form>
</body>
</html>
