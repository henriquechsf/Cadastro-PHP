<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "INSERT INTO usuarios (nome, email, profissao) VALUES ('$nome', '$email', '$profissao')";
$save = mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>