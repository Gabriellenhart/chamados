<?php
  include  "../funcoes/conexao_db.php";
  include "../funcoes/functions.php";

  verificaSessao();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../funcoes/buscachamado.js"></script>
    <title>Lista de chamados</title>
</head>
<body>
<div class="container_chamados">
        <nav>
            <ul>
                <li><a href="../index.php">Dashboard</a></li>
                <li><a href="lista_chamados.php">Chamados</a></li>
                <li><a href="lista_clientes.php">Clientes</a></li>
                <li id="logout"><a href="../pages/logout.php">Logout</a></li>
            </ul>
        </nav>
        <main class="main_chamados">
          <div class="title_bar">
            <span class="title_main">Lista de chamados</span>
            <form class="search" action="../actions/processaBuscaCliente.php">
               <input type="text" placeholder="Pesquisar" name="campo" id="campo"></button>
            </form>
            <a class="add_button" href="cadastro_chamado.php"><button>Novo Chamado</button></a>
          </div>
              <?php
              //include ("../funcoes/conexao_db.php");
              $sql=$conexao->query("SELECT id_chamado, nome_cliente, assunto, nome_cidade, data_abertura, prioridade, status FROM chamados
                INNER JOIN clientes ON chamados.tbl_cliente = clientes.id_cliente INNER JOIN cidades ON chamados.localidade = cidades.id_cidade");
              $listaChamados = "";
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
                  <a href="editar_chamado.php?id_chamado=' .$dados['id_chamado']. '"><button>Edita</button></a>
                  <a href="apaga_chamado.php?id_chamado=' .$dados['id_chamado']. '"><button>Excluir</button></a>
                  </td>';
                }?>

              <table id='resultado'>
                  <tr>
                      <th id='codigo'>Código</th>
                      <th id='cliente'>Cliente</th>
                      <th id='assunto'>Assunto</th>
                      <th id='localidade'>Localidade</th>
                      <th id='data'>Data</th>
                      <th id='prioridade'>Prioridade</th>
                      <th id='status'>Status</th>
                      <th id='opcoes'>Opções</th>
                      <th>Comentarios</th>
                  </tr>
                  <tr>
                    <?php echo $listaChamados; ?>
                  </tr>

              </table>

        </main>
        <footer>Versão: 1.0.0</footer>
</body>
</html>
