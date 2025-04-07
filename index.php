<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['email'])){
    include_once('conexao.php');

    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $resultado = $mysqli->query("INSERT INTO clientes(email,senha) VALUES('$email','$senha')");

    if ($resultado) {
        echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
    } else {
        echo "Erro: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <h1>Site de LOGIN em PHP</h1>
  <h2 class="text-center">Cadastre-se</h2>

  <form action="" method="POST">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="mb-3">
          <label for="email" class="form-label">Endereço de Email</label>
          <input type="email" name="email" class="form-control" id="email" required>
          <div id="emailHelp" class="form-text">Nós nunca compartilhamos seu email com terceiros</div>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" name="senha" class="form-control" id="senha" required>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Lembrar me</label>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="login.php" class="d-block mt-3 text-center">Já tenho uma conta</a>
      </div>
    </div>
  </form>
</body>
</html>

<style>
  h1 {
    text-align: center;
    margin-top: 0px;
    color: #007bff;
    background-color: #333;
    padding: 50px 0;
    margin-bottom: 150px;
    width: 100%;
    box-sizing: border-box;
  }
</style>
