<?php
include_once("conexao.php");

$nome = "";
$endereco = "";
$tipo= "";
$dono = "";
$ha = "";
$hf = "";
$gravar = "";

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

if(!empty($_POST['gravar'])){
    $gravar = $_POST['gravar'];
}

if($gravar == 'Gravar' && $id !=""){
    $res_insert = "INSERT INTO restaurante (id_restaurante, nome_restaurane, avaliacao, endereco, tipo, dono_restaurante) VALUES ('', '$nome', '10', '$endereco', '$tipo', '$dono') ";
    $resposta_insert = mysqli_query($conn, $res_insert);
    echo "Gravar Aceito";
}

?>