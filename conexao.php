<?php
$usuario = "root";
$bd = "tb_grandpets";
$senha = "";
$host = "localhost";

$conn = new mysqli($host, $usuario, $senha, $bd);
if($conn->connect_errno){
    die("Falha na conexão: (" . $conn->connect_errno . ")" . $conn->connect_errno);
}else{

}

?>