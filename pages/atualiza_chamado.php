<?php
require_once "../funcoes/conexao_db.php";
  print_r($_POST);

$sql = $conexao->query("UPDATE chamados SET
tbl_cliente = (SELECT id_cliente FROM clientes WHERE nome_cliente LIKE '".$_POST['cliente']."'),
localidade = (SELECT id_cidade FROM cidades WHERE nome_cidade LIKE '".$_POST['localidade']."'),
data_abertura = '".$_POST['data_abertura']."',
prioridade = '".$_POST['prioridade']."',
status = '".$_POST['status']."',
assunto = '".$_POST['assunto']."',
descricao = '".$_POST['descricao']."'
WHERE id_chamado = '".$_POST['id_chamado']."'");

header("Location: ../pages/lista_chamados.php");
?>
