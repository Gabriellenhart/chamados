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
          <input type="text" placeholder="Pesquisar" name="campo" id="campo"></button>
          <a href="cadastro_cliente.php"><button>Novo Cliente</button></a>
            <table>
                <tr>
                    <th id="codigo">Código</th>
                    <th>Nome</th>
                    <th id="email">email</th>
                    <th>Telefone</th>
                    <th id="localidade">Localidade</th>
                    <th>Estado</th>
                    <th>Endereço</th>
                    <th id="opcoes">Opções</th>
                </tr>
                <tr>
                    implementar aqui a exibição dos resiltados pesquisados 
                </tr>
            </table>
        </main>
        <footer>Versão: 1.0.0</footer>
</body>
</html>
