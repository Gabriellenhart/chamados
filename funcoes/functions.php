<?php
require_once "conexao_db.php";

function pesquisa_cliente($conexao, $term){
	$query = "SELECT nome_cliente FROM clientes WHERE nome_cliente LIKE '%".$term."%' ORDER BY nome_cliente ASC";
	$result = mysqli_query($conexao, $query);
	$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
	return $data;
}

if (isset($_GET['term'])) {
	$getCliente = pesquisa_cliente($conexao, $_GET['term']);
	$clienteList = array();
	foreach($getCliente as $cliente){
		$clienteList[] = $cliente['nome_cliente'];
	}
	echo json_encode($clienteList);
}





//variável $listaChamados, que lista os chamados em uma tabela no arquivo index.php
$sql = $conexao->query("SELECT id_chamado, nome_cliente, assunto, nome_cidade, data_abertura, prioridade, status FROM chamados
INNER JOIN clientes ON chamados.tbl_cliente = clientes.id_cliente
INNER JOIN cidades ON clientes.tbl_cidade = cidades.id_cidade ");

$listaChamados = '';
while($dados = $sql->fetch_assoc()){
  $listaChamados .='<tr>
    <td>'.$dados['id_chamado'].'</td>
    <td>'.$dados['nome_cliente'].'</td>
    <td>'.$dados['assunto'].'</td>
    <td>'.$dados['nome_cidade'].'</td>
    <td>'.$dados['data_abertura'].'</td>
    <td>'.$dados['prioridade'].'</td>
    <td>'.$dados['status'].'</td>
    <td>
      <a href="./pages/editar_chamado.php?id_chamado='.$dados['id_chamado'].'"><button>Visualizar</button></a>
    </td>
  </tr>';
}


//variável $statusChamados, que lista a quantidade de cada tipo de chamdo no cabeçalho do arquivo index.php
$status = $conexao->query("SELECT COUNT(IF(STATUS = 'PENDENTE', 1, NULL)) 'PENDENTE', COUNT(IF(STATUS = 'RESOLVENDO', 1, NULL)) 'RESOLVENDO',
COUNT(IF(STATUS = 'PAUSADO', 1, NULL)) 'PAUSADO', COUNT(IF(STATUS = 'RESOLVIDO', 1, NULL)) 'RESOLVIDO' from chamados");

$statusChamados ='';
while($dados = $status->fetch_assoc()){
  $statusChamados .='
    <div id="card_red">PENDENTE '.$dados['PENDENTE'].'</div>
    <div id="card_orange">RESOLVENDO '.$dados['RESOLVENDO'].'</div>
    <div id="card_grey">PAUSADO '.$dados['PAUSADO'].'</div>
    <div id="card_green">RESOLVIDO '.$dados['RESOLVIDO'].'</div>';
}

//variavel $listaCliente, lista os clientes cadastrados no banco, no arquivo /pages/lista_clientes.php
$sql = $conexao->query("SELECT * from clientes INNER JOIN cidades on clientes.tbl_cidade = cidades.id_cidade");

$listaClientes ='';
while($dados = $sql->fetch_assoc()){
 $listaClientes .='<tr>
   <td class="td_codigo">'.$dados['id_cliente'].'</td>
   <td class="td_nome_cliente">'.$dados['nome_cliente'].'</td>
   <td class="td_email">'.$dados['email'].'</td>
   <td class="td_telefone">'.$dados['telefone'].'</td>
   <td class="td_nome_cidade">'.$dados['nome_cidade'].'</td>
   <td class="td_estado">'.$dados['estado'].'</td>
   <td class="td_endereco">'.$dados['endereco'].'</td>
   <td>
     <a href="editar_cliente.php?id_cliente='.$dados['id_cliente'].'"><button>Visualizar</button></a>
     <a href="apaga_cliente.php?id_cliente='.$dados['id_cliente'].'"><button>Excluir</button></a>
   </td>
 </tr>';
}


$sql = $conexao->query("SELECT id_chamado, nome_cliente, assunto, nome_cidade, data_abertura, prioridade, status FROM chamados
INNER JOIN clientes ON chamados.tbl_cliente = clientes.id_cliente
INNER JOIN cidades ON clientes.tbl_cidade = cidades.id_cidade ");

$listaMaenuChamados = '';
while($dados = $sql->fetch_assoc()){
  $listaMaenuChamados .='<tr>
    <td>'.$dados['id_chamado'].'</td>
    <td>'.$dados['nome_cliente'].'</td>
    <td>'.$dados['assunto'].'</td>
    <td>'.$dados['nome_cidade'].'</td>
    <td>'.$dados['data_abertura'].'</td>
    <td>'.$dados['prioridade'].'</td>
    <td>'.$dados['status'].'</td>
    <td>
      <a href="editar_chamado.php?id_chamado='.$dados['id_chamado'].'"><button>Editar</button></a>
      <a href="apaga_chamado.php?id_chamado='.$dados['id_chamado'].'"><button>Excluir</button></a>
    </td>
    <td>.</td>
  </tr>';
}


$sql = $conexao->query("SELECT COUNT(*) as totalChamados from chamados");
$totalChamados ='';
while($dados = $sql->fetch_assoc()){
  $totalChamados .='
  <td>Total de chamados no mês: '.$dados['totalChamados'].'</td>';
}


$sql = $conexao->query("SELECT * from clientes INNER JOIN cidades on clientes.tbl_cidade = cidades.id_cidade");

$listaClientes ='';
while($dados = $sql->fetch_assoc()){
 $listaClientes .='<tr>
   <td class="td_codigo">'.$dados['id_cliente'].'</td>
   <td class="td_nome_cliente">'.$dados['nome_cliente'].'</td>
   <td class="td_email">'.$dados['email'].'</td>
   <td class="td_telefone">'.$dados['telefone'].'</td>
   <td class="td_nome_cidade">'.$dados['nome_cidade'].'</td>
   <td class="td_estado">'.$dados['estado'].'</td>
   <td class="td_endereco">'.$dados['endereco'].'</td>
   <td>
     <a href="editar_cliente.php?id_cliente='.$dados['id_cliente'].'"><button>Editar</button></a>
     <a href="apaga_cliente.php?id_cliente='.$dados['id_cliente'].'"><button>Excluir</button></a>
   </td>
 </tr>';
}

function verificaSessao() {
  if($_SESSION['usuario_logado'] == ''){
    header('location:./pages/login.php');
  }
}

function usuarioLogado(){
  $user = $_SESSION['usuario_logado'];
}





?>
