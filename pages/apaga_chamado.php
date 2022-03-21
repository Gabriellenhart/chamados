<?php

require_once "../funcoes/conexao_db.php";

$conexao->query("DELETE FROM chamados WHERE id_chamado = ".$_GET['id_chamado']);


header("Location: ../pages/lista_chamados.php");
?>