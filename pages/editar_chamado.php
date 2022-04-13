<?php
include "../funcoes/conexao_db.php";
include "../funcoes/functions.php";



$result = $conexao->query("SELECT * FROM chamados inner join clientes on chamados.tbl_cliente = clientes.id_cliente
inner join cidades on chamados.localidade = cidades.id_cidade WHERE id_chamado =".$_GET['id_chamado']);
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
    <script src="../funcoes/buscacliente.js"></script>
    <script src="../funcoes/busca_cidade.js"></script>
    <title>Editar Chamado</title>
</head>
<body>
      <div class="container">
          <nav>
              <ul>
                  <li><a href="../index.php">Dashboard</a></li>
                  <li><a href="../pages/lista_chamados.php">Chamados</a></li>
                  <li><a href="../pages/lista_clientes.php">Clientes</a></li>
                  <li id="logout"><a href="../pages/logout.php">Logout</a></li>
              </ul>
          </nav>
        <form class="form_principal" action="./atualiza_chamado.php" method="post">

                <div>
                    <input type="hidden" name="id_chamado" value="<?php echo $dados['id_chamado']; ?>">
                </div>
                <div class="form_secundario">
                    <label for="">Cliente</label>
                    <input id="pesquisa_cliente" type="text" value="<?php echo $dados['nome_cliente']; ?>" name="cliente">
                </div>
                <div class="form_secundario">
                    <label for="">Localidade</label>
                    <input id="pesquisa_cidade" type="text" value="<?php echo $dados['nome_cidade']; ?>" name="localidade">
                </div>
                <div class="form_secundario">
                    <label for="">Data de abertura</label>
                    <input type="date" value="<?php echo $dados['data_abertura']; ?>" name="data_abertura">
                </div>
                <div class="form_secundario">
                    <label for="">Prioridade</label>
                    <select value="<?php echo $dados['prioridade']; ?>" name="prioridade" id="">
                        <option value="ALTA">Alta</option>
                        <option value="MEDIA">Media</option>
                        <option value="BAIXA">Baixa</option>
                    </select>
                </div>
                <div class="form_secundario">
                    <label for="">Status</label>
                    <select value="<?php echo $dados['status']; ?>" name="status" id="">
                        <option value="PENDENTE">Pendente</option>
                        <option value="RESOLVENDO">Resolvendo</option>
                        <option value="PAUSADO">Pausado</option>
                        <option value="RESOLVIDO">Resolvido</option>
                    </select>
                </div>
                <div class="form_secundario">
                    <label for="">Assunto</label>
                    <input type="text" value="<?php echo $dados['assunto']; ?>" name="assunto" id="">
                </div>
                <div class="form_secundario textarea">
                    <label for="">Descricao</label>
                    <input value="<?php echo $dados['descricao']; ?>" name="descricao"></input>
                </div>
                <div>
                <a><button type="submit">Atualizar</button></a>
                    <button><a href="index.php"></a>Cancelar</button>
                </div>
            </form>
        <footer>Versão: 1.0.0</footer>
</body>
</html>
