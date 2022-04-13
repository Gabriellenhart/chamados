<pre>
<?php
require_once "../funcoes/conexao_db.php";
 // print_r($_POST);

$sql = $conexao->query("UPDATE clientes SET
nome_cliente = '".$_POST['nome_cliente']."',
email = '".$_POST['email']."',
telefone = '".$_POST['telefone']."',
tbl_cidade = (SELECT id_cidade FROM cidades WHERE nome_cidade LIKE '".$_POST['localidade']."'),
endereco = '".$_POST['endereco']."'
WHERE id_cliente = '".$_POST['id_cliente']."'");

header("Location: ../pages/lista_clientes.php");
//print_r($conexao);
?>
