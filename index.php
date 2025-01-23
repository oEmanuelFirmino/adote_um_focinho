<?php
include_once __DIR__ . '/controller/Pet.controller.php';

$basePath = '/adote_um_focinho';
$uri = str_replace($basePath, '', $_SERVER['REQUEST_URI']);
$uri = parse_url($uri, PHP_URL_PATH);

if ($uri === '' || $uri === '/') {
  $uri = '/home';
}

$controller = new PetController();

switch ($uri) {
  case '/':
  case '/home':
    header('Location: http://localhost/adote_um_focinho/view/src/pages/home.php');
    break;
  case '/adoption':
    include __DIR__ . '/view/src/pages/adoption.php';
    break;
  case '/contact':
    include __DIR__ . '/view/src/pages/contact.php';
    break;
  case '/register':
    include __DIR__ . '/view/src/pages/register.php';
    break;
  case '/pets/list':
    header('Content-Type: application/json');
    echo json_encode($controller->listPets());
  case '/register/pet':
    $id = NULL;
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $personalidade = $_POST['personalidade'];
    $porte = $_POST['porte'];
    $raca = $_POST['raca'];

    $imagem = (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK)
      ? file_get_contents($_FILES['imagem']['tmp_name'])
      : '';
      
    $pet = new Pet($id, $nome, $idade, $personalidade, $porte, $raca, $imagem);
    $controller->createPet($pet);
    exit;
  default:
    http_response_code(404);
    include __DIR__ . '/view/src/pages/404.php';
    break;
}
