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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Site de LOGIN em PHP</h1>
    </h2>Cadastre-se</h2>
    <form action="" method="POST">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
      <form action="" method="POST">
      <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Nos nunca compartilhamos seu email com terceiros</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Lembrar me</label>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
      </form>
    </div>
  </div>
</div>
    <a href="login.php">Já tenho uma conta</a>
    </main>
</body>
</html>

<style type="text/css" media="screen">
    a {
        text-align: center;
        display: block;
        margin-top: 10px;
    }
    h1 {
    text-align: center;
    margin-top: 0px;
    color: #007bff;
    background-color: #333;
    padding: 50px 0;
    margin-bottom: 150px;
    width: 100%;
    margin-left: 0;
    margin-right: 0;
    box-sizing: border-box; 
}
</style>