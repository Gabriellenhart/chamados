<?php
   include ("../funcoes/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/style.css">
      <title>Lista de clientes</title>
   </head>
   <body>
      <div class="container_clientes">
      <nav>
         <ul>
            <li><a href="../index.php">Dashboard</a></li>
            <li><a href="lista_chamados.php">Chamados</a></li>
            <li><a href="lista_clientes.php">Clientes</a></li>
         </ul>
      </nav>
      <main class="main_clientes">
         <span>Lista de clientes</span>
         <form action="../action/processa_busca_cliente.php">
            <input type="text" placeholder="Pesquisar" name="campo" id="campo"></button>
         </form>
         <a href="cadastro_cliente.php"><button>Novo Cliente</button></a>
            <?php
               $sql=$conexao->prepare('SELECT id_cliente, nome_cliente, email, telefone, nome_cidade, estado, endereco from clientes INNER JOIN cidades on clientes.tbl_cidade = cidades.id_cidade');
               $sql->execute();
               $sql->bind_result($id,$nome_cliente,$email,$telefone,$nome_cidade,$estado,$endereco);
               //print_r($sql);
               echo "
               <table>
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
                 <a href='editar_cliente.php?id_cliente='$id'><button>Editar</button></a>
                 <a href='apaga_cliente.php?id_cliente='$id'><button>Excluir</button></a>
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
