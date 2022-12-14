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

        include_once('../helpers/config.php');

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

        header('Location: ../views/login.php');
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
    <style>
          body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(0, 0, 0), rgb(7.18, 7.18, 2.92));
            color: white;
        }

        .container{
            background-color: indigo;
            border-radius: 20px;
            padding: 30px;
        }

    </style>
</head>
<body>
    <a href="home.php" class="btn btn-danger">Voltar</a>
    <div class="container">
        <form action="formulario.php" method="POST">

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
                <legend><b>Sexo</b></legend>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento" class="input-group-text" id="addon-wrapping"><b>Data de Nascimento:</b></label>
                <input type="date" class="form-control mb-3" name="data_nascimento" id="data_nascimento" required>
                
                <div class="input-group flex-nowrap mb-3">
                    <label for="cidade" class="input-group-text" id="addon-wrapping">Cidade</label>
                    <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Sua cidade" aria-label="Sua cidade" aria-describedby="addon-wrapping" required>
                </div>
            
                <div class="input-group flex-nowrap mb-3">
                    <label for="estado" class="input-group-text" id="addon-wrapping">Estado</label>
                    <input type="text" name="estado" id="estado" class="form-control" placeholder="Seu estado" aria-label="Seu estado" aria-describedby="addon-wrapping" required>
                </div>
               
                <div class="input-group flex-nowrap mb-3">
                    <label for="endereco" class="input-group-text" id="addon-wrapping">Endereço</label>
                    <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Seu endereço" aria-label="Seu endereço" aria-describedby="addon-wrapping" required>
                </div>
                
                <input type="submit" class="btn btn-dark" name="submit" id="submit">
        </form>
    </div>
</body>
</html>