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
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1>Site de LOGIN em PHP</h1>
    Cadastrar Senha <br><br>
    <main id="caixacentral">
    <form action="" method="POST"> 
        <input type="text" name="email" placeholder="email" id="cxinputs"><br><br>
        <input type="text" name="senha" placeholder="senha" id="cxinputs"><br><br>
        <button type="submit" name="login" id="cxlogin">Cadastrar</button>
    </form><br><br>
    <a href="login.php">Já tenho uma conta</a>
    </main>
</body>
</html>