<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <title>Tela de login</title>
    <style>
       * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: black;
}

.login {
  height: min-content;
  padding: 20px;
  border-radius: 12px;
  background: white;
}

.login h1 {
  font-size: 36px;
  margin-bottom: 25px;
}

.login form {
  font-size: 20px;
}

.login form .form-group {
  margin-bottom: 12px;
}

.login form input [type="submit"] {
  font-size: 20px;
  margin-top: 15px;
}

a {
    text-decoration: none;
    color: black;
    font-size: 15px;
}

    </style>
</head>
<body>
    <div class="login">
        <a href="home.php" id="back">Voltar</a>
        <h1 class="text-center">LOGIN</h1>

        <form class="needs-validation" action="../controllers/testLogin.php" method="POST">
            <div class="form-group was-validated">
                <input class="form-control" type="text" name="email" placeholder="Email" required>
            </div>
            <div class="form-group was-validated">
                <input class="form-control" type="password" name="senha" placeholder="Senha" required>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="checkbox">
                <label class="form-check-label" for="check">lembre-se</label>
            </div>
            <input class="btn btn-outline-dark w-100" type="submit" name="submit" value="Enviar">
        </form>

    </div>
</body>
</html>