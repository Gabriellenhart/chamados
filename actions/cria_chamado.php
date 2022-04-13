<pre>
<?php
require_once "../funcoes/conexao_db.php";
print_r($_POST);
//$sql = $conexao->query("INSERT INTO chamados (tbl_cliente, assunto, descricao, localidade, data_abertura, prioridade, status)
//VALUES ((SELECT id_cliente FROM clientes WHERE nome_cliente like '".$_POST['tbl_cliente']."'), '".$_POST['assunto']."', '".$_POST['descricao']."',
 //(SELECT id_cidade FROM cidades WHERE nome_cidade LIKE '".$_POST['localidade']."'), '".$_POST['data_abertura']."', '".$_POST['prioridade']."', '".$_POST['status']."')");

if (mysqli_connect_errno()){
  echo "Erro ao conectar ao MySQL: " . mysqli_connect_errno();
}
if (!mysqli_query($conexao, "INSERT INTO chamados (tbl_cliente, assunto, descricao, localidade, data_abertura, prioridade, status) VALUES
((SELECT id_cliente FROM clientes WHERE nome_cliente like '".$_POST['nome_cliente']."'),
 '".$_POST['assunto']."', '".$_POST['descricao']."', (SELECT id_cidade FROM cidades WHERE nome_cidade like '".$_POST['localidade']."'),
  '".$_POST['data_abertura']."', '".$_POST['prioridade']."', '".$_POST['status']."')")){
  echo("Erro: ". mysqli_error($conexao));
}
//$sql = $conexao->query("INSERT INTO chamados (tbl_cliente, assunto, descricao, localidade, data_abertura, prioridade, status) VALUES
//((SELECT id_cliente FROM clientes WHERE nome_cliente like '".$_POST['nome_cliente']."'), '".$_POST['assunto']."', '".$_POST['descricao']."', (SELECT id_cidade FROM cidades WHERE nome_cidade LIKE '".$_POST['localidade']."'), '".$_POST['data_abertura']."', '".$_POST['prioridade']."', '".$_POST['status']."')");

//print_r($conexao);
//mysqli_close($conexao);
header("Location: ../pages/lista_chamados.php");
?>
