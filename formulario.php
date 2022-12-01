<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

        header('Location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="formulario.css">
    <title>Registro</title>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="container">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                
                <div class="input-group flex-nowrap  mb-3">
                    <label for="nome" class="input-group-text" id="addon-wrapping">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Usuário" aria-label="Usuário" aria-describedby="addon-wrapping" required>
                </div>
              
                <div class="input-group flex-nowrap  mb-3">
                    <label for="senha" class="input-group-text" id="addon-wrapping" >Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="addon-wrapping" required>
                </div>
               
                <div class="input-group flex-nowrap  mb-3">
                    <label for="email" class="input-group-text" id="addon-wrapping">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="seuemail@exemplo.com" aria-label="seuemail@exemplo.com" aria-describedby="addon-wrapping" required>
                </div>
                <div class="input-group flex-nowrap  mb-3">
                    <label for="telefone" class="input-group-text" id="addon-wrapping">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="form-control" placeholder="+xx (xx) x-xxxx-xxxx" aria-label="+xx (xx) x-xxxx-xxxx" aria-describedby="addon-wrapping" required>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="input-group flex-nowrap">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="input-group flex-nowrap">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="input-group flex-nowrap">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>