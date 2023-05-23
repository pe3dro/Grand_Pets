<?php 
include_once('conexao.php');
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = 'SELECT email,senha FROM cliente';

    $consulta = mysqli_query($conn, $sql);

    $login = false;

    foreach($consulta as $key => $valor){
        if($valor['email'] == $email && $valor['senha']==$senha){
            $login = true;
                echo $login;
                
            

    
    }
    if($login == true){
        $sql ='SELECT * FROM cliente where email='.$email.'';
            
                $consulta = mysqli_query($conn, $sql);
                $list = mysaqli_fetch_assoc($consulta);
                $_SESSION['id'] = $list['id'];
                $_SESSION['email'] = $list['Email'];
                $_SESSION['senha'] = $list['Senha'];
                $_SESSION['nome'] = $list['Nome'];
                $_SESSION['idade'] = $list['Idade'];
                $_SESSION['telefone'] = $list['Telefone'];
                $_SESSION['cpf'] = $list['Cpf'];
                $_SESSION['localidade'] = $list['Localidade'];
        echo'
    <script>
    alert("Logado");
    window.location = "index.html";
    </script>
';
    }else{
        echo "não logado";
    }

}
}
?>