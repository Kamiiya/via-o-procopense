<?php
session_start();
if($_SESSION['autenticado'] == 'LOGADO'){
  header('location:areadocliente.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Página de Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>

<body class="text-center">
<div class="container">
  <div class="row justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-6">

      <img class="img" src="logo.png" alt="" width="380" height="380">

    </div>

    <div class="col-md-6">

      <form method="POST" action="valida_login_kamiya.php"> 

        <h1>Entre na sua conta</h1>

  <?php

    if($_SESSION['autenticado'] == "NAO"){
      echo '<div class="alert alert-danger" role="alert">
      CPF ou senha incorretos
    </div>';
    $_SESSION['autenticado'] = "ZERO";
    }
    
    if($_SESSION['autenticado'] == "SIM"){
      echo '<div class="alert alert-success" role="alert">
      Usuário autenticado com sucesso! aguarde alguns instantes...
    </div>';
    $_SESSION['autenticado'] = "LOGADO";
    header("Refresh: 5; url=areadocliente.php");
    }
  ?>
        <div class="mb-3">
          <label for="floatingInput" class="form-label text-start">CPF:</label>
          <input type="text" name="cpf" class="form-control" id="floatingInput" placeholder="Digite seu CPF">
        </div>

        <div class="mb-3">
          <label for="floatingPassword" class="form-label text-start">Senha:</label>
          <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Digite sua Senha">
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit" value="login" name="login">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023–2024</p>
      </form>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>

