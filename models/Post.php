<?php

include_once "Conexao.php";

class Post extends Conexao {

  public function criarPost($image,$description,$id_user){
    
    $db = parent::criarConexao();
    $query = $db->prepare("INSERT INTO posts (image,description,id_user) VALUES (:image, :description, :id_user)");
    return $query->execute([
      "image" => $image,
      "description" => $description,
      "id_user" => $id_user]); 
  }

  public function listarPosts(){

    $db = parent::criarConexao();
    $query = $db->query('SELECT posts.id, users.username, users.firstName, users.lastName, posts.image, posts.description, posts.likes FROM posts INNER JOIN users ON posts.id_user=users.id ORDER BY posts.id DESC');
    $resultado = $query->fetchAll(PDO::FETCH_OBJ); 
    return $resultado;
  } 

}