<?php
require_once "conexao_db.php";

function pesquisa_cidade($conexao, $term){
	$query = "SELECT nome_cidade FROM cidades WHERE nome_cidade LIKE '%".$term."%' ORDER BY nome_cidade ASC";
	$result = mysqli_query($conexao, $query);
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	return $data;
}

if (isset($_GET['term'])) {
	$getCidade = pesquisa_cidade($conexao, $_GET['term']);
	$cidadeList = array();
	foreach($getCidade as $cidade){
		$cidadeList[] = $cidade['nome_cidade'];
	}
	echo json_encode($cidadeList);
}
?>
