<?php
  session_start();
  unset($_SESSION['nome']);
  unset($_SESSION['cpf']);
  header('Location: login_view.php');

?>