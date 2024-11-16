<?php
include 'read_produto.php';
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <header>
    <div>
        <h2>Loja da Dave</h2>
</div>
   <div>
    <form action="cadastrar_cliente.php">
        <button type="submit">Cadastrar cliente</button>
    </form>
</div>
<div>
    <form action="cadastrar_vendedor.php">
        <button type="submit">Login vendedor</button>
    </form>
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
            
        </div>
</div>
<?php
            }
            ?>
</main>
</body>
</html>