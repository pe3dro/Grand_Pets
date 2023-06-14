<?php
include_once('conexao.php');
session_start();

$comentario = $_POST ['comentarios'];
$id_usuario = $_POST['id_usuario'];     
$sql = "INSERT INTO comentarios VALUES ('','$id_usuario','$comentarios')";

$consulta = mysqli_query($conn, $sql);
$cometarios = false;

foreach($consulta as $key => $valor){
    if($valor['comentarios'] == $comentario && $valor['id_usuario'] == $id_usuario){
        $comentarios = true;
    }
    if($comentario == true){
        $sql = "SELECT * FROM comentarios WHERE comentarios = '$comentarios'";

           $consulta = mysqli_query($conn, $sql);
           $list = mysqli_fetch_assoc($consulta);
           $_SESSION['id'] = $list['id'];
           $_SESSION['id_usuario'] = $list['id_usuario'];
           $_SESSION['comentarios'] = $list['comentarios'];

           
    }
}



echo'
    <script>
    alert("Comentario enviado");
    window.location = "index.html";
    </script>
';

?>