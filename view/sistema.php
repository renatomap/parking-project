<?php
  session_start();
  include_once('../db/conexao.php');
  // print_r($_SESSION);

  if(!isset($_SESSION['nome']) == true AND !isset($_SESSION['cpf']) == true) {
    unset($_SESSION['nome']);
    unset($_SESSION['cpf']);
    header('Location: login_view.php');
  } else {
    $logado = $_SESSION['nome'];
  }

  if(!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' OR cpf LIKE '%$data%' OR nome LIKE '%$data%' OR telefone LIKE '%$data%' OR hora_entrada LIKE '%$data%' OR placa LIKE '%$data%' OR modelo LIKE '%$data%' OR marca LIKE '%$data%' ORDER BY id DESC";
  } else {
    $sql = "SELECT * FROM usuarios ORDER BY hora_entrada ASC";
  }

  $result = $conexao->query($sql);
  // print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Sistema de Estacionamento</title>
  <link rel="stylesheet" href="../public/css/style.css">

</head>
<body>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <a class="navbar-brand" href="#"><b><b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../view/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../view/cadastro_view.php">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-danger" href="logout_view.php">Sair</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <h1 class="lista_clientes">Lista de Clientes</h1>
  <!-- <div class="box-search">
    <input type="search" class="fom-control w-25" placeholder="Pesquisar" id="pesquisar">
    <button onclick="searchData()" class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
    </button>
  </div> -->
  <div class="m-5">
    <table class="table table-hover text-white table-bg">
      <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">CPF</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
        <th scope="col">Hora de Entrada</th>
        <th scope="col">Placa</th>
        <th scope="col">Modelo</th>
        <th scope="col">Marca</th>
        <th scope="col">Ações</th>
        </tr>
      </thead>
    <tbody>
      <?php
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['cpf']."</td>";
          echo "<td>".$row['nome']."</td>";
          echo "<td>".$row['telefone']."</td>";
          echo "<td>".$row['hora_entrada']."</td>";
          echo "<td>".$row['placa']."</td>";
          echo "<td>".$row['modelo']."</td>";
          echo "<td>".$row['marca']."</td>";
          echo "<td>
            <a class='btn btn-primary' href='edit.php?id=$row[id]'>
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pen' viewBox='0 0 16 16'>
              <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z'/>
              </svg>
            </a>
            <a class='btn btn-danger' href='../db/delete.php?id=$row[id]'>
              <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
              </svg>  
            </a>
          </td>";
          echo "</tr>";
        }
      ?>
    </tbody>
    </table>
  </div>
</body>
<!-- <?php
        include_once('../public/js/script.js');
?> -->
  <script>
    var search = document.getElementById('pesquisar')

    search.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') {
        searchData()
      }
    })

    function searchData() {
    window.location = 'sistema.php?search=' + search.value
  }
  </script>
</html>