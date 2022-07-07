<?php
  include('layout/head.php');
?>
<style>
  body{
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
  }
  div{
    background-color: rgba(0, 0, 0, 0.6);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 80px;
    border-radius: 15px;
    color: #fff;
  }
  input{
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
  }
  .inputSubmit{
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    
  }
  .inputSubmit:hover{
    background-color: deepskyblue;
    cursor: pointer;
  }

</style>

<a href="index.php" >Voltar</a>
<div>
  <h1>Login</h1>
  <form action="../controller/Cliente_controller.php" method="post">
    <input type="text" name="nome" placeholder="Nome do cliente">
    <br><br>
    <input type="text" name="cpf" placeholder="CPF do cliente">
    <br><br>
    <input class="inputSubmit" type="submit" name="submit" value="Enviar">
  </form>
</div>