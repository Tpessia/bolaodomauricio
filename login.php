<?php
    date_default_timezone_set('America/Sao_Paulo');

    if(date('m/d/Y H:i:s') < date_format(date_create('06/15/2018 00:00:00'), 'm/d/Y H:i:s') && (!isset($_GET["admin"]) || $_GET["admin"] != "thiago")) {
        header('Location: '.'/apresentacao.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>    
    <title>Login | Bolão do Maurício</title>
    
    <meta charset="utf-8">

    <meta name="robots" content="noindex,nofollow">
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Bolão do Maurício">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="manifest" href="/manifest.json">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#151515">
    <meta name="description" content="Faça o login no Bolão!">
    
    <link rel="icon" type="image/png" href="assets/img/icon.png">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="assets/styles/css/min/login.min.css">
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="assets/js/login.js"></script>
</head>
<body>
    <div id="login">
        <div id="bg-layer"></div>
        <div id="wrapper">
            <h2>Bolao 2018</h2>
            <div id="formLogin">
                <form>
                    <div class="input-field">
                        <input type="number" id="name" name="codigo">
                        <label for="codigo" class="active">Código <small>(como na planilha)</small></label>
                    </div>
                    <div class="input-field">
                        <input type="submit" id="sendLogin" class="btn colorA" value="Login">
                    </div>
                </form>
        
                <div id="contato">
                    <a href="/contato.php" target="_blank">Problemas ou dúvidas? Entre em <strong>contato</strong>.</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>