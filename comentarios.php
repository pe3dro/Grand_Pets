<?php
include_once('conexao.php');
session_start();

$comentario = $_POST ['comentario'];
$id_usuario = $_POST['id_usuario'];     
$sql = "INSERT INTO comentarios VALUES ('','$id_usuario','$comentario')";

$sql = "DELETE FROM `comentarios` WHERE 1 ";


$consulta = mysqli_query($conn, $sql);



echo'
    <script>
    alert("Comentario enviado");
    window.location = "index.html";
    </script>
';

?>