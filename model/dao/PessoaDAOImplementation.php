<?php

require_once __DIR__ . "/Pessoa.php";
require_once __DIR__ . "/PessoaDAO.php";
require_once __DIR__ . '/../DatabaseConnection.php';

class PessoaDAOImplementation implements PessoaDAO
{

    private $connection;

    public function __construct()
    {
        $this->connection = DatabaseConnection::connect();
    }


    public function get()
    {
        $sql = "SELECT * FROM pessoa";

        $resultado = $this->connection->query($sql);
        $pessoas = [];

        while ($dados = mysqli_fetch_assoc($resultado)) {
            $nome = $dados["nome"];
            $id = $dados["id"];
            $pessoa = new Pessoa($nome, $id);
            $pessoas[] = $pessoa;
        }

        header('Content-Type: application/json');

        return $pessoas;
    }

    public function getByName($name)
    {
        $sql = "SELECT id, nome FROM pessoa WHERE nome = ?";
        $stmt = $this->connection->prepare($sql);

        $stmt->bind_param('s', $name);
        $stmt->execute();
        $stmt->bind_result($id, $nome);

        if ($stmt->fetch()) {
            $pessoa = new Pessoa($nome, $id);
        } else {
            $pessoa = null; // Retorna null se nenhum usuário for encontrado
        }

        $stmt->close();
        return $pessoa;
    }

    public function insert($pessoa)
    {
        $sql = "INSERT INTO pessoa(nome) VALUES (?)";

        $stmt = $this->connection->prepare($sql);

        $nome = $pessoa->getNome();

        $stmt->bind_param('s', $nome);

        $stmt->execute();

        mysqli_stmt_close($stmt);
    }

    public function update($pessoa)
    {
        $sql = "UPDATE pessoa SET nome = ? WHERE id = ?";

        $stmt = $this->connection->prepare($sql);
        $nome = $pessoa->getNome();
        $id = $pessoa->getId();

        $stmt->bind_param('nome', $nome);

        $stmt->execute();

        mysqli_stmt_close($stmt);
    }

    public function delete($pessoa)
    {
        $sql = "DELETE from pessoa WHERE id = ?";

        $stmt = $this->connection->prepare($sql);
        $id = $pessoa->getId();

        $stmt->bind_param("i", $id);

        $stmt->execute();

        mysqli_stmt_close($stmt);
    }
}