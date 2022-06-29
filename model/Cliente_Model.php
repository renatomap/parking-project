<?php
  class Cliente_Model {
    public $cpf;
    public $nome;
    public $telefone;

    public function __construct($cpf, $nome, $telefone) {
      $this->cpf = $cpf;
      $this->nome = $nome;
      $this->telefone = $telefone;
    }

    function getCpf() {
      return $this->cpf;
    }
    function getNome() {
      return $this->nome;
    }
    function getTelefone() {
      return $this->telefone;
    }
    function setCpf($cpf) {
      $this->cpf = $cpf;
    }
    function setNome($nome) {
      $this->nome = $nome;
    }
    function setTelefone($telefone) {
      $this->telefone = $telefone;
    }
  }
?>