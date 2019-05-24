<?php

include_once("conexao.php");

$sql = "select * from usuarios";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta);

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
                <li>Cadastro</li>
                <a href="consultas.php"><li>Consultas</li></a>
            </ul>
        </nav>    

        <section>
            <h1>Consultas</h1>
            <hr><br>

            <?php
               print "$registros registros encontrados.";
            ?>
            

        </section>
    </div> 
</body>
</html>