<?php
require_once "../funcoes/conexao_db.php";
include "../funcoes/functions.php";

verificaSessao();

$result = $conexao->query ("SELECT * from clientes
INNER JOIN cidades on clientes.tbl_cidade = cidades.id_cidade WHERE id_cliente =".$_GET['id_cliente']);
$dados = $result->fetch_assoc();
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
    <script src="../funcoes/busca_cidade.js"></script>
    <title>Editar cliente</title>
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
        <form class="formulario" action="../actions/atualiza_cliente.php" method="post">
            <input type="hidden" name="id_cliente" value="<?php echo $dados['id_cliente']; ?>">
            <label for="">Nome Cliente</label>
            <input type="text" name="nome_cliente" value="<?php echo $dados['nome_cliente']; ?>">
            <label for="">Email</label>
            <input type="email" name="email" value="<?php echo $dados['email']; ?>">
            <label for="">Telefone</label>
            <input type="number" name="telefone" value="<?php echo $dados['telefone']; ?>">
            <label for="">Cidade</label>
            <input id="pesquisa_cidade" type="text" name="localidade" value="<?php echo $dados['nome_cidade']; ?>">
            <label for="">Endereço</label>
            <input type="text" name="endereco" value="<?php echo $dados['endereco']; ?>">
            <button type="submit">Salvar</button>
            <a href="../pages/lista_clientes.php"><button>Cancelar</button></a>
        </form>
        </main>
        <footer>Versão: 1.0.0</footer>
</body>
</html>
