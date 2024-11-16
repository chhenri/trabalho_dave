<?php
 
include 'conexao.php';
$nome_cliente = $_POST['nome_cliente'];
$cpf_cliente = $_POST['cpf_cliente'];
$nascimento_cliente = $_POST['nascimento_cliente'];
$sql = mysqli_query($connectionBD, "INSERT INTO cliente(nome_cliente, cpf_cliente, nascimento_cliente) VALUES ('$nome_cliente', '$cpf_cliente','$nascimento_cliente')");

if ($sql){
    header('Location: tela_cliente.php');

}


?>