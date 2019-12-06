<?php

  session_start();

include_once "models/Post.php";

class PostController {

  public function acao($rotas){
    
    switch($rotas){

      case "posts":
        $this->listarPosts();
      break;

      case "formulario-post":
        $this->viewFormularioPost();
      break;

      case "cadastrar-post":
        $this->cadastroPost();
      break;

    }
  }

  private function viewFormularioPost(){

    if(isset($_SESSION['user'])){

      include "views/newPost.php";

    }else {

      header('Location:/desafio-fakeinsta/sign-in');

    }
  }

  private function viewPosts(){
    include "views/posts.php";
  }

  private function listarPosts(){

    $post = new Post();
    $listaPosts = $post->listarPosts();
    $_REQUEST['posts'] = $listaPosts;
    $this->viewPosts();

  }

  private function cadastroPost(){
  

    if(isset($_SESSION['user'])){
      
      $description = $_POST['description'];
      $nomeArquivo = $_FILES['image']['name'];
      $linkTemp = $_FILES['image']['tmp_name'];
      $caminhoSalvar = "views/img/$nomeArquivo";
      move_uploaded_file($linkTemp,$caminhoSalvar);

      $id_user = $_SESSION['user']->id;
  
      $post = new Post();
      $resultado = $post->criarPost($caminhoSalvar,$description,$id_user);
  
      if($resultado){

        header('Location:/desafio-fakeinsta/posts');

      }else {

        echo "Deu erro";
      }
    } else {

      header('Location:/desafio-fakeinsta/sign-in');

    }
  }

}

