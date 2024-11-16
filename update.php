<?php
      include 'conexao.php';

    if(isset($_GET['id_produto'])){
        $id = $_GET[ 'id_produto'];
        $sql = mysqli_query($connectionBD, "SELECT * FROM produto  WHERE id_produto = $id");
        $count = (is_array($sql)) ? count($sql) : 1;
        if($count){ 
            $n = mysqli_fetch_array($sql);
            $nome_produto = $n['nome_produto'];
            $tipo_produto = $n['tipo_produto'];
            $registro_produto = $n['registro_produto'];
            $quantidade = $n['quantidade_produto'];
        }
    }

    if(isset($_POST['atualizar'])){
        $id = $_GET["id_produto"];
        $nome_produto = $_POST["nome_produto"];
        $tipo_produto = $_POST["tipo_produto"];
        $registro_produto = $_POST["registro_produto"];
        $quantidade_produto = $_POST["quantidade_produto"];
        

        $queryUpdate = "UPDATE produto SET nome_produto = '$nome_produto', tipo_produto = '$tipo_produto', registro_produto = '$registro_produto', quantidade_produto = '$quantidade_produto' WHERE id_produto = $id";
        $consulta = mysqli_query($connectionBD, $queryUpdate);
        header('location: tela_vendedor.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Produto</title>
</head>
<body>
    <div>

    <h1>Formuláio de Atualização - Produto</h1>
        <form  method="post">
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
                    <button name="atualizar" type="submit" class="btn btn-outline-info">Salvar</button>
                </div>
           
        </form>

    </div>
</body>
</html>