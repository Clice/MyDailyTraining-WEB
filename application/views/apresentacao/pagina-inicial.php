<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <!-- INFORMAÇÕES DA PÁGINA -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo base_url('assets/imagens/Icon.png'); ?>">

        <!-- TÍTULO DA PÁGINA -->
        <title>MyDailyTraining - Sistema para Gerenciamento de Academias e Acompanhamento de Alunos</title>

        <!-- CSS -->
        <link href="<?php echo base_url('assets/layout/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/layout/css/agency.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/apresentacao/planos.css'); ?>" rel="stylesheet">

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
        <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
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
                            <a class="page-scroll" href="#sobre">Sobre</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#recursos">Recursos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#planos">Planos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#roadmap">Roadmap</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contatos">Contatos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#equaltech">EqualTech</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#equipe">Equipe</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- HEADER -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">
                        <img src="<?php echo base_url('assets/imagens/Icon 256 x 256.png'); ?>" class="img-fluid" alt="MyDailyTraining">
                    </div>
                    <div class="intro-lead-in">Bem-vindo ao MyDailyTraining!</div>
                    <div class="intro-heading"></div>
                    <a href="<?php echo base_url('login'); ?>" class="page-scroll btn btn-lg">Acesse a Plataforma</a>
                </div>
            </div>
        </header>

        <!-- SOBRE O MYDAILYTRAINING -->
        <section id="sobre" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Sobre o MDT</h2><br>
                        <h3 class="section-subheading text-muted">O MyDailyTraining busca inovar na
                            forma que os alunos praticam atividades físicas dentro da academia, que podem encontrar dificuldade na
                            comunicação com os instrutores e em receber auxílio deles durante a realização dos
                            exercícios, além de precisarem acompanhar os seus treinos, trazendo mais comodidade e
                            praticidade a vida dos alunos.</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <!-- APLICATIVO MOBILE -->
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-android fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Aplicativo Android</h4>
                        <p class="text-muted">O MyDailyTraining possui um Aplicativo Mobile Android voltado para os alunos
                            da academia onde eles podem acompanhar seu desempenho, gerenciar seu treino e solicitar
                            atendimento do instrutor.</p>
                    </div>
                    <!-- DESIGN RESPONSIVO -->
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Design Responsivo</h4>
                        <p class="text-muted">Acesse o MyDailyTraining de qualquer dispositivo, pois o sistema conta com um layout simples e prático possibilitando que o usuário realize suas tarefas de forma rápida.</p>
                    </div>
                    <!-- SEGURANÇA -->
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fa fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="service-heading">Segurança</h4>
                        <p class="text-muted">Prezamos pela segurança de todos os dados no sistema desde instrutores, funcionários e alunos. Assim mantendo a máxima confiabilidade dos nossos usuários.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- RECURSOS DO SISTEMA -->
        <section id="recursos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Recursos</h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <!-- FICHA DE TREINAMENTO -->
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo base_url('assets/imagens/apresentacao/recursos/1.png'); ?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <br>
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Ficha de Treinamento</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Não perca tempo na sala de musculação. Monte, imprima e acompanhe facilmente a ficha de treinamento dos alunos pelo computador.</p>
                                    </div>
                                </div>
                            </li>

                            <!-- AVALIAÇÃO FÍSICA -->
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo base_url('assets/imagens/apresentacao/recursos/2.png'); ?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <br>
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Avaliação Física</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Faça as avaliações físicas, compare e gerencie a de todos os alunos da academia.</p>
                                    </div>
                                </div>
                            </li>

                            <!-- GERENCIAMENTO DO TREINO -->
                            <li>
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo base_url('assets/imagens/apresentacao/recursos/3.png'); ?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <br>
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Gerenciamento do Treino</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Gerencie seus treinos permitindo um melhor aproveitamento na academia, tudo isso na palma da sua mão.</p>
                                    </div>
                                </div>
                            </li>

                            <!-- ACOMPANHAR DESEMPENHO -->
                            <li class="timeline-inverted">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="<?php echo base_url('assets/imagens/apresentacao/recursos/4.png'); ?>" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <br>
                                    <div class="timeline-heading">
                                        <h4 class="subheading">Acompanhar Desempenho</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">Acompanhe seus resultados a qualquer momento de forma fácil e simples.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- PLANOS DO SISTEMA -->
        <section id="planos" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">PLANOS</h2>
                    </div>
                </div>
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
                                        <a class="popup-with-zoom-anim page-scroll" href="#contatos">Fale Conosco</a>
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
                                        <a class="popup-with-zoom-anim page-scroll" href="#contatos">Fale Conosco</a>
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
                                        <a class="popup-with-zoom-anim page-scroll" href="#contatos">Fale Conosco</a>
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
                                    <div style="height: 30px;">

                                    </div>
                                    <div class="cart4">
                                        <a class="popup-with-zoom-anim page-scroll" href="#contatos">Fale Conosco</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SOBRE O ROADMAP -->
        <section id="roadmap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">ROADMAP</h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                </div>
                <div class="row">                                          
                    <div class="col-md-6">
                        <h3 class="section-heading">2018</h3><br>
                        <span class="label label-primary">Q1</span>
                        <label style="font-size: 20px;" class="service-heading">JUNHO a AGOSTO</label>
                        <h4 class="service-heading">Pagamento com PagSeguro</h4>
                        <p class="text-muted">Academias poderão pagar os planos através da Internet.</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="section-heading">2018 - 2019</h3><br> 
                        <span class="label label-primary">Q2</span>
                        <label style="font-size: 20px;" class="service-heading">SETEMBRO a JUNHO</label>
                        <h4 class="service-heading">Módulo Financeiro</h4>
                        <p class="text-muted">Manutenção do pagamento e das informações financeiras da academia através do Sistema Web.</p>
                    </div>  
                </div>
            </div>
        </section>

        <!-- CONTATOS DA EMPRESA -->
        <section id="contatos" class="bg-light-blue-mdt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Nossos Contatos</h2>
                        <h3 class="text-white section-subheading">Entre em contato conosco para qualquer eventual dúvida.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form" name="formEnviarContato" id="formEnviarContato">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="nomeContato" class="form-control" placeholder="Seu nome *" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="emailContato" class="form-control" placeholder="Seu e-mail *" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" id="telefoneContato" class="form-control" placeholder="Seu telefone *" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea id="mensagemContato" class="form-control" placeholder="Digite sua mensagem aqui..." required></textarea>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" id="enviarContato" name="enviarContato" class="btn btn-xl" onclick="enviarEmailContato();"><i class="fa fa-envelope"></i> Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 ml-auto text-center">
                        <i class="fa fa-phone fa-3x text-white"></i>
                        <h4 class="text-white"><br>(xx) xxxxx-xxxx</h4>
                        <h4 class="text-white">(xx) xxxxx-xxxx</h4>
                    </div>
                    <div class="col-lg-6 mr-auto text-center">
                        <i class="fa fa-envelope-o fa-3x text-white"></i>
                        <h5 class="text-white"><br>contato@mydailytraining.com.br<br></h5>
                    </div>
                </div>
            </div>
        </section>

        <!-- SOBRE A EQUALTECH -->
        <section id="equaltech">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">EqualTech</h2>
                        <h3 class="section-subheading text-muted">A EqualTech é uma empresa comprometida com a qualidade de seus produtos e com a satisfação de seus clientes. Tendo como principais características a flexibilidade e o tempo de resposta de acordo com a velocidade exigida pelo mercado, com o foco no desenvolvimento de soluções comerciais para pequenas e médias empresas. Sempre buscamos atender bens os nossos clientes e principalmente a satisfação completa do consumidor.</h3>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-4 text-center">
                            <h2 class="section-subheading">Missão</h2>
                            <h3 class="section-subheading text-muted">Inovar por meio do desenvolvimento de aplicações tecnológicas, buscando trazer
                                qualidade de vida e bom atendimento.</h3>
                        </div>
                        <div class="col-lg-4 text-center">
                            <h2 class="section-subheading">Visão</h2>
                            <h3 class="section-subheading text-muted">Estar ativo no mercado, sendo referência na promoção de soluções de software para
                                academias.</h3>
                        </div>
                        <div class="col-lg-4 text-center">
                            <h2 class="section-subheading">Valores</h2>
                            <h3 class="section-subheading text-muted">Fornecer produtos de confiança aos clientes, com ética, honestidade, responsabilidade e
                                compromisso para com eles e o mercado..</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SOBRE A EQUALTECH -->
        <section id="equipe" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Nossa Equipe</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- CLICE BEZERRA -->
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="<?php echo base_url('assets/imagens/apresentacao/equaltech/clice_romao.jpeg'); ?>" class="img-responsive img-circle" alt="">
                            <h4>Clice Romão</h4>
                            <p class="text-muted">Gerente de Projeto e Desenvolvedora</p>
                        </div>
                    </div>
                    <!-- LUCAS COSTA -->
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="<?php echo base_url('assets/imagens/apresentacao/equaltech/lucas_costa.jpeg'); ?>" class="img-responsive img-circle" alt="">
                            <h4>Lucas Costa</h4>
                            <p class="text-muted">Desenvolvedor e Designer</p>
                        </div>
                    </div>
                    <!-- TATIANE MORAIS -->
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="<?php echo base_url('assets/imagens/apresentacao/equaltech/tatiane_morais.jpeg'); ?>" class="img-responsive img-circle" alt="">
                            <h4>Tatiane Morais</h4>
                            <p class="text-muted">Analista de Negócios</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- ALEXANDRE BARBOSA -->
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="<?php echo base_url('assets/imagens/apresentacao/equaltech/alexandre_barbosa.jpeg'); ?>" class="img-responsive img-circle" alt="">
                            <h4>Alexandre Barbosa</h4>
                            <p class="text-muted">Analista de Sistemas</p>
                        </div>
                    </div>
                    <!-- WESLEY SARAIVA -->
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="<?php echo base_url('assets/imagens/apresentacao/equaltech/wesley_saraiva.jpeg'); ?>" class="img-responsive img-circle" alt="">
                            <h4>Wesley Saraiva</h4>
                            <p class="text-muted">Gerente de Testes</p>
                        </div>
                    </div>
                    <!-- IZIDORIO FEITOSA -->
                    <div class="col-sm-4">
                        <div class="team-member">
                            <img src="<?php echo base_url('assets/imagens/apresentacao/equaltech/francisco_izidorio.jpeg'); ?>" class="img-responsive img-circle" alt="">
                            <h4>Izidorio Feitosa</h4>
                            <p class="text-muted">Analista de Testes</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <p class="large text-muted text-center"><i>"Não é o mais forte que sobrevive, nem o mais inteligente.<br>Quem sobrevive é o mais disposto à mudança."</i><br>Charles Darwin.</p>
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
                            <li><a href="<?php echo base_url('faq') ?>">FAQ</a>
                            </li>
                            <li><a href="#">Termos de Uso</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- SCRIPTS -->
        <!-- JS-->
        <script type="text/javascript">
            function enviarEmailContato() {
                var nomeContato = $('#nomeContato').val();
                var emailContato = $('#emailContato').val();
                var telefoneContato = $('#telefoneContato').val();
                var mensagemContato = $('#mensagemContato').val();

                if ((nomeContato === "") || (emailContato === "") || (telefoneContato === "") || (mensagemContato === "")) {
                    $('#dados-obrigatorios-contato').modal('show');
                } else {
                    var url = "<?php echo base_url('InicialController/cEnviarEmailContato') ?>";
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: $('#formEnviarContato').serialize(),
                        dataType: "JSON",
                        success: function (data) {
                            if (data.success) {
                                $('#dados-email-sucesso').modal('show');
                            } else {
                                $('#dados-email-erro').modal('show');
                            }
                        },
                        error: function (request, status, error) {
                            alert("Erro: " + request.responseText);
                        }
                    });
                }
            }
        </script>
        <script src="<?php echo base_url('assets/layout/vendor/jquery/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/layout/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="<?php echo base_url('assets/layout/js/jqBootstrapValidation.js'); ?>"></script>
        <script src="<?php echo base_url('assets/layout/js/validarContato.js'); ?>"></script>
        <script src="<?php echo base_url('assets/layout/js/agency.min.js'); ?>"></script>
    </body>
</html>

<!-- MODAL - CAMPOS OBRIGATÓRIOS NÃO PREENCHIDOS -->
<div class="modal fade text-xs-left" id="dados-obrigatorios-contato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"><i class="fa fa-warning"></i> Dados obrigatórios não preenchidos!</h4>
                <h5 class="modal-body text-center">Por favor preencha todos os campos para enviar e-mail de contato. Agredecemos a sua compreensão.
                    <br><br>Atenciosamente EqualTech</h5>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - E-MAIL ENVIADO COM SUCESSO -->
<div class="modal fade text-xs-left" id="dados-email-sucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"><i class="fa fa-check"></i> E-mail enviado com sucesso!</h4>
                <h5 class="modal-body text-center">Obrigado pela preferência, responderemos o mais rápido possível.
                    <br><br>Atenciosamente EqualTech</h5>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" onclick="window.location.reload();">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO ENVIAR O E-MAIL -->
<div class="modal fade text-xs-left" id="dados-email-erro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center"><i class="fa fa-remove"></i> Erro ao enviar o e-mail!</h4>
                <h5 class="modal-body text-center">Aconteceu algum erro, por favor preencha todos os campos e tente novamente.
                    <br><br>Atenciosamente EqualTech</h5>
                <div class="modal-footer">
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
