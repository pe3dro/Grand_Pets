<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo/login.css" />
    
    <title>Grand Pets</title>
    
</head>
<body>
    <div id="login-container">
    <h1>LOGIN</h1>
        <form action="percorrer.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" autocomplete="off" required>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" required>
            <a href="#" id="forgot-pass">Esqueçeu a senha?</a>
            <input type="submit" value="login" onclick="log(); return false">
           
            <a href="index.html">voltar</a>
        </form>
        <a href="deslog.php">Deslogar</a>
        <div id="register-container">
            <p>Ainda não tem uma conta?</p>
            <a href="menu/cadastro.html">Registrar</a>

       
        </div>
    </div>
    <script>
       function log()
    {
        alert("Você está logado.")
        window.location = "index.html";
    }
  </script>

</body>
</html>