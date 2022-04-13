<pre>
<?php
require_once "../funcoes/conexao_db.php";

//print_r($_POST);
$sql = $conexao->query("INSERT INTO clientes (nome_cliente, email, telefone, tbl_cidade, endereco)
VALUES ('".$_POST['nome_cliente']."', '".$_POST['email']."', '".$_POST['telefone']."',
 (SELECT id_cidade FROM cidades WHERE nome_cidade like '".$_POST['localidade']."'), '".$_POST['endereco']."')");
//print_r($conexao);
header("Location: ../pages/lista_clientes.php");
?>
