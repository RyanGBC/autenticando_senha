<?php
    if(isset($_POST['email'])){

        include_once('conexao.php');

        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        $mysqli->query("INSERT INTO clientes(email,senha) VALUES('$email','$senha') ");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Site de LOGIN em PHP</h1>
    Cadastrar Senha <br><br>
    <form action="" method="POST"> 
        <input type="text" name="email" placeholder="email"><br><br>
        <input type="text" name="senha" placeholder="senha"><br><br>
        <button type="submit" name="login">Cadastrar</button>
    </form><br><br>
    <a href="login.php">Já tenho uma conta</a>
</body>
</html>