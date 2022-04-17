<pre>
<?php
require_once "../funcoes/conexao_db.php";

if (mysqli_connect_errno()){
    echo "Erro ao conectar ao MySQL: " . mysqli_connect_errno();
  }
  if (!mysqli_query($conexao, "INSERT INTO clientes (nome_cliente, tbl_cidade, email, telefone, endereco) VALUES
   ('".$_POST['nome_cliente']."', (SELECT id_cidade FROM cidades WHERE nome_cidade like '".$_POST['tbl_cidade']."'), '".$_POST['email']."', '".$_POST['telefone']."', '".$_POST['endereco']."')"))
  {
      echo("Erro: ". mysqli_error($conexao));
  }
header("Location: ../pages/lista_clientes.php");
?>
