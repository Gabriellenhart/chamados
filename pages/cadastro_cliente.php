<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container_clientes">
        <nav>
            <ul>
                <li><a href="../index.php">Dashboard</a></li>
                <li><a href="lista_chamados.php">Chamados</a></li>
                <li><a href="cadastro_cliente.php">Clientes</a></li>
            </ul>
        </nav>
        <div class="title_clientes">
            <h3>Cadastro de cliente</h3>
        </div>
        <main class="main_clientes">
            <form class="container_form_cliente" action="../actions/cria_cliente.php" method="POST">
                <div  class="input_nome">
                    <label for="">Nome Cliente</label>
                    <input type="text" name="nome_cliente">
                </div>
                <div  class="input_nome">
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div  class="form_cliente">
                    <label for="">Telefone</label>
                    <input type="number" name="telefone">
                </div>
                <div  class="form_cliente">
                    <label for="">Cidade</label>
                    <input type="text" name="tbl_cidade">
                </div>
                <div  class="form_cliente">
                    <label for="">Endereço</label>
                    <input type="text" name="endereco">
                </div>
                <div>
                    <button type="submit">Salvar</button>
                    <a href="/pages/lista_clientes.php"><button>Cancelar</button></a>
                </div>
            </form>
        </main>
    <footer>Versão: 1.0.0</footer>
</body>
</html>
</body>
</html>