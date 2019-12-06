<?php 

include "views/includes/header.php"; 


if(isset($_SESSION['user'])){
  header('Location:/desafio-fakeinsta/posts');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastre-se</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="views/css/styles.css">
</head>
<body>

<main class="container">

  <form action="/desafio-fakeinsta/register-user" method="post" class="form-container">

    <div class="col-10">

      <h3>Cadastre-se</h3>

      <div class="form-group">

        <div class="form-row">

          <div class="col-12 col-sm-6">
            <input name="firstName" type="text" class="form-control" placeholder="Nome" required>
          </div>

          <div class="col-12 col-sm-6">
            <input name="lastName" type="text" class="form-control" placeholder="Sobrenome" required>
          </div>

        </div>
        
      </div>

      <div class="form-group">
        <label for="userId">Usuário</label>
        <input name="username" type="text" class="form-control" id="userId" aria-describedby="emailHelp" placeholder="Defina seu nome de usuário" required>
      </div>

      <div class="form-group">
        <label for="userPass">Senha</label>
        <input name="encPass" type="password" class="form-control" id="userPass" placeholder="Defina sua senha" required>
      </div>

      <button type="submit" class="btn btn-primary">Cadastrar</button>

    </div>

  </form>

</main>

</body>

</html>