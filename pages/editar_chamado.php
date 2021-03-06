<?php
require_once "../funcoes/conexao_db.php";
$result = $conexao->query("SELECT * FROM chamados 
inner join cidades on chamados.localidade = cidades.id_cidade WHERE id_chamado =".$_GET['id_chamado']);
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
    <title>Editar Chamado</title>
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
        <form class="form_principal" action="../actions/atualiza_chamado.php" method="post">
                
                <div>
                    <input type="hidden" name="id_chamado" value="<?php echo $dados['id_chamado']; ?>">
                </div>
                <div class="form_secundario">
                    <label for="">Cliente</label>
                    <input type="text" value="<?php echo $dados['tbl_cliente']; ?>" name="cliente">
                </div>
                <div class="form_secundario">
                    <label for="">Localidade</label>
                    <input type="text" value="<?php echo $dados['localidade']; ?>" name="localidade">
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
                    <button><a href="./index.php"></a>Cancelar</button>
                </div>
            </form>
        <footer>Vers??o: 1.0.0</footer> 
</body>
</html>