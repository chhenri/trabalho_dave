<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <div>

    <h1>Formuláio de Cadastro - Cliente</h1>
        <form action="save_cliente.php" method="post">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome" name="nome_cliente" id="">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="cpf" name="cpf_cliente" id="">
                </div>
                <div class="col">
                    <input type="date" class="form-control" placeholder="Data de Nascimento" name="nascimento_cliente" id="">
                </div>
                
            </div> <br>
                <div> 
                    <button type="submit" class="btn btn-outline-info">Salvar</button>
                </div>
           
        </form>

    </div>
</body>
</html>