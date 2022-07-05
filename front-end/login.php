<?php
include_once("conexao.php");

$nome = "";
$senha = "";
$logar = "";

if(!empty($_POST['nome'])){
    $nome = $_POST['nome'];
}

if(!empty($_POST['senha'])){
    $senha = $_POST['senha'];
}

if(!empty($_POST['tipo'])){
    $tipo = $_POST['tipo'];
}

if(!empty($_POST['logar'])){
    $logar = $_POST['logar'];
}

if($enviar == 'Enviar'){
    $res_select = "SELECT * FROM usuario WHERE nome = '$nome' AND senha = '$senha'";
    $resposta_select = mysqli_query($conn, $res_insert);
    $row = mysqli_fetch_assoc($resposta_select);
    if($row['senha'] == $senha && $row['nome'] == $nome){
        header("location: menu.html");
        die();
    } else {
        echo "Usuário não encontrado";
    }
}

?>
