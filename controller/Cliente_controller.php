<?php
  session_start();

  if(isset($_POST['submit']) && !empty($_POST['nome'] && !empty($_POST['cpf']))) {
    // acessar o banco de dados
    include_once('../db/conexao.php');
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    // teste de inserção
    // print_r('Nome: '. $nome);
    // print_r('<br>');
    // print_r('CPF: '. $cpf);

    $sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND cpf = '$cpf'";
    $result = $conexao->query($sql);
    
    if(mysqli_num_rows($result) < 1) {
      // print_r('Usuário não encontrado');
      unset($_SESSION['nome']);
      unset($_SESSION['cpf']);
      header('Location: ../view/login_view.php');

    } else {
      // print_r('Usuário encontrado');
      $_SESSION['nome'] = $nome;
      $_SESSION['cpf'] = $cpf;
      header('Location: ../view/sistema.php');

    }
  } else {
    // nao acessar o banco de dados
    header('Location: ../view/login_view.php');
  }

?>