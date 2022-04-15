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
        .oculto{
            display: none;
        }
    </style>
</head>
<body>
    <h1>Inserindo Dados</h1>
    <form id="formSalva" method="post">
        <label>
            Digite Seu Nome: <input type="text" name="nome" placeholder="Nome" required>
        </label>
        <label>
            Digite Seu Email: <input type="email" name="email" placeholder="Email" required>
        </label>
        <button type="submit" name="salvar">Salvar</button>
    </form>
    <form class="oculto" id="formAtualiza" method="post">
        <input type="hidden" id="idEditado" name="idEditado" placeholder="ID" required>
        <label>
            Digite Novo Nome: <input type="text" id="nomeEditado" name="nomeEditado" placeholder="Nome" required>
        </label>
        <label>
            Digite Novo Email: <input type="email" id="emailEditado" name="emailEditado" placeholder="Email" required>
        </label>
        <button type="submit" name="atualizar">Atualizar</button>
        <button type="submit" id="voltar" name="voltar">Voltar</button>
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
        //Processo de atualização
        if(isset($_POST['atualizar']) && isset($_POST['idEditado']) && isset($_POST['nomeEditado'])  && isset($_POST['emailEditado'])){
            $id = limparPost($_POST['idEditado']);
            $nome = limparPost($_POST['nomeEditado']);;
            $email = limparPost($_POST['emailEditado']);;

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

            $sql = $pdo->prepare("UPDATE clientes SET nome=?, email=? WHERE id=?");
            $sql->execute(array($nome,$email,$id));

            echo "Atualizado " . $sql->rowCount() . " registros" . PHP_EOL;
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
                    <th>Ações</th>
                </tr>
            ";

            foreach ($dados as $chave => $valor){
                echo "
                <tr>
                    <td>" . $valor['id'] . "</td>
                    <td>" . $valor['nome'] . "</td>
                    <td>" . $valor['email'] . "</td>
                    <td><a href='#' class='btnAtualizar' data-id='" . $valor['id'] . "' data-nome='" . $valor['nome'] . "' data-email='" . $valor['email'] . "'>Atualizar</a></td>
                </tr>
                ";
            }

            echo "</table>";
        }else {
            echo "<p>Nenhum Cliente Cadastrado</p>";
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(".btnAtualizar").click(function (){
            let id = $(this).attr('data-id');
            let nome = $(this).attr('data-nome');
            let email = $(this).attr('data-email');

            $("#formSalva").addClass('oculto');
            $("#formAtualiza").removeClass('oculto');

            $("#idEditado").val(id);
            $("#nomeEditado").val(nome);
            $("#emailEditado").val(email);

            //alert('O ID é: ' + id + " | Nome é: "  + nome + " | Email é " + email);
        });

        $('#voltar').click(function (){
            $("#formSalva").removeClass('oculto');
            $("#formAtualiza").addClass('oculto');
        });
    </script>
</body>
</html>
