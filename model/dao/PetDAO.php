<?php

interface PetDAO
{
  public function get();
  public function insert(string $nome, int $idade, string $personalidade, string $porte, string $raca, string $imagem);
  public function update(int $id, string $nome, int $idade, string $personalidade, string $porte, string $raca, string $imagem);
  public function delete(int $id);
}