<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <div>

    <h1>Formuláio de Cadastro - Produto</h1>
        <form action="save_produto.php" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome" name="nome_produto" id="">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Tipo" name="tipo_produto" id="">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Registro" name="registro_produto" id="">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Quantidade" name="quantidade_produto" id="">
                </div>
            </div> <br>
                <div> 
                    <button type="submit" class="btn btn-outline-info">Salvar</button>
                </div>
           
        </form>

    </div>
</body>
</html>