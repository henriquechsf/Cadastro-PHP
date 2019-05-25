<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "INSERT INTO usuarios (nome, email, profissao) VALUES ('$nome', '$email', '$profissao')";
$salvar = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/style.css">
    <title>Sistema de Cadastro - PHP</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.html"><li>Cadastro</li></a>
                <a href="consultas.php"><li>Consultas</li></a>
            </ul>
        </nav>    

        <section>
            <h1>Confirmação de Cadastro</h1>
            <hr><br>

            <?php           
                if ($linhas == 1) {
                    print "Cadastro efetuado com sucesso!";
                }else{
                    print "Cadastro não efetuado. <br> Já existe um usuário com este email.";
                }       
            ?>

        </section>
    </div> 
</body>
</html>