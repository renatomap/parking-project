<?php

    if(isset($_POST['submit'])) {

        // print_r('Nome: '. $_POST['nome']);
        // print_r('<br>');
        // print_r('CPF: '. $_POST['cpf']);
        // print_r('<br>');
        // print_r('Fone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Data de Entrada: '. $_POST['data_entrada']);
        // print_r('<br>');
        // print_r('Placa: ' . $_POST['placa']);
        // print_r('<br>');
        // print_r('Modelo: ' . $_POST['modelo']);
        // print_r('<br>');
        // print_r('Marca: ' . $_POST['marca']);

        include_once('../db/conexao.php');

        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $data_entrada = $_POST['data_entrada'];
        $placa = $_POST['placa'];
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(cpf, nome, telefone, data_entrada, placa, modelo, marca) VALUES ('$cpf', '$nome', '$telefone', '$data_entrada', '$placa', '$modelo', '$marca')");

        header('Location: ../view/login_view.php');
    }

?>
<?php
    include('layout/head.php');
    // include('../model/cliente_model.php');
    // include('../controller/cliente_controller.php');

    // $cliente = new Cliente_Model();
    // $cliente_db = new Cliente_Controller();

    // if(@$_POST['submit']){
    //     $cliente->setNome($_POST['nome']);
    //     $cliente->setCpf($_POST['cpf']);
    //     $cliente_db->Cadastrar($cliente);
    // }
?>


<a href="index.php">Voltar</a>
    <div class="box">
        <form action="cadastro_view.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <!-- <div class="inputBox">
                    <input type="passoord" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br> -->
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <label for="data_Entrada"><b>Data de Entrada:</b></label>
                <input type="date" name="data_entrada" id="data_entrada" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="placa" id="placa" class="inputUser" required>
                    <label for="placa" class="labelInput">Placa</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="modelo" id="modelo" class="inputUser" required>
                    <label for="modelo" class="labelInput">Modelo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="marca" id="marca" class="inputUser" required>
                    <label for="marca" class="labelInput">Marca</label>
                </div>
                <br><br>
                <!-- <button type="submit"></button> -->
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

