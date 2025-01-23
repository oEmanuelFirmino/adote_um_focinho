<?php

class Pet
{

  private $id;
  private $nome;
  private $idade;
  private $personalidade;
  private $porte;
  private $raca;
  private $imagem;

  public function __construct(
    int $id = NULL,
    string $nome,
    int $idade,
    string $personalidade,
    string $porte,
    string $raca,
    string $imagem
  ) {
    $this->id = $id;
    $this->nome = $nome;
    $this->idade = $idade;
    $this->personalidade = $personalidade;
    $this->porte = $porte;
    $this->raca = $raca;
    $this->imagem = $imagem;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getIdade(): int
  {
    return $this->idade;
  }

  public function getPersonalidade(): string
  {
    return $this->personalidade;
  }

  public function getPorte(): string
  {
    return $this->porte;
  }

  public function getRaca(): string
  {
    return $this->raca;
  }

  public function getImagem(): string
  {
    return $this->imagem;
  }

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  public function setIdade(int $idade): void
  {
    $this->idade = $idade;
  }

  public function setPersonalidade(string $personalidade): void
  {
    $this->personalidade = $personalidade;
  }

  public function setPorte(string $porte): void
  {
    $this->porte = $porte;
  }

  public function setRaca(string $raca): void
  {
    $this->raca = $raca;
  }

  public function setImagem(string $imagem): void
  {
    $this->imagem = $imagem;
  }
}
