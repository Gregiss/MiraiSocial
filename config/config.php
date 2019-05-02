<?php
//Template funcao
function template($dir, $file){
    //Configuração site
    $title = 'MiraiSocial';
    $keywords = 'Social Network, Rede Social, geek, Coders, Decoder, Social';
    //Não edite daqui pra baixo :)
    //Conexão com banco de dados
    $username = "kaway404";
    $password = "xande123";
    try {
      $conn = new PDO('mysql:host=localhost;dbname=miraisocial', $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      require_once 'themes/template/index.php';
    } catch(PDOException $e) {
      require_once 'themes/template/error/database.php'; // Carregar página de erro
    }
    require 'themes/template/'.$dir. '/' . $file; // Incluir arquivo template
}

//Conexão com banco de dados
$username = "kaway404";
$password = "xande123";
try {
      $conn = new PDO('mysql:host=localhost;dbname=miraisocial', $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      require_once 'themes/template/index.php';
  } catch(PDOException $e) {
    require_once 'themes/template/error/database.php'; // Carregar página de erro
  }