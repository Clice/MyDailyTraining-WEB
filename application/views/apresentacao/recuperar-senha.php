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
                                    <h4 class="card-subtitle text-xs-center pt-2" id="nomeRecuperarSenha"><span>Recuperar senha</span></h4>
                                    <h4 class="card-subtitle text-xs-center pt-2" id="nomeAlterarSenha"><span>Alterar Senha</span></h4>
                                </div>
                                <!-- CORPO DO LOGIN -->           
                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <form class="form" id="formRecuperarSenha" name="formRecuperarSenha">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-12" >
                                                        <div class="offset-md-1 col-md-10" id="recuperarSenha">
                                                            <label style="text-align: center">Digite o CPF para verificar a conta e recuperar a senha.</label>
                                                            <input class="form-control" type="text" id="cpfUsuario" maxlength="11" value="" 
                                                                   placeholder="Digite o CPF" name="cpfUsuario" onchange="verificarCpf();" autofocus="">
                                                            <small><span id='msnCPF'></span></small>
                                                            <br>
                                                        </div>
                                                        <div class="offset-md-1 col-md-10" id="alterarSenha">
                                                            <!-- NOVA SENHA -->
                                                            <label>Digite a nova senha:</label>
                                                            <input type="password" id="senhaUsuario" minlength="6" class="form-control" value="" 
                                                                   placeholder="Digite a senha" name="senhaUsuario" onchange="verificarTamanhoSenha();">
                                                            <small><span id='msnSenha'></span></small>
                                                            <br>
                                                            <!-- CONFIRMA NOVA SENHA -->
                                                            <label>Confirme a Senha:</label>
                                                            <input type="password" id="confirmarSenha" minlength="6" class="form-control" value="" 
                                                                   placeholder="Digite a senha novamente" name="confirmarSenha" onchange="verificarSenhasIguais();">
                                                            <small><span id='msnSenhasIguais'></span></small>
                                                            <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="offset-md-3 col-md-5" id="botaoRecuperarSenha">
                                            <button style="margin-left: 15px;" type="submit" class="btn btn-blue btn-lg btn-block" onclick="recuperarSenha();"><i class="icon-search"></i> Procurar</button>
                                        </div>
                                        <div class="offset-md-3 col-md-5"id="botaoAlterarSenha">
                                            <button style="margin-left: 15px;" type="submit" class="btn btn-blue btn-lg btn-block" onclick="alterarSenha();"><i class="icon-save"></i> Alterar</button>
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

        <!-- MODAL - NENHUM USUÁRIO ENCONTRADO -->
        <div class="modal fade text-xs-left" data-backdrop="static" id="usuario-nao-encontrado" name="usuario-nao-encontrado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Nenhum usuário encontrado.</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL - SENHAS DIFERENTES -->
        <div class="modal fade text-xs-left" data-backdrop="static" id="senhas-diferentes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Senhas diferentes.</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL - NENHUM USUÁRIO ENCONTRADO -->
        <div class="modal fade text-xs-left" data-backdrop="static" id="alterar-senha-sucesso" name="alterar-senha-sucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Senha alterada com sucesso.</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href = '<?php echo base_url('login'); ?>'" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL - NENHUM USUÁRIO ENCONTRADO -->
        <div class="modal fade text-xs-left" data-backdrop="static" id="alterar-senha-erro" name="alterar-senha-erro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao alterar a senha.</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL - FALHA AO SE CONECTAR COM A INTERNET -->
        <div class="modal fade text-xs-left" data-backdrop="static" id="falha-internet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Sem conexão com a Internet.</h4>
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
                $.ajax({
                    url: "<?php echo base_url('UsuarioController/cVerificarCPF') ?>",
                    type: "POST",
                    data: $('#formRecuperarSenha').serialize(),
                    dataType: "JSON",
                    success: function (data) {
                        if (data.existe) {
                            $("#nomeRecuperarSenha").hide();
                            $("#recuperarSenha").hide();
                            $("#botaoRecuperarSenha").hide();
                            $("#nomeAlterarSenha").show();
                            $("#alterarSenha").show();
                            $("#botaoAlterarSenha").show();
                        } else {
                            $('#usuario-nao-encontrado').modal('show');
                        }
                    },
                    error: function (request, status, error) {
                        $('#falha-internet').modal('show');
                    }
                });
            }

            function alterarSenha() {
                var senhaUsuario = $('#senhaUsuario').val();
                var confirmarSenha = $('#confirmarSenha').val();

                if (senhaUsuario !== confirmarSenha) {
                    $('#senhas-diferentes').modal('show');
                } else {
                    $.ajax({
                        url: "<?php echo base_url('UsuarioController/cAlterarSenha') ?>",
                        type: "POST",
                        data: $('#formRecuperarSenha').serialize(),
                        dataType: "JSON",
                        success: function (data) {
                            if (data.success) {
                                $('#alterar-senha-sucesso').modal('show');
                            } else {
                                $('#alterar-senha-erro').modal('show');
                            }
                        },
                        error: function (request, status, error) {
                            $('#falha-internet').modal('show');
                        }
                    });
                }
            }
        </script>
        <script src="<?php echo base_url('assets/js/sistema/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/sistema/bootstrap.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/sistema/app.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/outros/valida-cpf-cnpj.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/outros/valida-senha.js'); ?>" type="text/javascript"></script>
    </body>
</html>