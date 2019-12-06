<?php 

  
  $rotas = key($_GET)?key($_GET):"sign-in";

  
  switch($rotas){
    
    case "posts":
      include "controllers/PostController.php";
      $controller = new PostController();
      $controller->acao($rotas);
    break;

    case "formulario-post":
      include "controllers/PostController.php";
      $controller = new PostController();
      $controller->acao($rotas);
    break;

    case "cadastrar-post":
      include "controllers/PostController.php";
      $controller = new PostController();
      $controller->acao($rotas);
    break;

    case "sign-up":
      include "controllers/UserController.php";
      $controller = new UserController();
      $controller->acao($rotas);
    break;

    case "register-user":
      include "controllers/UserController.php";
      $controller = new UserController();
      $controller->acao($rotas);
    break;

    case "login-user":
      include "controllers/UserController.php";
      $controller = new UserController();
      $controller->acao($rotas);
    break;

    case "logout":
      include "controllers/UserController.php";
      $controller = new UserController();
      $controller->acao($rotas);

     
    case "sign-in":
      include "controllers/UserController.php";
      $controller = new UserController();
      $controller->acao($rotas);
    break;

  }

?>