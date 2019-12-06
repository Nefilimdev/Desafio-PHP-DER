<?php

include_once "Conexao.php";

class User extends Conexao {

  
  public function setUser($firstName,$lastName,$username,$encPass){

    $db = parent::criarConexao();
    $query = $db->prepare("INSERT INTO users (firstName,lastName,username,encPass) VALUES (:firstName, :lastName, :username, :encPass)");
    return $query->execute([
      "firstName" => $firstName,
      "lastName" => $lastName,
      "username" => $username,
      "encPass" => $encPass]);
  }

  
  public function getUser($username){

    $db = parent::criarConexao();
    $query = $db->prepare("SELECT * FROM users WHERE username = ?");
    $query->execute([$username]);

    
    $userObject = $query->fetch(PDO::FETCH_OBJ);
    
    return $userObject;
  }

}
