<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <!-- INFORMAÇÕES DA PÁGINA -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo base_url('assets/imagens/Icon.png'); ?>">

        <!-- TÍTULO DA PÁGINA -->
        <title>MyDailyTraining - Página de Ajuda</title>

        <!-- CSS -->
        <link href="<?php echo base_url('assets/layout/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/apresentacao/faq.css'); ?>" rel="stylesheet">

        <!-- FONTES -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    </head>

    <body id="page-top" class="index">

        <!-- MENU DE NAVEGAÇÃO -->
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top affix">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">MyDailyTraining</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Voltar para a Página Inicial</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- FAQ -->
        <section id="faq">
            <div class="container">
                <!-- NOME DA PÁGINA -->
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Dúvidas?</h2>
                        <h3 class="section-subheading text-muted">Clique no item para abrir o card e ver a descrição da funcionalidade.</h3>
                    </div>
                </div>

                <!-- SISTEMA WEB -->
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#sistemaWeb" aria-expanded="true" aria-controls="collapse-example" class="d-block">
                                    <i class="fa fa-chevron-down pull-right"></i> Sistema Web
                                </a>
                            </h4>
                        </div>
                        <div id="sistemaWeb" class="panel-collapse collapse">
                            <div class="card-body">

                                <!-- LOGIN NO SISTEMA WEB -->
                                <br>
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#item1" aria-expanded="true" aria-controls="collapse-example" class="d-block">
                                                    <i class="fa fa-chevron-down pull-right"></i> Efetuar Login no Sistema Web
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="item1" class="panel-collapse collapse">
                                            <div class="card-body">
                                                <ul>
                                                    <li>1º - Digite o seu login no campo;</li>
                                                    <li>2º - Digite a sua senha no campo;</li>
                                                    <li>3º - Depois clique no botão "Login."</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- CRIAR TREINO DO ALUNO NO SISTEMA WEB -->
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#item2" aria-expanded="true" aria-controls="collapse-example" class="d-block">
                                                    <i class="fa fa-chevron-down pull-right"></i> Definir Treino do Aluno
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="item2" class="panel-collapse collapse">
                                            <div class="card-body">
                                                <ul>
                                                    <li>1º - Acesse a lista de alunos da sua academia;</li>
                                                    <li>2º - Selecione o aluno clicando em "Ver Perfil";</li>
                                                    <li>3º - Depois clique no botão "Definir Treino";</li>
                                                    <li>4º - Insira uma descrição para o treino;</li>
                                                    <li>5º - Depois clique no botão "Definir Treino";</li>
                                                    <li>6º - Depois selecione o dias que o aluno vai realizar aquele treino;</li>
                                                    <li>7º - Após isso, selecione os exercícios para o aluno e clique em "Continuar";</li>
                                                    <li>8º - Defina os detalhes como Série, Repetições, Carga, Descanso de cada exercício clicando em "Editar";</li>
                                                    <li>9º - Para finalizar clique em "Salvar".</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- REALIZAR AVALIAÇÃO FÍSICA NO SISTEMA WEB -->
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#item3" aria-expanded="true" aria-controls="collapse-example" class="d-block">
                                                    <i class="fa fa-chevron-down pull-right"></i> Realizar Avaliação Física do Aluno
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="item3" class="panel-collapse collapse">
                                            <div class="card-body">
                                                <ul>
                                                    <li>1º - Acesse a lista de alunos da sua academia;</li>
                                                    <li>2º - Selecione o aluno clicando em "Ver Perfil";</li>
                                                    <li>3º - Depois clique no botão "Realizar Avaliação Física";</li>
                                                    <li>4º - Insira os valores obtidos na avaliação do aluno;</li>
                                                    <li>5º - Para finalizar clique em "Salvar".</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- REALIZAR AVALIAÇÃO FÍSICA NO SISTEMA WEB -->
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#item4" aria-expanded="true" aria-controls="collapse-example" class="d-block">
                                                    <i class="fa fa-chevron-down pull-right"></i> Imprimir Ficha de Treino do Aluno
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="item4" class="panel-collapse collapse">
                                            <div class="card-body">
                                                <ul>
                                                    <li>1º - Acesse a lista de alunos da sua academia;</li>
                                                    <li>2º - Selecione o aluno clicando em "Ver Perfil";</li>
                                                    <li>3º - Depois clique no botão "Imprimir Ficha";</li>
                                                    <li>4º - Após a ficha ser gerada, você pode imprimir ou baixar ela em um arquivo PDF.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- APLICATIVO MOBILE -->
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#aplicativoMobile" aria-expanded="true" aria-controls="collapse-example" class="d-block">
                                    <i class="fa fa-chevron-down pull-right"></i> Sistema Web
                                </a>
                            </h4>
                        </div>
                        <div id="aplicativoMobile" class="panel-collapse collapse">
                            <div class="card-body">

                                <!-- LOGIN NO APLICATIVO MOBILE -->
                                <br>
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#item5" aria-expanded="true" aria-controls="collapse-example" class="d-block">
                                                    <i class="fa fa-chevron-down pull-right"></i> Efetuar Login no Sistema Web
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="item5" class="panel-collapse collapse">
                                            <div class="card-body">
                                                <ul>
                                                    <li>1º - Escolha o seu tipo de conta, se você é Aluno ou Instrutor;</li>
                                                    <li>2º - Digite o seu login no campo;</li>
                                                    <li>3º - Digite a sua senha no campo;</li>
                                                    <li>4º - Clique na opção "Lembrar de mim" se você quiser que seu login e senha fiquem salvos;</li>
                                                    <li>5º - Depois clique no botão "Login."</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- GERENCIAR TREINO DO ALUNO NO APLICATIVO MOBILE -->
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#item6" aria-expanded="true" aria-controls="collapse-example" class="d-block">
                                                    <i class="fa fa-chevron-down pull-right"></i> Gerenciar Treino do Aluno
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="item6" class="panel-collapse collapse">
                                            <div class="card-body">
                                                <ul>
                                                    <li>1º - Acesse o Menu Principal;</li>
                                                    <li>2º - Depois clique no ícone do "Gerenciar Treino";</li>
                                                    <li>3º - Serão mostrados todos os exercícios que você vai realizar no dia;</li>
                                                    <li>4º - Clicando em um exercício, você pode marcar ele como realizado.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ACOMPANHAR DESEMPENHO DO ALUNO NO APLICATIVO MOBILE -->
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#item7" aria-expanded="true" aria-controls="collapse-example" class="d-block">
                                                    <i class="fa fa-chevron-down pull-right"></i> Acompanhar Desempenho do Aluno
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="item7" class="panel-collapse collapse">
                                            <div class="card-body">
                                                <ul>
                                                    <li>1º - Acesse o Menu Principal;</li>
                                                    <li>2º - Depois clique no ícone do "Acompanhar Desempenho";</li>
                                                    <li>3º - Escolha qual dado você quer o desempenho;</li>
                                                    <li>4º - Após escolher o dado, será mostrado um gráfico com as quatro últimas avaliações físicas realizadas.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- CHAMAR INSTRUTOR NO APLICATIVO MOBILE -->
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#item8" aria-expanded="true" aria-controls="collapse-example" class="d-block">
                                                    <i class="fa fa-chevron-down pull-right"></i> Chamar Instrutor
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="item8" class="panel-collapse collapse">
                                            <div class="card-body">
                                                <ul>
                                                    <li>1º - Acesse o Menu Principal;</li>
                                                    <li>2º - Depois clique no botão com ícone de um sino;</li>
                                                    <li>3º - Será mostrada uma lista com os instrutores disponíveis na academia;</li>
                                                    <li>4º - Clique no instrutor que você quer chamar.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li><a href="https://www.facebook.com/mydailytraining"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/mydailytraining_equaltech/"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <span class="copyright">
                            <p style="margin-top: 10px;">&copy; 2017 - <?php echo date('Y') ?> MyDailyTraining. Todos os direitos reservados.</p>
                            <p>Desenvolvido pela EqualTech</p>
                        </span>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-inline quicklinks">
                            <li><a href="<?php echo base_url('documentos'); ?>">Documentos</a></li>
                            <li><a href="<?php echo base_url('termo-de-uso') ?>">Termo de Uso</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JS-->
        <script src="<?php echo base_url('assets/layout/vendor/jquery/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/layout/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="<?php echo base_url('assets/layout/js/jqBootstrapValidation.js'); ?>"></script>
        <script src="<?php echo base_url('assets/layout/js/validarContato.js'); ?>"></script>
        <script src="<?php echo base_url('assets/layout/js/FAQ.js'); ?>"></script>

    </body>
</html>
