<?php
function connection() {
  $bd_local = "localhost";
  $bd_usuario = "root";
  $bd_senha = "";
  $bd_nome = "ong"; 

  $connect = mysqli_connect($bd_local, $bd_usuario, $bd_senha, $bd_nome);

  if (!$connect) {
    die("Falha na conexão: " . mysqli_connect_error());
  }
  
  return $connect;
}