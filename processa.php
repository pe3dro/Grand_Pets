<?php
include_once 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['password'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$localidade = $_POST['localidade'];



if($_POST['cadastrar']){
    $sql = "INSERT INTO cliente VALUES ('','$email','$senha','$nome','$idade','$telefone','$cpf','$localidade')";

    if(mysqli_query($conn, $sql)){
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>