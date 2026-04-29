<?php

$email_correto = "admin@email.com";
$senha_correta = "1234";

if (isset($_POST['email']) && isset($_POST['senha'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == $email_correto && $senha == $senha_correta) {
        echo "Login realizado com sucesso!";
    } else {
        echo "Email ou senha incorretos!";
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document ico</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	
<div class="login-box">
    <h2>Login</h2>

    <form action="login.php" method="POST">
        
        <div class="form-box">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>

            <input type="submit" value="Entrar">
        </div>

    </form>
</div>

</body>
</html>