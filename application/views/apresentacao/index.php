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
                            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="#equaltech">EqualTech</a>
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
                        <li class="nav-item mx-0 mx-lg-1">
                            <div class="fa fa-user"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="login.php">Área do Cliente</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- PÁGINA INICIAL -->
        <section id="home">
            <div class="container text-white">
                <label style="text-align: justify;">O MyDailyTraining busca inovar na forma que os alunos 
                    praticam atividades físicas dentro da academia, que podem encontrar dificuldade na comunicação com os 
                    instrutores e em receber auxílio deles durante a realização dos exercícios, além de precisarem acompanhar 
                    os seus treinos, trazendo mais comodidade e praticidade a vida dos alunos. </label>

                <img style="float: right; height: 50%;" src="<?php echo base_url('assets/imagens/monitor.png'); ?>">
            </div>

            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </section>

        <!-- About Section 
        <section class="bg-primary text-white mb-0" id="equaltech">
            <div class="container">
                <h2 class="text-center text-uppercase text-white">Sobre a EqualTech</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-4 text-center text-uppercase">
                        <p class="lead">Missão</p><br>
                        <p class="lead">Inovar por meio do desenvolvimento de aplicações tecnológicas, buscando trazer qualidade de vida e bom atendimento.</p>
                    </div>
                    <div class="col-lg-4 text-center text-uppercase">
                        <p class="lead">Visão</p><br>
                        <p class="lead">Estar ativo no mercado, sendo referência na promoção de soluções de software para academias.</p>
                    </div>
                    <div class="col-lg-4 text-center text-uppercase">
                        <p class="lead">Valores</p><br>
                        <p class="lead">Fornecer produtos de confiança aos clientes, com ética, honestidade, responsabilidade e compromisso para com eles e o mercado.</p>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- PLANOS -->
        <section id="planos">
            <h3 class="text-center text-uppercase text-secondary text-white">Planos</h3>
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

        <!-- About Section -->
        <section class="bg-primary text-white mb-0" id="sobre">
            <div class="container">
                <h2 class="text-center text-uppercase text-white">Sobre a EqualTech</h2>
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
                    <a class="btn btn-xl btn-outline-light" href="#">
                        <i class="fa fa-download mr-2"></i>
                        Download Now!
                    </a>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="bg-white text-secondary mb-0" id="">
            <div class="container">
                <h2 class="text-center text-uppercase text-secondary">About</h2>
                <hr class="star-dark mb-5">
                <div class="row">
                    <div class="col-lg-4 ml-auto">
                        <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="#">
                        <i class="fa fa-download mr-2"></i>
                        Download Now!
                    </a>
                </div>
            </div>
        </section>

        
        <!-- CONTATOS -->
        <section class="contact bg-primary text-center" id="contatos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
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




        <!-- Footer -->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">2215 John Daniel Drive
                            <br>Clark, MO 65243</p>
                    </div>
                    <div class="col-md-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fa fa-fw fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fa fa-fw fa-google-plus"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fa fa-fw fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fa fa-fw fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                                    <i class="fa fa-fw fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
                            <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </footer>


        <!-- RODAPÉ -->
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>Copyright &copy; EqualTech 2017</small>
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
