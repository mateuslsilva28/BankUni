<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $sql_code = "INSERT INTO `usuarios` (`idUser`, `email`, `senha`) VALUES (NULL, '$email', '$senha')";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execu��o do c�digo SQL: " . $mysqli->error);

        if($sql_query) {
            header("Location: index.html");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="login.js"></script>
    <title>Login</title>
</head>
<body id="area-cabecalho">
    <div class="area-logo">
      <img class="img" src="logo.png" style="width:300px">
    </div>
    <h1>Cadastre-se</h1>
    <form action="" method="POST">
        <p>
            <label>E-mail:</label>
            <input id="txt_email" type="text" name="email">
        </p>
        <p>
            <label>Senha:</label>
            <input id="txt_senha" type="password" name="senha">
        </p>
      <p>
                            <button class="btn third" type="submit">Entrar</button>
            <button class="btn third" id="btn_limpar" onclick="limparCampos()">Limpar</button>
      </p>

    </form>
    </body>