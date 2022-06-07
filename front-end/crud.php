<?php
include_once("conexao.php");

$nome = "";
$email = "";
$senha = "";
$telefone = "";
$endereco = "";
$gravar = "";

if(!empty($_POST['nome'])){
    $nome = $_POST['nome'];
}

if(!empty($_POST['email'])){
    $nome = $_POST['email'];
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

if(!empty($_POST['gravar'])){
    $gravar = $_POST['gravar'];
}

if($gravar == 'Gravar' && $id !=""){
    $res_insert = "INSERT INTO clientes (id_cliente, nome_usuario, email, senha, telefone, endereco, buguer_plus) VALUES ('', '$nome', '$email', '$senha', '$telefone', '$endereco', 'Não') ";
    $resposta_insert = mysqli_query($conn, $res_insert);
    echo "Gravar Aceito";
}

?>