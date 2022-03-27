<?php
include ("../funcoes/conexao_db.php");

$campo="%".$_POST['campo']."%";

$sql=$conexao->prepare("SELECT id_chamado, nome_cliente, assunto, nome_cidade, data_abertura, prioridade, status FROM chamados
INNER JOIN clientes ON chamados.tbl_cliente = clientes.id_cliente
INNER JOIN cidades ON clientes.tbl_cidade = cidades.id_cidade where nome_cliente like ?");
$sql->bind_param("s",$campo);
$sql->execute();
$sql->bind_result($id,$nome_cliente,$assunto,$nome_cidade,$data_abertura,$prioridade,$status);

echo "
    <table>
        <thead>
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
        </thead>
        ";

        while($sql->fetch()){

        echo "
        <tbody>
        <tr>
            <td>$id</td>
            <td>$nome_cliente</td>
            <td>$assunto</td>
            <td>$nome_cidade</td>
            <td>$data_abertura</td>
            <td>$prioridade</td>
            <td>$status</td>
            <td>
            <a href='editar_chamado.php?id_cliente=". $id ."'><button>Edita</button></a>
              <a href='apaga_chamado.php?id_cliente=". $id ."'><button>Excluir</button></a>
            </td>
        </tr>";
        }

        echo "
        </tbody>
    </table>
";
?>
