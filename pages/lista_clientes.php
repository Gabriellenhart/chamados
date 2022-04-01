<?php
  include "../funcoes/conexao_db.php";
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
      <script src="../funcoes/buscacliente.js"></script>


      <title>Lista de clientes</title>
   </head>
   <body>
      <div class="container_clientes">
      <nav>
         <ul>
            <li><a href="../index.php">Dashboard</a></li>
            <li><a href="lista_chamados.php">Chamados</a></li>
            <li><a href="lista_clientes.php">Clientes</a></li>
            <li id="logout"><a href="../pages/logout.php">Logout</a></li>
         </ul>
      </nav>
      <main class="main_clientes">
        <div class="title_bar">
          <span class="title_main">Lista de clientes</span>
          <form class="search" action="../actions/processaBuscaCliente.php">
             <input type="text" placeholder="Pesquisar" name="campo" id="campo"></button>
          </form>
          <a class="add_button" href="cadastro_cliente.php"><button>Novo Cliente</button></a>
        </div>
            <?php

               $sql=$conexao->prepare('SELECT id_cliente, nome_cliente, email, telefone, nome_cidade, estado, endereco from clientes
                  INNER JOIN cidades on clientes.tbl_cidade = cidades.id_cidade');
               $sql->execute();
               $sql->bind_result($id,$nome_cliente,$email,$telefone,$nome_cidade,$estado,$endereco);
               //print_r($sql);
               echo "
               <table id='resultado'>
                   <tr>
                       <th id='codigo'>Código</th>
                       <th>Nome</th>
                       <th id='email'>email</th>
                       <th>Telefone</th>
                       <th id='localidade'>Localidade</th>
                       <th>Estado</th>
                       <th>Endereço</th>
                       <th id='opcoes'>Opções</th>
                   </tr>
               ";
               while($sql->fetch()){
               echo "
               <tr>
               <td class='td_codigo'>$id</td>
               <td class='td_nome_cliente'>$nome_cliente</td>
               <td class='td_email'>$email</td>
               <td class='td_telefone'>$telefone</td>
               <td class='td_nome_cidade'>$nome_cidade</td>
               <td class='td_estado'>$estado</td>
               <td class='td_endereco'>$endereco</td>
               <td>
               <a href='editar_cliente.php?id_cliente=". $id ."'><button>Edita</button></a>
                 <a href='apaga_cliente.php?id_cliente=". $id ."'><button>Excluir</button></a>
               </td>
               </tr>";
               }
               echo "
               </table>";
                ?>
      </main>
      <footer>Versão: 1.0.0</footer>
    </div>
   </body>
</html>
