<?php

$path = __DIR__ . '/../model/dao/PessoaDAOImplementation.php';

if (!file_exists($path)) {
  die("Erro: Arquivo não encontrado em: $path");
}

include_once $path;

class PessoaController
{
  private $pessoaDAO;

  public function __construct()
  {
    $this->pessoaDAO = new PessoaDAOImplementation();
  }

  public function login(string $nome): ?Pessoa
  {
    $pessoa = $this->pessoaDAO->getByName($nome);

    if ($pessoa === null) {
      return null;
    }

    return $pessoa;
  }
}