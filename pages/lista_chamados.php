<?php
  include  ("../funcoes/conexao_db.php");
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
            </ul>
        </nav>
        <main class="main_chamados">
          <span>Lista de chamados</span>
          <form action="../actions/processaBuscaChamado.php">
             <input type="text" placeholder="Pesquisar" name="campo" id="campo"></button>
          </form>
          <a href="cadastro_chamado.php"><button>Novo chamado</button></a>

              <?php
              //include ("../funcoes/conexao_db.php");

              $sql=$conexao->prepare("SELECT id_chamado, nome_cliente, assunto, nome_cidade, data_abertura, prioridade, status FROM chamados
              INNER JOIN clientes ON chamados.tbl_cliente = clientes.id_cliente
              INNER JOIN cidades ON clientes.tbl_cidade = cidades.id_cidade");
              $sql->execute();
              $sql->bind_result($id_chamado,$nome_cliente,$assunto,$nome_cidade,$data_abertura,$prioridade,$status);


              echo "
              <table id='resultado'>
                  <tr>
                      <th id='codigo'>Código</th>
                      <th id='cliente'>Cliente</th>
                      <th id='assunto'>Assunto</th>
                      <th id='localidade'>Localidade</th>
                      <th id='data'>Data</th>
                      <th id='prioridade'>Prioridade</th>
                      <th id='status'>Status</th>
                      <th id=opcoes'>Opções</th>
                      <th>Comentarios</th>
                  </tr>";

              while($sql->fetch()){
              echo "
              <tr>
                  <td>$id_chamado</td>
                  <td>$nome_cliente</td>
                  <td>$assunto</td>
                  <td>$nome_cidade</td>
                  <td>$data_abertura</td>
                  <td>$prioridade</td>
                  <td>$status</td>
                  <td>
                  <a href='editar_chamado.php?id_chamado=". $id_chamado ."'><button>Edita</button></a>
                    <a href='apaga_chamado.php?id_chamado=". $id_chamado ."'><button>Excluir</button></a>
                  </td>
                  <td>.</td>
              </tr>";
              }
              echo "

              </table>";
              ?>
        </main>
        <footer>Versão: 1.0.0</footer>
</body>
</html>
