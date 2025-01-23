<?php

interface PessoaDAO
{
    public function get();

    public function getByName(string $name);

    public function insert($pessoa);
    public function update($pessoa);
    public function delete($pessoa);
}
