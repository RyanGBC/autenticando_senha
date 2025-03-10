<?php
    if(isset($_POST['email'])){

        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sqlcode = "SELECT * FROM clientes WHERE email = '$email' LIMIT 1";
        $sql_exec = $mysqli->query($sqlcode) or die($mysqli->error);

        $usuario = $sql_exec->fetch_assoc();

        if($usuario['email'] == $email && password_verify($senha, $usuario['senha'])){
            
            echo "Autenticado com sucesso!";
        } else {
            
            echo "Senha incorreta!";
        }
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
    <h1>LOGUE NO SITE DE PHP</h1>
    <form action="" method="POST">
        <input type="text" name="email" placeholder="email"><br><br>
        <input type="password" name="senha" placeholder="senha"><br><br>
        <button type="submit" name="login">Logar</button>
    </form>
</body>
</html>