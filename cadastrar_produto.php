<?php


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Cadastrar Produto</h2>
        <form action="processar_cadastro_produto.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" class="form-control" id="preco" name="preco" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem do Produto</label>
                <input type="file" class="form-control-file" id="imagem" name="imagem" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>
