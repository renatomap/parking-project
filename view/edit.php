<?php

    if(!empty($_GET['id'])) {

        include_once('../db/conexao.php');

        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id = $id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $nome = $row['nome'];
                $cpf = $row['cpf'];
                $telefone = $row['telefone'];
                $hora_entrada = $row['hora_entrada'];
                $placa = $row['placa'];
                $modelo = $row['modelo'];
                $marca = $row['marca'];
            }
            // print_r('nome: '. $nome); // teste de inserção
        } else {
            header('Location: ../view/sistema.php');
        }

    } else {
        header('Location: ../view/sistema.php');
    }

?>
<?php
    include('layout/head.php');

?>


<a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="../db/saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <!-- <div class="inputBox">
                    <input type="passoord" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br> -->
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf?>" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <label for="hora_Entrada"><b>Hora de Entrada:</b></label>
                <input type="time" name="hora_entrada" id="hora_entrada" value="<?php echo $hora_entrada?>"  required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="placa" id="placa" class="inputUser" value="<?php echo $placa?>" required>
                    <label for="placa" class="labelInput">Placa</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="modelo" id="modelo" class="inputUser" value="<?php echo $modelo?>" required>
                    <label for="modelo" class="labelInput">Modelo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="marca" id="marca" class="inputUser" value="<?php echo $marca?>" required>
                    <label for="marca" class="labelInput">Marca</label>
                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>

