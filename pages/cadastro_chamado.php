<?php
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="../funcoes/buscacliente.js"></script>
    <script src="../funcoes/busca_cidade.js"></script>
    <title>Cadastro de chamado</title>
</head>
<body>
  <div class="container_cadastro_chamados">
      <nav>
          <ul>
              <li><a href="../index.php">Dashboard</a></li>
              <li><a href="../pages/lista_chamados.php">Chamados</a></li>
              <li><a href="../pages/lista_clientes.php">Clientes</a></li>
              <li id="logout"><a href="../pages/logout.php">Logout</a></li>
          </ul>
      </nav>
	  <main class="main_chamados">
            <form class="formulario" action="../actions/cria_chamado.php" method="POST">
                <label for="">Cliente</label>
                <input id="pesquisa_cliente" type="text" name="nome_cliente">
                <label for="">Localidade</label>
                <input id="pesquisa_cidade" type="text" name="localidade">
                <label for="">Data abertura</label>
                <input type="date" name="data_abertura">
                <label for="">Prioridade</label>
                <select id="" name="prioridade">
                    <option value="">ALTA</option>
                    <option value="">MÉDIA</option>
                    <option value="">BAIXA</option>
                </select>
                <label for="">Status</label>
                <select id="" name="status">
                    <option value="">ABERTO</option>
                    <option value="">RESOLVENDO</option>
                    <option value="">PAUSADO</option>
                    <option value="">RESOLVIDO</option>
                </select>
                <label for="">Assunto</label>
                <input type="text" name="assunto">
                <label for="">Descrição</label>
                <textarea id="" cols="30" rows="10" name="descricao"></textarea>
                <a><button type="submit">Salvar</button></a>
				<a href="/pages/lista_chamados.php"><button>Cancelar</button></a>
            </form>
        </main>
        <footer>Versão: 1.0.0</footer>
    <div>
</body>
</html>
