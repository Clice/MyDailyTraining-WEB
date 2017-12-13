<html lang="portuguese-brasilian">
    <head>
        <!-- INFORMAÇÕES DA PÁGINA -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="<?php echo base_url('assets/imagens/Icon.png'); ?>">
        <title>MyDailyTraining - Sistema para Gerenciamento de Academias e Acompanhamento de Alunos</title>

        <!-- CSS -->
        <link href="<?php echo base_url('assets/layout/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">      
        <link href="<?php echo base_url('assets/css/apresentacao/planos.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/apresentacao/apresentacao.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/layout/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/layout/vendor/magnific-popup/magnific-popup.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/layout/css/freelancer.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/layout/css/freelancer.css'); ?>" rel="stylesheet">

        <!-- FONTES -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    </head>

    <body id="body">

        <!-- MENU DE NAVEGAÇÃO -->
        <nav class="navbar navbar-expand navbar-dark navbar-color fixed-top" style="height:11%;">
            <div class="container">
                <img src="<?php echo base_url('assets/imagens/Icon.png'); ?>" alt="" style="height: 80%;">
                <a class="navbar-brand js-scroll-trigger" href="#home">&nbsp;&nbsp;MyDailyTraining</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse text-uppercase" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="#recursos">Recursos</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="<?php echo base_url('quem-somos.php'); ?>">EqualTech</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="#planos">Planos</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="#contatos">Contatos</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="#sobre">Sobre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- PÁGINA INICIAL -->
        <header id="home">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-lg-7 my-auto">
                        <div class="header-content mx-auto">
                            <br>
                            <h4 style="text-align: justify; color: #007bff;" class="mb-10">O MyDailyTraining busca inovar na forma que os 
                                alunos praticam atividades físicas dentro da academia, que podem encontrar dificuldade na 
                                comunicação com os instrutores e em receber auxílio deles durante a realização dos 
                                exercícios, além de precisarem acompanhar os seus treinos, trazendo mais comodidade e 
                                praticidade a vida dos alunos.</h4>
                            <br>
                            <a href="<?php echo base_url('sistema/login.php'); ?>" class="btn btn-danger btn-xl">Acesse a plataforma</a>
                        </div>
                    </div>
                    <div class="col-lg-5 my-auto">
                        <div class="device-container">
                            <div class="device-mockup galaxy_s5 portrait white">
                                <div class="device">
                                    <div class="screen">
                                        <img style="float: right; height: 50%;" src="<?php echo base_url('assets/imagens/monitor.png'); ?>"  class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        

        <!-- RECURSOS -->
        <section class="recursos bg-primary text-white mb-0" id="recursos">

            <h4 class="text-center text-uppercase">Recursos</h4>
            <br> 
            <div class="col-lg-6 smartphone">
                <img src="<?php echo base_url('assets/imagens/Smartphone.png'); ?>" alt="">
            </div>

            <div class="container-recursos text-white">
                <div class="recursos-ficha text-center pricing-grid1">
                    <h3>Ficha de Treinamento</h3>
                    <p>Não perca tempo na sala de musculação. Monte, imprima e acompanhe facilmente a ficha de treinamento dos 
                        alunos pelo computador.<p>
                </div>
                <div class="recursos-avaliacao text-center pricing-grid1">
                    <h3>Avaliação Física</h3>
                    <p>Faça as avaliações físicas, compare e gerencie a de todos os alunos da academia. <p>
                </div>
                <div class="recursos-gerenciamento text-center pricing-grid1">
                    <h3>Gerenciamento do Treino</h3>
                    <p>Gerencie seus treinos permitindo um melhor aproveitamento na academia, tudo isso na palma da sua mão.<p>
                </div>
                <div class="recursos-acompanhamento text-center pricing-grid1">
                    <h3>Acompanhar do Desempenho</h3>
                    <p>Acompanhe seus resultados a qualquer momento de forma fácil e simples.<p>
                </div>
            </div>
        </section>

        <!-- PLANOS -->
        <section class="planos" id="planos">
            <h4 class="text-center text-uppercase text-secondary text-white">Planos</h4>
            <br>
            <div class="pricing-plans">
                <div class="wrap">
                    <div class="pricing-grids" style="margin-top: 0px;">

                        <!-- PLANO SIMPLES -->
                        <div class="pricing-grid1" style="box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                            <div class="price-value">
                                <h4 style="font-size: 1em;"><a href="">SIMPLES</a></h4>
                                <h5 style="font-size: 0.7em; font-weight: normal;"><span>R$ 50,00 / mês ou<br>R$ 600,00 / ano<br></span></h5>
                            </div>
                            <div class="price-bg">
                                <br>
                                <ul style="line-height: 35px;">
                                    <li>Sistema Web (R$ 40,00)</li>
                                    <li>+ 150 Licenças</li>
                                </ul>
                                <br>
                                <ul>
                                    <li>Pacotes Adicionais:
                                        <br>1 Pacote A ou
                                        <br>1 Pacote B
                                    </li>
                                </ul>
                                <br>
                                <div class="cart1">
                                    <a class="popup-with-zoom-anim" href="#small-dialog">Fale Conosco</a>
                                </div>
                            </div>
                        </div>

                        <!-- PLANO MÉDIO -->
                        <div class="pricing-grid2" style="box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                            <div class="price-value two">
                                <h4  style="font-size: 1em;"><a href="">MÉDIO</a></h4>
                                <h5 style="font-size: 0.7em; font-weight: normal;"><span>R$ 70,00 / mês ou <br>R$ 840,00 / ano</span></h5>
                            </div>
                            <div class="price-bg">
                                <br>
                                <ul style="line-height: 35px;">
                                    <li>Sistema Web (R$ 40,00)</li>
                                    <li>+ 300 Licenças</li>
                                </ul>
                                <br>
                                <ul>
                                    <li>Pacotes Adicionais:
                                        <br>1 Pacote A ou
                                        <br>1 Pacote B ou
                                        <br>1 Pacote C</li>
                                    </li>
                                </ul>
                                <div class="cart2">
                                    <a class="popup-with-zoom-anim" href="#small-dialog">Fale Conosco</a>
                                </div>
                            </div>
                        </div>

                        <!-- PLANO PRO -->
                        <div class="pricing-grid3" style="box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                            <div class="price-value three">
                                <h4 style="font-size: 1em;"><a href="">PRO</a></h4>
                                <h5 style="font-size: 0.7em; font-weight: normal;"><span>R$ 90,00/mês ou <br>R$ 1080,00 / ano</span></h5>
                            </div>
                            <div class="price-bg">
                                <br>
                                <ul style="line-height: 35px;">
                                    <li>Sistema Web (R$ 40,00)</li>
                                    <li>+ 600 Licenças</li>
                                </ul>
                                <br>
                                <ul>
                                    <li>Pacotes Adicionais:
                                        <br>Qualquer um dos pacotes
                                    </li>
                                </ul>
                                <br><br>
                                <div class="cart3">
                                    <a class="popup-with-zoom-anim" href="#small-dialog">Fale Conosco</a>
                                </div>
                            </div>
                        </div>

                        <!-- PACOTES ADICIONAIS -->
                        <div class="pricing-grid4" style="box-shadow: 5px 5px 5px rgba(0,0,0,0.5);">
                            <div class="price-value four">
                                <h4 style="font-size: 1em;"><a href="">PACOTES</a></h4>
                                <h5 style="font-size: 0.7em; font-weight: normal;"><span>A partir de <br>R$ 10,00 / mês</span></h5>
                            </div>
                            <div class="price-bg">
                                <br>
                                <ul style="line-height: 35px;">
                                    <li>Pacote A: 50 Licenças (R$ 10,00)</li>      
                                    <li>Pacote B: 100 Licenças (R$ 17,00)</li>
                                    <li>Pacote C: 150 Licenças (R$ 25,00)</li>
                                    <li>Pacote D: 200 Licenças (R$ 30,00)</li>
                                </ul>
                                <br><br>
                                <div class="cart4">
                                    <a class="popup-with-zoom-anim" href="#small-dialog">Fale Conosco</a>
                                </div>
                            </div>
                        </div>
                        <div class="clear"> </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTATOS -->
        <section class="contact bg-primary text-center" id="contatos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center text-uppercase">
                        <h2 class="section-heading">Nossos contatos:</h2>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center">
                        <i class="fa fa-phone fa-3x"></i>
                        <h4><br>(xx) xxxxx-xxxx</h4>
                        <h4>(xx) xxxxx-xxxx</h4>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fa fa-envelope-o fa-3x"></i>
                        <h4><br>contato@mydailytraining.com.br<br></h4>
                    </div>
                </div>
            </div>
        </section>


        <!-- SOBRE -->
        <section class="mb-0" id="sobre">
            <div class="container">
                <h2 class="text-center text-uppercase">Sobre a EqualTech</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-4 ml-auto">
                        <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-dark" href="#">
                        <i class="fa fa-download mr-2"></i>
                        Download Now!
                    </a>
                </div>
            </div>
        </section>


        <!-- Footer -->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-5 mb-lg-0" style="margin-left: 33%;">
                        <h4 class="text-uppercase mb-4">Siga a EqualTech</h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fa fa-fw fa-facebook" style="margin-top: 8px;"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fa fa-fw fa-google-plus" style="margin-top: 8px;"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fa fa-fw fa-twitter" style="margin-top: 8px;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>


        <!-- RODAPÉ -->
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <p>Copyright &copy; EqualTech 2017 - <?php echo date('Y') ?> . Todos os direitos reservados.</p>
                <p>Desenvolvido por EqualTech</p>
            </div>
        </div>

        <!-- SCRIPTS -->
        <script src="<?php echo base_url('assets/layout/vendor/jquery/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/layout/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/layout/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/layout/vendor/magnific-popup/jquery.magnific-popup.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/layout/js/jqBootstrapValidation.js'); ?>"></script>
        <script src="<?php echo base_url('assets/layout/js/contact_me.js'); ?>"></script>
        <script src="<?php echo base_url('assets/layout/js/freelancer.min.js'); ?>"></script>
    </body>
</html>
