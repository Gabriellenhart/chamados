<pre>
<?php
require_once "../funcoes/conexao_db.php";
//print_r($_POST);
$sql = $conexao->query("INSERT INTO chamados (tbl_cliente, assunto, descricao, localidade, data_abertura, prioridade, status)
VALUES ('".$_POST['tbl_cliente']."', '".$_POST['assunto']."', '".$_POST['descricao']."',
 '".$_POST['localidade']."', '".$_POST['data_abertura']."', '".$_POST['prioridade']."', '".$_POST['status']."')");
//print_r($conexao);
header("Location: ../pages/lista_chamados.php");
?>