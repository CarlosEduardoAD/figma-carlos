<?php
include_once("conexao.php");

$nome = "";
$email = "";
$senha = "";
$telefone = "";
$endereco = "";
$enviar = "";

if(!empty($_POST['nome'])){
    $nome = $_POST['nome'];
}

if(!empty($_POST['email'])){
    $email = $_POST['email'];
}

if(!empty($_POST['senha'])){
    $senha = $_POST['senha'];
}

if(!empty($_POST['telefone'])){
    $telefone = $_POST['telefone'];
}

if(!empty($_POST['endereco'])){
    $endereco = $_POST['endereco'];
}

if(!empty($_POST['enviar'])){
    $enviar = $_POST['enviar'];
}

if($enviar == 'Enviar'){
    $res_insert = "INSERT INTO clientes (nome_usuario, email, senha, telefone, endereco, buguer_plus) VALUES ('$nome', '$email', '$senha', '$telefone', '$endereco', 'Não') ";
    $resposta_insert = mysqli_query($conn, $res_insert);
    header("location: menu.html");
    die();
}
?>
