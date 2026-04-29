<?php

class Exercicio extends CRUD {
    private $id;
    private $nome;  
    private $descricao;  
    private $grupoMuscular;

    public function add() {

    }

    public function update() {

    }

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNomeDescricao($descricao) {
        $this->descricao = $descricao;6
    }

    public function getGrupoMuscular() {
        return $this->grupoMuscular;
    
}

}