<?php 

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
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="views/css/styles.css">
</head>
<body>

<main class="container">

  <div class="row justify-content-center">

    <section class="col-md-5">
      <img class="signIn-image" src="views/img/insta-index.png" alt="celular com Instagram aberto">
    </section>
  
    <div class="col-md-5">

      <section>

        <form action="/desafio-fakeinsta/login-user" method="post" class="form-container">

          <div class="form-signin col-10">

            <h3 class="text-center">Instagram</h3>
            
            <div class="form-group">
              <input name="username" type="text" class="form-control" id="userId" aria-describedby="emailHelp" placeholder="Usuário" required>
            </div>

            <div class="form-group">
              <input name="userPass" type="password" class="form-control" id="userPass" placeholder="Senha" required>
            </div>

            <button type="submit" class="btn btn-primary">Logar</button>

          </div>

        </form>

      </section>
    
      
        <section>

          <div class="signUp-container mt-3">
            <p>Não tem um conta?</p>
            <a href="/desafio-fakeinsta/sign-up">Cadastre-se</a>
          </div>

        </section>

      </div>

    </div>

</main>

</body>

</html>