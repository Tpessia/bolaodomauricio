<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Contato | Bolão do Maurício</title>
    
    <meta charset="utf-8">

    <meta name="robots" content="noindex,nofollow">
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Bolão do Maurício">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="manifest" href="/manifest.json">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#151515">
    <meta name="description" content="Caso tenho alguma dúvida relacionada com o website ou com o sistema de pontuação/ranking, entre em contato conosco através dessa página!">

    <link rel="icon" type="image/png" href="assets/img/icon.png">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" type="" href="assets/styles/css/min/contato.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>

<body>
    <header>
        <nav class="nav-extended navbar-fixed">
            <div class="nav-wrapper">
                <a href="/index.php" class="brand-logo">
                    <i class="material-icons right hide-on-small-only">
                        <img src="/assets/img/icon.png">
                    </i>Bolão 2018</a>
    
                <a href="#" data-activates="mobileNav" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>
    
                <ul class="right hide-on-med-and-down">
                    <?php if(date('m/d/Y H:i:s') < date_format(date_create('06/15/2018 00:00:00'), 'm/d/Y H:i:s') && (!isset($_GET["admin"]) || $_GET["admin"] != "thiago")) { ?>
                            
                        <li>
                            <a href="/apresentacao.php">Apresentação</a>
                        </li>

                    <?php } else { ?>

                        <li>
                            <a href="/login.php" class="login">Login</a>
                        </li>
                        <li>
                            <a href="/index.php">Ranking</a>
                        </li>
                        <li>
                            <a href="/ganhador.php">Ganhador</a>
                        </li>

                    <?php } ?>
                    <li class="active">
                        <a href="/contato.php">Contato</a>
                    </li>
                    <li>
                        <a href="/regulamento.php">Regulamento</a>
                    </li>
                </ul>
    
            </div>
    
            <div class="nav-content" style="border-top: 3px solid rgba(0,0,0,0.1)">
                <form onsubmit="return false">
                    <div class="input-field">
                        <input type="search" id="searchVal" placeholder="Pesquisar Nome" required style="margin: 0; padding-left: 3.5em;" name="nome">
                        <i class="material-icons">search</i>
                        <i class="material-icons" style="top: -15%;">close</i>
                    </div>
                </form>
            </div>
        </nav>
    
        <ul class="side-nav" id="mobileNav">
            <?php if(date('m/d/Y H:i:s') < date_format(date_create('06/15/2018 00:00:00'), 'm/d/Y H:i:s') && (!isset($_GET["admin"]) || $_GET["admin"] != "thiago")) { ?>
                            
                <li>
                    <a href="/apresentacao.php">Apresentação</a>
                </li>

            <?php } else { ?>

                <li>
                    <a href="/login.php" class="login">Login</a>
                </li>
                <li>
                    <a href="/index.php">Ranking</a>
                </li>
                <li>
                    <a href="/ganhador.php">Ganhador</a>
                </li>

            <?php } ?>
            <li class="active">
                <a href="/contato.php">Contato</a>
            </li>
            <li>
                <a href="/regulamento.php">Regulamento</a>
            </li>
        </ul>
    </header>

    <main id="conteudo" class="container">
        <h1>Contato</h1>
        <p>
            Entre em contato conosco:
        </p>
        <div id="form-email">
            <form id="form" style="margin-top: 45px;" action="assets/php/contact.php" method="post">
            <!-- accept-charset="utf-8" -->
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input name="nome" id="nome" type="text" placeholder="Nome Completo" required>
                        <label for="nome" class="active">Nome</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input name="email" id="email" type="email" placeholder="seuemail@exemplo.com.br" required>
                        <label for="email" class="active">Email</label>
                    </div>
                </div>
                <div class="input-field">
                    <input name="assunto" id="assunto" type="text" placeholder="Meu Assunto" required>
                    <label for="email">Assunto</label>
                </div>
                <div class="input-field">
                    <textarea name="mensagem" id="mensagem"  class="materialize-textarea" data-length="750" maxlength="750" placeholder='Insira sua mensagem e clique em "Enviar"!' required></textarea>
                    <label for="mensagem">Mensagem</label>
                </div>
                <div id="submit" class="input-field" style="display: inline-block;">
                    <input type="submit" class="btn colorA waves-effect" value="Enviar">
                    <img id="loading" class="hide" src="\assets\img\loading.gif">
                </div>
            </form>
        </div>
    </main>

    <div id="myModal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>Mensagem Enviada!</h4>
            <p>Sua mensagem foi enviada com sucesso!</p>
            <p>Obrigado por entrar em contato!</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Fechar</a>
        </div>
    </div>

    <div id="errorModal" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>ERRO</h4>
            <p>Sua mensagem não pode ser enviada! Verifique sua conexão e tente enviar novamente.</p>
            <p>Se os problemas persistirem, entre em contato utilizando um dos canais de comunicação presentes no rodapé da página!</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Fechar</a>
        </div>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Contatos</h5>
                    <p class="grey-text text-lighten-4">
                        <a href="/contato.php" class="grey-text text-lighten-4">Formulário</a>
                        <br>
                        <a href="mailto:bolaodomauricio@gmail.com" class="grey-text text-lighten-4">bolaodomauricio@gmail.com</a>
                    </p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Notícias</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="http://globoesporte.globo.com/futebol/copa-do-mundo" target="_blank">Globo Esporte</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="https://esporte.uol.com.br/futebol/copa-do-mundo/" target="_blank">UOL Esporte</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="http://www.fifa.com/worldcup/" target="_blank">FIFA</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        Aplicação Web
                        <br> Bolão Copa do Mundo 2018
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <a class="grey-text text-lighten-4" href="http://www.pessia.xyz/" target="_blank">Desenvolvido por
                            <strong>Thiago Pessia</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        $("#form").on("submit", function (event) {
            event.preventDefault();

            $("#submit i").addClass("disabled");
            $("#loading").removeClass("hide");

            var myData = { nome: $("#nome").val(), email: $("#email").val(), assunto: $("#assunto").val(), mensagem: $("#mensagem").val().replace(/(?:\r\n|\r|\n)/g, '<br />') }

            $.ajax({
                method: "POST",
                url: "assets/php/contact.php",
                data: myData,
                success: function (data) {
                    if (data == "1") {
                        $("#email, #mensagem, #assunto, #nome").val("");
                        $('#myModal').modal('open');
                    }
                    else {
                        $("#errorModal").modal("open");
                    }
                },
                error: function () {
                    $("#errorModal").modal("open");
                },
                complete: function() {
                    $("#submit i").removeClass("disabled");
                    $("#loading").addClass("hide");
                }
            });
        });
    </script>

    <script type="text/javascript">
        $('.collapsible').collapsible();
        $(".button-collapse").sideNav();
        $(document).ready(function () {
            $('.modal').modal();
        });
    </script>
    
</body>

</html>
