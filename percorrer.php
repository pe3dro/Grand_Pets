<?php 
 include_once('conexao.php');
 session_start();
 
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = 'SELECT email,senha FROM cliente';

    $consulta = mysqli_query($conn, $sql);

    $login = false;

    foreach($consulta as $key => $valor){
        if($valor['email'] == $email && $valor['senha']==$senha){
            $login = true;
    }
    if($login == true){
        $sql ="SELECT * FROM cliente where email= '$email'";
            
                $consulta = mysqli_query($conn, $sql);
                $list = mysqli_fetch_assoc($consulta);
                $_SESSION['id'] = $list['id'];
                $_SESSION['email'] = $list['Email'];
                $_SESSION['senha'] = $list['Senha'];
                $_SESSION['nome'] = $list['Nome'];
                $_SESSION['idade'] = $list['Idade'];
                $_SESSION['telefone'] = $list['Telefone'];
                $_SESSION['cpf'] = $list['Cpf'];
                $_SESSION['localidade'] = $list['Localidade'];

                echo "
                    <script>
                        alert('Login Realizado');
                        window.location = 'index.html';
                    </script>
                ";
    }else{
        echo "
            <script>
                alert('Login Incorreto');
                window.location = 'login.php';
            </script>
        ";
    }
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = 'SELECT email,senha FROM adm';

    $consulta = mysqli_query($conn, $sql);
     $login = false;

     foreach($consulta as $key => $valor){
        if($valor['email'] == $email && $valor['senha']==$senha){
            $login = true;
    }
    if($login == true){
        $sql ="SELECT * FROM adm where email= '$email'";
            
                $consulta = mysqli_query($conn, $sql);
                $list = mysqli_fetch_assoc($consulta);
                $_SESSION['id'] = $list['id'];
                $_SESSION['adm'] = $list['adm'];
                $_SESSION['email'] = $list['email'];
                $_SESSION ['senha'] = $list['senha'];


                if($adm == 0){
                    echo'Usuario administrador';
                }else{
                    echo'Usuario normal';                       
                }
                echo "
                <script>
                    alert('Login Realizado');
                    window.location = 'index.html';
                </script>
            ";
}else{
    echo "
        <script>
            alert('Login Incorreto');
            window.location = 'login.php';
        </script>
    ";
}


    }

}

?>