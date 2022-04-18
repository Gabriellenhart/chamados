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
            <form class="formulario" action="../actions/cria_cliente.php" method="POST">
                <label for="">Nome</label>
                <input type="text" name="nome_cliente">
				<label for="">Email</label>
                <input type="mail" name="email">
                <label for="">Localidade</label>
                <input id="pesquisa_cidade" type="text" name="tbl_cidade">
                <label for="">Telefone</label>
                <input type="fone" name="telefone">
                <label for="">Endereço</label>
                <input type="text" name="endereco">
                <a><button type="submit">Salvar</button></a>
				<a href="/pages/lista_chamados.php"><button>Cancelar</button></a>
            </form>
        </main>
        <footer>Versão: 1.0.0</footer>
    <div>
</body>
</html>
