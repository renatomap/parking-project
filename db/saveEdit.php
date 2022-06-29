<?php
  include_once('conexao.php');

  if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $data_entrada = $_POST['data_entrada'];
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];

    $sqlUpdate = "UPDATE usuarios SET nome = '$nome', cpf = '$cpf', telefone = '$telefone', data_entrada = '$data_entrada', placa = '$placa', modelo = '$modelo', marca = '$marca' WHERE id = '$id'";

    $result = $conexao->query($sqlUpdate);
  }
  header('Location: ../view/sistema.php');

?>