<?php 
require_once "./funcoes/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="">Dashboard</a></li>
                <li><a href="./pages/lista_chamados.php">Chamados</a></li>
                <li><a href="./pages/lista_clientes.php">Clientes</a></li>
            </ul>
        </nav>
        <?php echo $statusChamados ?>
        <main>
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
                </tr>
                <?php echo $listaChamados; ?>
            </table>
        </main>
        <div id="content1">
            <table>
                <tr>
                    <th>Resumo dos chamados</th>
                </tr>
                <tr>
                    <?php echo $totalChamados ?>
                </tr>
            </table>
        </div>
        <div id="content2">
        <table>
                <tr>
                    <th>Gráfico</th>
                </tr>
            </table>
        </div>
        <footer>Versão: 1.0.0</footer>
    </div>
</body>
</html>