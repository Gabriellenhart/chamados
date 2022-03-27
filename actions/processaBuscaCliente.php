<?php
include ("../funcoes/conexao_db.php");

$campo="%".$_POST['campo']."%";

$sql=$conexao->prepare("SELECT id_cliente, nome_cliente, email, telefone, nome_cidade, estado, endereco from clientes
   INNER JOIN cidades on clientes.tbl_cidade = cidades.id_cidade where nome_cliente like ?");
$sql->bind_param("s",$campo);
$sql->execute();
$sql->bind_result($id,$nome_cliente,$email,$telefone,$nome_cidade,$estado,$endereco);

echo "
    <table>
        <thead>
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
        </thead>
        <tbody>
        ";

        while($sql->fetch()){

        echo "
        <tr>
            <td>$id</td>
            <td>$nome_cliente</td>
            <td>$email</td>
            <td>$telefone</td>
            <td>$nome_cidade</td>;
            <td>$estado</td>
            <td>$endereco</td>
            <td>
            <a href='editar_cliente.php?id_cliente=". $id ."'><button>Edita</button></a>
              <a href='apaga_cliente.php?id_cliente=". $id ."'><button>Excluir</button></a>
            </td>
        </tr>
        ";
        }

        echo "
        </tbody>
    </table>
";
?>
