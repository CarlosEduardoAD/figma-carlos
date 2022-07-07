<?php
include_once("conexao.php");

$query = 'SELECT * FROM clientes INNER JOIN pedido ON clientes.id_cliente = pedido.id_user WHERE nome_usuario = "Carlos"';
$query2 = 'SELECT * FROM produto WHERE id_produto = 1';
$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query2);
$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result2);

while($row = mysqli_fetch_assoc($result)){
    $format = "
    <div style='display : flex; align-items : center; justify-content : center;><div style='
    height: 400px;
    display: flex;
    flex-direction: column;
    gap: 20px;
    border : none;'>
        <div style='display : flex;
        align-items: center;
        width: 395px;
        height: 400px;
        justify-content: center;
        margin-top : 24px;
        background-color: #FE3E3E;
        width: 400px;
        color : white;
        border-radius: 23px 14px 14px 23px;'>
        <h1 style='display : flex; align-items : center; justify-center : center; font-family: 'Red Hat Display', sans-serif;'>%s; &nbsp;</h1>\n
        <h1>X-Defunto</h1>
        <h1>%s</h1>
        </div>
    </div>
    </div>";
    printf($format, $row['situacao'], $row['preco_total']);
}
?>
