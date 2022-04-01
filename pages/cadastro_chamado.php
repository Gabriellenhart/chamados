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
    <title>Cadastro de chamado</title>
</head>
<body>
<div class="container_chamados">
  <div class="container">
      <nav>
          <ul>
              <li><a href="../index.php">Dashboard</a></li>
              <li><a href="../pages/lista_chamados.php">Chamados</a></li>
              <li><a href="../pages/lista_clientes.php">Clientes</a></li>
              <li id="logout"><a href="../pages/logout.php">Logout</a></li>
          </ul>
      </nav>
    <form action="../actions/cria_chamado.php" method="POST">
    <div class="">
                    <label for="">Cliente</label>
                    <input type="number" name="tbl_cliente" id="">
                </div>
                <div class="">
                    <label for="">Localidade</label>
                    <input type="text" name="localidade" id="">
                </div>
                <div class="">
                    <label for="">Data de abertura</label>
                    <input type="date" name="data_abertura" id="">
                </div>
                <div class="">
                    <label for="">Prioridade</label>
                    <select name="prioridade" id="">
                        <option value="ALTA">Alta</option>
                        <option value="MEDIA">Media</option>
                        <option value="BAIXA">Baixxa</option>
                    </select>
                </div>
                <div class="">
                    <label for="">Status</label>
                    <select name="status" id="">
                        <option value="PENDENTE">Pendente</option>
                        <option value="RESOLVENDO">Resolvendo</option>
                        <option value="PAUSADO">Pausado</option>
                        <option value="RESOLVENDO">Resolvido</option>
                    </select>
                </div>
                <div class="">
                    <label for="">Assunto</label>
                    <input type="text" name="assunto" id="">
                </div>
                <div class=" textarea">
                    <label for="">Descricao</label>
                    <textarea name="descricao"></textarea>
                </div>
        <button type="submit">Salvar</button>
        <a href="/pages/lista_chamados.php"><button>Cancelar</button></a>
    </form>
    <footer>Versão: 1.0.0</footer>
</body>
</html>
