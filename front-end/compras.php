<?php
include_once("conexao.php");

$query = 'SELECT * FROM clientes INNER JOIN pedido ON clientes.id_cliente = pedido.id_user INNER JOIN item ON pedido.id_pedido = item.id_pedido INNER JOIN produto ON item.id_produto = produto.id_produto';
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

while($row = mysqli_fetch_assoc($result)){
    $format = "
    <div style='display : flex; align-items : center; justify-content : center;><div style='
    height: 400px;
    display: flex;
    flex-direction: row;
    gap: 20px;
    font-family: 'Red Hat Display', sans-serif;
    border : none;'>
        <div style='display : flex;
        align-items: center;
        width: 395px;
        height: 400px;
        justify-content: start;
        margin-top : 24px;
        background: rgb(0, 0, 0);
        width: 400px;
        color : white;
        border-radius: 23px 14px 14px 23px;'>
        <h1 style='display : flex; align-items : center; justify-center : center;'>%s; &nbsp;</h1>\n
        <h1>%s</h1>
        </div>
    </div>
    </div>";
    printf($format, $row['nome_produto'], $row['preco_unitario'] );
}
?>
