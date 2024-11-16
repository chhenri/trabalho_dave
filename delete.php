<?php 
include 'conexao.php';
$id = $_GET["id_produto"];

if(isset($_GET['id_produto'])){
    $sqlDelete = mysqli_query($connectionBD, "DELETE FROM produto WHERE id_produto = {$id}")
    or die (mysqli_error($connectionBD));

    header('location: tela_vendedor.php');
}
?>