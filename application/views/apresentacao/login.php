<html lang="pt-br" data-textdirection="ltr" class="loading">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <link rel="shortcut icon" href="<?php echo base_url('assets/imagens/Icon.png'); ?>">     

        <title>MyDailyTraining - Login</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login/bootstrap.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/fonts/icomoon.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login/bootstrap-extended.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login/app.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login/colors.css'); ?>">

    </head>

    <body style="background-color: #209AED;" data-open="click" data-menu="vertical-menu" data-col="1-column" 
          class="vertical-layout vertical-menu 1-column blank-page blank-page">

        <!-- CORPO DA PÁGINA - LOGIN -->
        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-body">                    
                    <section class="flexbox-container">
                        <div style="box-shadow: 15px 15px 15px rgba(0,0,0,0.5);" class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <!-- IMAGEM INICIAL E TÍTULO -->
                                <div class="card-header no-border">
                                    <div class="card-title text-xs-center">
                                        <div class="p-1"><img style="width: 25%;" src="<?php echo base_url('assets/imagens/Icon.png'); ?>"></div>
                                    </div>
                                    <h4 class="card-subtitle text-xs-center pt-2"><span>Área do Cliente</span></h4>
                                </div>
                                <!-- CORPO DO LOGIN -->
                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <?php
                                        echo validation_errors('<div class="alert alert-danger">', '</div>');
                                        echo form_open('sistema/LoginController/cLogarUsuario');
                                        ?>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Login:</label>
                                                        <input type="text" class="form-control" placeholder="Digite o login" id="loginUsuario" autofocus=""  
                                                               name="loginUsuario">                                          
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Senha:</label>
                                                        <input type="password" class="form-control" placeholder="Digite a senha" id="senhaUsuario" 
                                                               name="senhaUsuario">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                                    <input type="checkbox" id="remember-me" class="chk-remember">
                                                    <label> Lembre-se de mim</label>
                                                </div>
                                                <div class="col-md-6 col-xs-12 text-xs-center text-md-right">
                                                    <a class="blue" href="#">Esqueceu a senha?</a></div>
                                            </div>
                                        </div>   
                                        <button type="submit" class="btn btn-blue btn-lg btn-block"><i class="icon-unlock2"></i> Login</button>
                                        <?php form_close(); ?>
                                    </div>
                                </div>
                                <div class="card-footer hidden">
                                    <p class="text-xs-center m-0">Novo no MyDailyTraining? <a class="blue" href="#">Registre-se</a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div> 

        <!-- BEGIN VENDOR JS-->
        <script src="<?php echo base_url('assets/js/login/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/login/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/login/app.js'); ?>" type="text/javascript"></script>

    </body>
</html>
