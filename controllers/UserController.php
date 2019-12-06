<?php

session_start();
include_once 'models/User.php';

class UserController {

  public function acao($rotas){
    switch($rotas){

      case "sign-up":
        $this->viewSignUp();
      break;

      case "register-user":
        $this->registerUser();
      break;

      case "login-user":
        $this->userLogin();
      break;       
       
      case "sign-in":
        $this->viewSignIn();
      break;
      
      case "logout":
        $this->logout();
      break;
    }
  }
  
  private function viewSignUp(){
    include "views/signUp.php";
  }

  private function viewSignIn(){
    include "views/signIn.php";
  }

  private function registerUser(){

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $encPass = password_hash($_POST['encPass'], PASSWORD_DEFAULT);
    $user = new User();
    $action = $user->setUser($firstName,$lastName,$username,$encPass);
    
    if($action){
      
      $username = $_POST['username'];
      $user = new User();
      $action = $user->getUser($username);

      $_SESSION['user'] = $action;
      
      header('Location:/desafio-fakeinsta/posts');       

    }else {
      echo "Não foi possível adicionar o usuário - usuário já cadastrado.";
    }
  }

  
  private function userLogin() {

    $username = $_POST['username'];
    $encPass = $_POST['userPass'];
    
    
    if($this->authenticate($username,$encPass)){
     
      $user = new User();
      $action = $user->getUser($username);
      $_SESSION['user'] = $action;
      
      header('Location:/desafio-fakeinsta/posts');       

      return true;

    }else {

      echo "Login ou senha inválidos";
      
    }
  }

  private function authenticate ($username, $encPass){
    
    $authentic = false;
    $db = new User(); 
    $userObject = $db->getUser($username);
    $dbEncriptedPass = $userObject->encPass;

    if(password_verify($encPass,$dbEncriptedPass)){
      $authentic = true;

      return $authentic;

    }else {

      return false;
    }
  }

  private function logout(){
    session_destroy();
    header('Location:/desafio-fakeinsta/');
  }

}

