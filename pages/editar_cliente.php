<?php
require_once "../funcoes/conexao_db.php";
$result = $conexao->query("SELECT * from clientes 
INNER JOIN cidades on clientes.tbl_cidade = cidades.id_cidade WHERE id_cliente =".$_GET['id_cliente']);
$dados = $result->fetch_assoc();
//print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Editar cliente</title>
</head>
<body>
<div class="container">
        <nav>
            <ul>
                <li><a href="../index.php">Dashboard</a></li>
                <li><a href="lista_chamados.php">Chamados</a></li>
                <li><a href="cadastro_cliente.php">Clientes</a></li>
            </ul>
        </nav>    
        <form action="../actions/atualiza_cliente.php" method="post">
        <div>
            <input type="hidden" name="id_cliente" value="<?php echo $dados['id_cliente']; ?>">
        </div>
        <div>
            <label for="">Nome Cliente</label>
            <input type="text" name="nome_cliente" value="<?php echo $dados['nome_cliente']; ?>">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" value="<?php echo $dados['email']; ?>">
        </div>
        <div>
            <label for="">Telefone</label>
            <input type="number" name="telefone" value="<?php echo $dados['telefone']; ?>">
        </div>
        <div>
            <label for="">Cidade</label>
            <input type="number" name="tbl_cidade" value="<?php echo $dados['tbl_cidade']; ?>">
        </div>
        <div>
            <label for="">Endereço</label>
            <input type="text" name="endereco" value="<?php echo $dados['endereco']; ?>">
        </div>
        <div>
            <button type="submit">Salvar</button>
        </div>
    </form>
        <a href="../pages/lista_clientes.php"><button>Cancelar</button></a>
        <footer>Versão: 1.0.0</footer>
</body>
</html>