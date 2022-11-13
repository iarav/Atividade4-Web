<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista cadastros</title>
</head>
<body>
    <header>
        <div class="title">
            <h1>Lista de todos os cadastros:</h1>
        </div>
    </header>
    <div class="conteudo">
        <nav>
            <a href="./index.html" class="outros nav-texto">Cadastro</a>
            <a href="#" class="atual nav-texto">Ver todos os cadastros</a>
        </nav>
        <div id="lista-main">
            <div id="lista">
                <div id="cabecalho">
                    <h3 class="id">ID</h3>
                    <h3 class="nome">Nome</h3>
                    <h3 class="ra">RA</h3>
                    <h3 class="sexo">Sexo</h3>
                    <h3 class="idade">Idade</h3>
                    <h3 class="end">Endereço</h3>
                    <h3 class="telefone">Telefone</h3>
                    <h3 class="email">Email</h3>
                </div>
                <div id="itens-lista">
                    <?php
                        include('lista.php');
                    ?>
                </div>
            </div>   
        </div>
    </div>
</body>
</html>