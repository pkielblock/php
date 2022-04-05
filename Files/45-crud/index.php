<?php
require('db/connection.php');

?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th, td{
            padding: 10px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Inserindo Dados</h1>
    <form method="post">
        <label>
            Digite Seu Nome: <input type="text" name="nome" placeholder="Nome" required>
        </label>
        <label>
            Digite Seu Email: <input type="email" name="email" placeholder="Email" required>
        </label>
        <button type="submit" name="salvar">Salvar</button>
    </form>
    <br>
    <?php
    //Insert data (unsafe method | sql injection)
    //$sql = $pdo->prepare("INSERT INTO clientes VALUES(null, 'Pedro', 'pedro@gmail.com', '03-04-2022')");
    //$sql->execute();

    //Correct/safe method | no sql injection
    if(isset($_POST['salvar']) && isset($_POST['nome']) && isset($_POST['email'])){

        $nome = limparPost($_POST['nome']);
        $email = limparPost($_POST['email']);
        $data = date('d-m-Y');

        //Validating empty fields
        if($nome == "" || $nome == null){
            echo "<b style='color:red'>Nome não pode ser vazio</b>" . PHP_EOL;
            exit();
        }
        if($email == "" || $email == null){
            echo "<b style='color:red'>Email não pode ser vazio</b>" . PHP_EOL;
            exit();
        }

        //Validating Name and Email
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
            echo "<b style='color:red'>Somente letras e espaços são permitidos</b>" . PHP_EOL;
            exit();
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<b style='color:red'>Formato de Email Inválido</b>" . PHP_EOL;
            exit();
        }

        $sql = $pdo->prepare("INSERT INTO clientes VALUES(null,?,?,?)");
        $sql->execute(array($nome, $email, $data));

        echo "<b style='color:lightgreen'>Cliente inserido com successo</b>" . PHP_EOL;
    }
    ?>
    <?php
        //SELECT data
        $sql = $pdo->prepare("SELECT * FROM clientes");
        $sql->execute();
        $dados = $sql->fetchAll();

        //Example filtering data
        //$sql = $pdo->prepare("SELECT * FROM clientes WHERE email = ?");
        //$email = "pedroaaa@gmail.com";
        //$sql->execute(array($email));
        //$dados = $sql->fetchAll();
    ?>
    <?php
        if (count($dados) > 0){
            echo "
            <br><br><table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            ";

            foreach ($dados as $chave => $valor){
                echo "
                <tr>
                    <td>" . $valor['id'] . "</td>
                    <td>" . $valor['nome'] . "</td>
                    <td>" . $valor['email'] . "</td>
                </tr>
                ";
            }

            echo "</table>";
        }else {
            echo "<p>Nenhum Cliente Cadastrado</p>";
        }
    ?>
</body>
</html>
