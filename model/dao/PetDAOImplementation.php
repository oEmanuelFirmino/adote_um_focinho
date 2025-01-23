<?php

require_once __DIR__ . '/PetDAO.php';
require_once __DIR__ . '/../DatabaseConnection.php';
require_once __DIR__ . '/Pet.php';

class PetDAOImplementation implements PetDAO
{
  private $connection;

  public function __construct()
  {
    $this->connection = DatabaseConnection::connect();
  }

  public function get()
  {

    $sql = "SELECT id, nome, idade, personalidade, porte, raca, imagem FROM pets";
    $result = $this->connection->query($sql);

    $data = [];

    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {

        $row['imagem'] = base64_encode($row['imagem']);
        $data[] = $row;
      }
    } else {
      $data['erro'] = 'Não foi possível recuperar os dados.';
    }

    header('Content-Type: application/json');

    return $data;
  }

  public function insert(
    string $nome,
    int $idade,
    string $personalidade,
    string $porte,
    string $raca,
    string $imagem
  ) {

    $sql = "INSERT INTO pets (nome, idade, personalidade, porte, raca, imagem) VALUES (?,?,?,?,?,?)";

    $stmt = $this->connection->prepare($sql);

    $stmt->bind_param("sissss", $nome, $idade, $personalidade, $porte, $raca, $imagem);

    $stmt->execute();

    return $this->connection->insert_id;

  }

  public function delete(int $id)
  {
    $sql = "DELETE FROM pets WHERE id =?";
    $stmt = $this->connection->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
  }


  public function update(
    int $id,
    string $nome,
    int $idade,
    string $personalidade,
    string $porte,
    string $raca,
    string $imagem
  ) {
    $sql = "UPDATE pets SET nome=?, idade=?, personalidade=?, porte=?, raca=?, imagem=? WHERE id=?";
    $stmt = $this->connection->prepare($sql);
    $stmt->bind_param("siisssi", $nome, $idade, $personalidade, $porte, $raca, $imagem, $id);
    return $stmt->execute();
  }
}