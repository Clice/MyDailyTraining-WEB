<html lang="pt-br" data-textdirection="ltr" class="loading">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <link rel="shortcut icon" href="<?php echo base_url('assets/imagens/Icon.png'); ?>">     

        <title>MyDailyTraining - Recuperar Senha</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sistema/bootstrap.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/fonts/icomoon.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sistema/bootstrap-extended.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sistema/app.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sistema/colors.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sistema/vertical-menu.css'); ?>">
        <script src="<?php echo base_url('assets/js/sistema/usuarios.js'); ?>" type="text/javascript"></script>

    </head>

    <body style="background-color: #209AED;" data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column blank-page blank-page">
        <!-- CORPO DA PÁGINA - LOGIN -->
        <div class="app-content content container-fluid">
            <div class="content-wrapper">
                <div class="content-body">                    
                    <section class="flexbox-container">
                        <div style="box-shadow: 10px 10px 10px rgba(0,0,0,0.5); border-radius: 10px;" class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <!-- IMAGEM INICIAL E TÍTULO -->
                                <div class="card-header no-border">
                                    <div class="card-title text-xs-center">
                                        <div class="p-1"><img style="width: 25%;" src="<?php echo base_url('assets/imagens/Icon.png'); ?>"></div>
                                    </div>
                                    <h4 class="card-subtitle text-xs-center pt-2"><span>Recuperar senha</span></h4>
                                </div>
                                <!-- CORPO DO LOGIN -->           
                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <form class="form" id="formLogin" name="formLogin">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12" >
                                                        <div class="offset-md-1 col-md-10">
                                                            <label style="text-align: center">Digite o CPF para verificar a conta e recuperar a senha.</label>
                                                            <input class="form-control" type="text" id="cpfUsuario" maxlength="11" value="" 
                                                                   placeholder="Digite o CPF" name="cpfUsuario" onchange="verificarCpf();" autofocus="">
                                                            <br>
                                                            <small><span id='msnCPF'></span></small>                                       
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="offset-md-4 col-md-5">
                                            <button type="submit" class="btn btn-blue btn-lg btn-block" onclick="recuperarSenha();"><i class="icon-search"></i> Procurar</button>
                                        </div>
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

        <!-- MODAL - LOGIN E/OU SENHA INCORRETO(S) -->
        <div class="modal fade text-xs-left" data-backdrop="static" id="incorreto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4 class="modal-title text-xs-center">Login e/ou Senha Incorreto(s)</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL - USUÁRIO BLOQUEADO -->
        <div class="modal fade text-xs-left" data-backdrop="static" id="usuario-bloqueado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4 class="modal-title text-xs-center">Usuário bloqueado! Por favor contate o(s) administrador(es) para mais informações.</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL - ACADEMIA BLOQUEADA -->
        <div class="modal fade text-xs-left" data-backdrop="static" id="academia-bloqueada" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4 class="modal-title text-xs-center">Academia bloqueada! Por favor contate a academia para mais informações.</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS-->
        <script type="text/javascript">
            function recuperarSenha() {
                var url = "<?php echo base_url('sistema/LoginController/cLogarUsuario') ?>";

                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#formLogin').serialize(),
                    dataType: "JSON",
                    success: function (data) {
                        if (data.success) {
                            window.location.href = "<?php echo base_url('pagina-principal'); ?>";
                        } else {
                            if (data.statusAcademia === false) {
                                $('#academia-bloqueada').modal('show');
                            } else if (data.statusConta === false) {
                                $('#usuario-bloqueado').modal('show');
                            } else {
                                $('#incorreto').modal('show');
                            }
                        }
                    },
                    error: function (request, status, error) {
                        alert("Erro: " + request.responseText);
                    }
                });
            }
        </script>
        <script src="<?php echo base_url('assets/js/sistema/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/sistema/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/sistema/app.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/outros/valida-cpf-cnpj.js'); ?>" type="text/javascript"></script>
    </body>
</html>