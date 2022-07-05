<button onclick = "location.href='form.php'">Voltar</button>
</br>

<?php
include_once("conexao.php");

$preco_total_total = "27.89";
$forma_pagamento = "Cartão de crédito";
$id_user = "";
$gravar = "";


if(!empty($_POST['preco_total'])){
    $preco_total = $_POST['preco_total'];
    //echo "$preco_total </br>";
}

if(!empty($_POST['forma_pagamento'])){
    $forma_pagamento = $_POST['forma_pagamento'];
    //echo "$forma_pagamento </br>";
}

if(!empty($_POST['id_user'])){
    $id_user = $_POST['id_user'];
    //echo "$id_user </br>";
}

}

if($gravar == 'Gravar' && $id !=""){
    $res_insert = "INSERT INTO pedido (preco_total, forma_pagamento, id_user, status) VALUES ('$preco_total', '$forma_pagamento', '$id_user', "Em Produção")";
    $resposta_insert = mysqli_query($conn, $res_insert);