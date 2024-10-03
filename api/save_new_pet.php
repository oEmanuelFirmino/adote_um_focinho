<?php

function save_new_pet(string $nome, int $idade, string $personalidade,
         string $porte, string $raca, string $imagem)
{
  include './connection.php';
  $conn = connection();

  $sql = "INSERT INTO pets (nome, idade,personalidade,porte,raca,imagem) VALUES (?,?,?,?,?,?)";

  $prep = mysqli_prepare($conn ,$sql);

  if ($prep === false) {
    die('Erro ao preparar a instrução: ' . mysqli_error($conn));
  }

  mysqli_stmt_bind_param($prep, "sissss", $nome , $idade ,$personalidade , $porte , $raca , $imagem);

  $res = mysqli_stmt_execute($prep);
  
  if ($res) {
    header("Location: /src/pages/adoption.php");
    exit();
  } else {
    echo "ERROR: " . mysqli_stmt_error($prep);
  }
  mysqli_stmt_close($prep);
  mysqli_close($conn);
}

