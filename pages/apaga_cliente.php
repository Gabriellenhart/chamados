<?php

require_once "../funcoes/conexao_db.php";

$conexao->query("DELETE FROM clientes WHERE id_cliente = ".$_GET['id_cliente']);


header("Location: ../pages/lista_clientes.php");
?>
