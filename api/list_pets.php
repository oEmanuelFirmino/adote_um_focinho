<?php
include './connection.php'; 

$conn = connection();

$sql = "SELECT id, nome, idade, personalidade, porte, raca, imagem FROM pets";
$result = mysqli_query($conn, $sql);

$dados = array();

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {

      $row['imagem'] = base64_encode($row['imagem']);
        $dados[] = $row;
    }
} else {
    $dados['erro'] = 'Não foi possível recuperar os dados.';
}

header('Content-Type: application/json');

echo json_encode($dados);

mysqli_close($conn);

