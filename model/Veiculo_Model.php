<?php
  class Veiculo_Model {
    public $marca;
    public $modelo;
    public $placa;

    public function __construct($marca, $modelo, $placa) {
      $this->marca = $marca;
      $this->modelo = $modelo;
      $this->placa = $placa;
    }

    function getMarca() {
      return $this->marca;
    }
    function getModelo() {
      return $this->modelo;
    }
    function getPlaca() {
      return $this->placa;
    }
    function setMarca($marca) {
      $this->marca = $marca;
    }
    function setModelo($modelo) {
      $this->modelo = $modelo;
    }
    function setPlaca($placa) {
      $this->placa = $placa;
    }
  }

?>