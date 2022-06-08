<?php
include_once("conexao.php");

$nome = "";
$endereco = "";
$tipo= "";
$dono = "";
$ha = "";
$hf = "";
$enviar = "";

if(!empty($_POST['nome'])){
    $nome = $_POST['nome'];
}

if(!empty($_POST['endereco'])){
    $endereco = $_POST['endereco'];
}

if(!empty($_POST['tipo'])){
    $tipo = $_POST['tipo'];
}

if(!empty($_POST['dono'])){
    $dono = $_POST['dono'];
}

if(!empty($_POST['ha'])){
    $ha = $_POST['ha'];
}

if(!empty($_POST['hf'])){
    $hf = $_POST['hf'];
}

if(!empty($_POST['enviar'])){
    $enviar = $_POST['enviar'];
}

if($enviar == 'Enviar'){
    $res_insert = "INSERT INTO restaurante (nome_resturante, avaliacao, endereco, tipo, dono_restaurante) VALUES ('$nome', '10', '$endereco', '$tipo', '$dono') ";
    $resposta_insert = mysqli_query($conn, $res_insert);
    echo "Gravar Aceito";
}

?>