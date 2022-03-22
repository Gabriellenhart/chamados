<?php
require_once "../funcoes/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
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
          <input type="text" placeholder="Pesquisar">
          <a href="cadastro_chamado.php"><button>Novo chamado</button></a>
        <table>
                <tr>
                    <th id="codigo">Código</th>
                    <th id="cliente">Cliente</th>
                    <th id="assunto">Assunto</th>
                    <th id="localidade">Localidade</th>
                    <th id="data">Data</th>
                    <th id="prioridade">Prioridade</th>
                    <th id="status">Status</th>
                    <th id="opcoes">Opções</th>
                    <th> Comentarios</th>
                </tr>
                <?php echo $listaMaenuChamados; ?>
            </table>
        </main>
        <footer>Versão: 1.0.0</footer>
</body>
</html>
