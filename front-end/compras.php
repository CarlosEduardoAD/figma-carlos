<?php
include_once("conexao.php");

$query = 'SELECT * FROM clientes INNER JOIN pedido ON clientes.id_cliente = pedido.id_user INNER JOIN item ON pedido.id_pedido = item.id_pedido INNER JOIN produto ON item.id_produto = produto.id_produto';
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$id_cliente = $row['id_cliente'];
$nome_cliente = $row['nome_usuario'];
$id_pedido = $row['id_pedido'];
$preco_total = $row['preco_total'];
$forma_pagamento = $row['forma_pagamento'];
$situacao = $row['situacao'];
$id_produto = $row['id_produto'];
$nome_produto = $row['nome_produto'];
$preco_produto = $row['preco_produto'];

echo "<h1>$nome_cliente</h1>";
echo "<h1>$id_pedido</h1>";
echo "<h1>$preco_total</h1>";
echo "<h1>$forma_pagamento</h1>";
echo "<h1>$situacao</h1>";
echo "<h1>$id_produto</h1>";
echo "<h1>$nome_produto</h1>";
echo "<h1>$preco_produto</h1>";





?>
