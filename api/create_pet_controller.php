<?php
include './save_new_pet.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
  $idade = isset($_POST['idade']) ? (int)$_POST['idade'] : 0;
  $personalidade = isset($_POST['personalidade']) ? $_POST['personalidade'] : '';
  $porte = isset($_POST['porte']) ? $_POST['porte'] : '';
  $raca = isset($_POST['raca']) ? $_POST['raca'] : '';

  if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
    $img = file_get_contents($_FILES['imagem']['tmp_name']);
    
    save_new_pet($nome, $idade, $personalidade, $porte, $raca, $img);

  } else {
    echo "Erro ao enviar a imagem. Código do erro: " . $_FILES['imagem']['error'];
  }
} else {
  echo "Método de requisição não permitido.";
}
