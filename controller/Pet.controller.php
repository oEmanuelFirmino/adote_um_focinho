<?php

$path = __DIR__ . '/../model/dao/PetDAOImplementation.php';

if (!file_exists($path)) {
  die("Erro: Arquivo não encontrado em: $path");
}

include_once $path;

if (!class_exists('PetDAOImplementation')) {
  die("Erro: Classe PetDAOImplementation não encontrada. Verifique o conteúdo do arquivo.");
}

class PetController
{
  private $petDAO;

  public function __construct()
  {
    $this->petDAO = new PetDAOImplementation();
  }

  public function createPet($pet)
  {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      throw new Exception("Método inválido");
    }

    if ($pet == null) {
      throw new Exception("Pet não pode ser nulo");
    }

    try {
      $this->petDAO->insert(
        $pet->getNome(),
        $pet->getIdade(),
        $pet->getPersonalidade(),
        $pet->getPorte(),
        $pet->getRaca(),
        $pet->getImagem()
      );

      header("Location: /adote_um_focinho/src/view/pages/adoption.php");
      exit();
    } catch (Exception $e) {
      die("Erro ao criar pet: " . $e->getMessage());
    }
  }

  public function getAllPets()
  {
    try {
      return $this->petDAO->get();
    } catch (Exception $e) {
      die("Erro ao buscar pets: " . $e->getMessage());
    }
  }

  public function listPets()
  {
    try {
      $pets = $this->getAllPets();

      if (empty($pets)) {
        http_response_code(404);
        echo json_encode([
          "status" => "error",
          "message" => "Nenhum pet encontrado."
        ]);
        exit;
      }

      header("Content-Type: application/json; charset=UTF-8");
      echo json_encode([
        "status" => "success",
        "data" => $pets
      ]);
      exit;
    } catch (Exception $e) {
      http_response_code(500);
      echo json_encode([
        "status" => "error",
        "message" => "Ocorreu um erro ao processar sua solicitação.",
        "details" => $e->getMessage()
      ]);
      exit;
    }
  }
  
  public function updatePet($pet)
  {
    if ($_SERVER['REQUEST_METHOD'] !== 'PUT') {
      throw new Exception("Método inválido");
    }
    if ($pet == null) {
      throw new Exception("Pet não pode ser nulo");
    }

    try {
      $this->petDAO->update(
        $pet->getId(),
        $pet->getNome(),
        $pet->getIdade(),
        $pet->getPersonalidade(),
        $pet->getPorte(),
        $pet->getRaca(),
        $pet->getImagem()
      );
      header("Location: /adote_um_focinho/src/view/pages/adoption.php");
      exit();
    } catch (\Exception $e) {
      die("Erro ao atualizar pet: " . $e->getMessage());
    }
  }

  public function deletePet($id)
  {
    if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {
      throw new Exception("Método inválido");
    }
    if ($id == null) {
      throw new Exception("ID não pode ser nulo");
    }

    try {
      $this->petDAO->delete($id);
      header("Location: /adote_um_focinho/src/view/pages/adoption.php");
      exit();
    } catch (\Exception $e) {
      die("Erro ao deletar pet: " . $e->getMessage());
    }
  }

}