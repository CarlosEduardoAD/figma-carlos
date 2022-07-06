<?php
include_once("conexao.php");
session_start();

$nome = "";
$senha = "";
$logar = "";

if(!empty($_POST['email'])){
    $nome = $_POST['email'];
}

if(!empty($_POST['senha'])){
    $senha = $_POST['senha'];
}

if(!empty($_POST['logar'])){
    $logar = $_POST['logar'];
}

if($logar == 'logar'){
    $res_select = "SELECT * FROM clientes WHERE nome_usuario = '$nome' and senha = '$senha' ";
    $resposta_select = mysqli_query($conn, $res_select);
    $row = mysqli_fetch_assoc($resposta_select);
    echo $row;
    if($row['nome_usuario'] == $nome && $row['senha'] == $senha){
        $_SESSION['usuario'] = $row['nome_usuario'];
        $_SESSION['senha'] = $row['senha'];
        $_SESSION['logged'] = True;
        header("location: menu.html");
    } else {
        echo "Usuário não encontrado";
    }
}

?>
