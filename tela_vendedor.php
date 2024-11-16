<?php
include 'read_produto.php';
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela vendedor</title>
</head>
<body>
    <header>  
      <div>
            <a href="index.php">Home</a>
        </div>
        <div>
            <h2>Tela do vendedor</h2>
        </div>
        <div>
            <a href=""></a>
        </div>
        <div>
            <a href="cadastrar_produto.php">Cadastrar produto</a>
        </div>

    </header>
    <main>
    <?php
            while ($produto = mysqli_fetch_assoc($listarSQLp)) {
            ?>
<div>
<div class="card w-96 p-8 bg-zinc-300 flex flex-col gap-4">
            <div>
                <h3 class="text-3xl"><?php echo $produto['nome_produto'] ?></h3>
            </div>
            <div>
                <p>
                <?php echo $produto['tipo_produto'] ?>   
            </p>
            </div>
            <div>
                <p class="font-bold"><?php echo $produto['registro_produto'] ?></p>
            </div>
            <div>
                <p class="font-bold"><?php echo $produto['quantidade_produto'] ?></p>
            </div>
            <div>
            <a href="delete.php?id_produto=<?php echo $produto['id_produto']; ?>">Excluir</a>
            <a href="update.php?id_produto=<?php echo $produto['id_produto']; ?>">Atualizar</a>
            </div>
        </div>
</div>
<?php
            }
            ?>
    </main>
</body>
</html>