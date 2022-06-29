<?php
  include('layout/head.php');
?>
<style>
  body{
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
    text-align: center;
    color: white;
  }
  .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(0, 0, 0, 0.6);
    padding: 30px;
    border-radius: 10px;
  }
  a{
    text-decoration: none;
    color: white;
    border: 3px solid dodgerblue;
    border-radius: 10px;
    padding: 10px;
  }
  a:hover{
    background-color: dodgerblue;
  }
</style>


<div class="box">
  <a href="login_view.php">Login</a>
  <a href="cadastro_view.php">Cadastro</a>
</div>

<?php
  include('layout/footer.php');
?>