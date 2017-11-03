<html lang="pt-br">
<head>
    <title>RankQuest</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../addons/fa/css/font-awesome.min.css">

    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="../css/rankquest.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">


</head>

<body>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="nome">
                            <img src="../img/profile.png" alt="">
                            <h1>RankQuest</h1>
                            <span>Pratique seus estudos e saia na frente!</span>
                            <br>
                            <button type="button" data-toggle="modal" data-target="#login-modal" class="btn btn-primary btn-lg">Começar</button>
                        </div>
                    </div>
                </div>
            </div>    
        </header>

        <section id="informacao">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 info-item">
                        <img class="img-responsive" src="../img/birl.png"">
                        <h3>
                            Estudantes
                        </h3>
                        <p>Aprenda de forma objetiva, demonstre suas habilidades e tenha preparação adequada para conquistar a vaga dos seus sonhos.</p>
                    </div>
                    <div class="col-md-4 info-item">
                        <img class="img-responsive" src="../img/fessor.png">
                        <h3>
                            Professores
                        </h3>
                        <p>Motive os estudos fora de sala e acompanhe o desenvolvimento dos alunos.</p>
                    </div>
                    <div class="col-md-4 info-item">
                        <img class="img-responsive" src="../img/empresa.jpg">
                        <h3>
                            Empresas
                        </h3>
                        <p>Encontre os melhores candidatos avaliando o histórico de competências e habilidades.</p>
                    </div>
                </div>
            </div>
        </section>
        <footer class="text-center">
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Copyright &copy; RankQuest 2017
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="login-modal">
        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" align="center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </button>
                    </div>

                    <!-- Begin # DIV Form -->
                    <div id="div-forms">

                        <!-- Begin # Login Form -->
                        <form id="login-form">
                          <div class="modal-body">
                            <div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Digite seu nome de usuário e senha.</span>
                            </div>
                            <input id="login_username" class="form-control" type="text" placeholder="Nome de Usuário" required>
                            <input id="login_password" class="form-control" type="password" placeholder="Senha" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Lembrar-se
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button onclick="window.location.href='user.html'; type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                            <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Esqueceu sua senha?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Registrar</button>
                            </div>
                        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
                        <div class="modal-body">
                            <div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Digite seu e-mail.</span>
                            </div>
                            <input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                            </div>
                            <div>
                               <button onclick="window.location.href='user.php'; type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Registrar</button>
                            </div>
                        </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
                        <div class="modal-body">
                            <div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Registrar uma conta.</span>
                            </div>
                            <input id="register_username" class="form-control" type="text" placeholder="Login" required>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Esqueceu sua senha?</button>
                            </div>
                        </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->
</div>

<!-- Script Bootstrap -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script src="../js/rankQuest.js"></script>
</body>  
</html>