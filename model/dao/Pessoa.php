<?php

    class Pessoa {
        private $id;
        private $nome;

        public function __construct($nome, $id=NULL) {
            $this->id = $id;
            $this->nome = $nome;
        }

        public function getNome() {
            return $this->nome;
        }


        public function getId() {
            return $this->id;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setId($id) {
            $this->id = $id;
        }

    }

?>