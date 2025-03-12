<?php
    if(isset($_POST['email'])){

        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sqlcode = "SELECT * FROM clientes WHERE email = '$email' LIMIT 1";
        $sql_exec = $mysqli->query($sqlcode) or die($mysqli->error);

        $usuario = $sql_exec->fetch_assoc();

        if($usuario['email'] == $email && password_verify($senha, $usuario['senha'])) {
            echo "Autenticado com sucesso! ";
        } else {
            echo "Senha incorreta!";
        }
        } else {
            
            echo "Senha incorreta!";
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
        <input type="text" name="email" placeholder="email" id="cxinputs"><br><br>
        <input type="password" name="senha" placeholder="senha" id="cxinputs"><br><br>
        <button type="submit" name="login" id="cxlogin">Logar</button>
    </form>
        <!-- From Uiverse.io by satyamchaudharydev --> 
    <button class="button" data-text="Awesome">
    <span class="actual-text">&nbsp;THE BEST OF THE WORLD &nbsp;</span>
    <span aria-hidden="true" class="hover-text">&nbsp;THE BEST OF THE WORLD &nbsp;</span>
    </button>
</body>
</html>

<style>
    /* From Uiverse.io by satyamchaudharydev */ 
/* === removing default button style ===*/
.button {
  margin: 0;
  height: auto;
  background: transparent;
  padding: 0;
  border: none;
  cursor: pointer;
}

/* button styling */
.button {
  --border-right: 6px;
  --text-stroke-color: rgba(255,255,255,0.6);
  --animation-color:rgb(55, 215, 255);
  --fs-size: 2em;
  letter-spacing: 3px;
  text-decoration: none;
  font-size: var(--fs-size);
  font-family: "Arial";
  position: relative;
  text-transform: uppercase;
  color: transparent;
  -webkit-text-stroke: 1px var(--text-stroke-color);
}
/* this is the text, when you hover on button */
.hover-text {
  position: absolute;
  box-sizing: border-box;
  content: attr(data-text);
  color: var(--animation-color);
  width: 0%;
  inset: 0;
  border-right: var(--border-right) solid var(--animation-color);
  overflow: hidden;
  transition: 0.5s;
  -webkit-text-stroke: 1px var(--animation-color);
}
/* hover */
.button:hover .hover-text {
  width: 100%;
  filter: drop-shadow(0 0 23px var(--animation-color))
}
</style>