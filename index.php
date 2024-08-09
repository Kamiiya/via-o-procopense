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
      <form method="POST">

        <h1>Entre na sua conta</h1>

        <div class="mb-3">
          <label for="floatingInput" class="form-label text-start">CPF:</label>
          <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Digite seu CPF">
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
</body>
</html>