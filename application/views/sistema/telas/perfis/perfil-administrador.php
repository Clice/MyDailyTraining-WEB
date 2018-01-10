
<!-- DODOS DO ADMINISTRADOR -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DO PÁGINA - DODOS DO ADMINISTRADOR ESCOLHIDO -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <!-- TÍTULO DO PÁGINA - NOME DO ADMINISTRADOR -->
                                    <?php foreach ($perfilAdministrador as $administrador) { ?>
                                        <div class="content-header row">
                                            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                                <h2 class="content-header-title"><?php echo $administrador->nomeUsuario; ?></h2>
                                            </div>

                                        </div>
                                        <hr>
                                        <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $administrador->idUsuario; ?>">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>
                                            <div class="row">
                                                <!-- CPF DO ADMINISTRADOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>CPF: </strong></h4>
                                                        <h4><?php echo $administrador->cpfUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- RG DO ADMINISTRADOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>RG: </strong></h4>
                                                        <h4><?php echo $administrador->rgUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DO ADMINISTRADOR -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h4><strong>E-mail: </strong></h4>
                                                        <h4><?php echo $administrador->emailUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO ADMINISTRADOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Telefone: </strong></h4>
                                                        <h4><i class="icon-phone-square"></i> <?php echo $administrador->telefoneUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- SEXO DO ADMINISTRADOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Sexo: </strong></h4>
                                                        <h4><?php echo $administrador->sexoUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- DATA DO NASCIMENTO DO ADMINISTRADOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Data de Nascimento: </strong></h4>
                                                        <h4><?php echo $administrador->dataNascimentoUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- IDADE DO ADMINISTRADOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Idade: </strong></h4>
                                                        <h4><?php echo $administrador->idadeUsuario; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- ENDEREÇO DO ADMINISTRADOR -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h4><strong>Endereço: </strong></h4>
                                                        <h4><?php echo $administrador->enderecoUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CEP DO ADMINISTRADOR -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>CEP: </strong></h4>
                                                        <h4><?php echo $administrador->cepUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DO ADMINISTRADOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Bairro: </strong></h4>
                                                        <h4><?php echo $administrador->bairroUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CIDADE DO ADMINISTRADOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Cidade: </strong></h4>
                                                        <h4><?php echo $administrador->cidadeUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- ESTADO DO ADMINISTRADOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Estado: </strong></h4>
                                                        <h4><?php echo $administrador->estadoUsuario; ?></h4>
                                                    </div>
                                                </div>                                     
                                            </div>
                                        </div>
                                        <hr style="margin-top: 4%;">
                                        <!-- BOTÕES -->
                                        <div style="float: right;" class="form-actions">
                                            <button type="button"                               
                                            <?php if ($administrador->statusConta == 1) { ?>
                                                        class="btn btn-blue"
                                                        onclick="modalDesBloquearAdministrador(this, <?php echo $administrador->idUsuario; ?>, true);"
                                                    <?php } else { ?>
                                                        class="btn btn-black"
                                                        onclick="modalDesBloquearAdministrador(this, <?php echo $administrador->idUsuario; ?>, false);"
                                                    <?php } ?>
                                                    ><i <?php if ($administrador->statusConta == 1) { ?>
                                                        class="icon-unlock"
                                                    <?php } else { ?>
                                                        class="icon-lock"
                                                    <?php } ?>></i><?php if ($administrador->statusConta) { ?> Bloquear <?php } else { ?> Desbloquear <?php } ?>
                                            </button>
                                            <button type="button" class="btn btn-green" onclick="window.location.href = '<?php echo base_url('editar-administrador/' . md5($administrador->idUsuario)); ?>'">
                                                <i class="icon-edit"></i> Editar
                                            </button>
                                            <button type="button" class="btn btn-danger" onclick="modalExcluirAdministrador(<?php echo $administrador->idUsuario; ?>);">
                                                <i class="icon-trash"></i> Excluir
                                            </button>
                                            <button type="button" class="btn btn-primary" onclick="window.location.href = '<?php echo base_url('lista-administradores'); ?>'">
                                                <i class="icon-chevron-left2"></i> Voltar
                                            </button>
                                        </div>                                        
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>       
            </section>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA EXCLUIR O ADMINISTRADOR? -->
<div class="modal fade text-xs-left" id="excluir-administrador" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning"></i> Deseja excluir o(a) administrador(a)?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" onclick="excluirAdministrador();">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ADMINISTRADOR EXCLUÍDO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-sucesso-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle"></i> Administrador(a) excluído(a) com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-administradores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO EXCLUIR O ADMINISTRADOR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-erro-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove"></i> Erro ao excluir o(a) administrador(a)</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA BLOQUEAR O ADMINISTRADOR? -->
<div class="modal fade text-xs-left" id="bloquear-administrador" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning"></i> Deseja bloquear o(a) administrador(a)?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="bloqueia-administrador">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-bloqueia-administrador">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ADMINISTRADOR BLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-sucesso-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle"></i> Administrador(a) bloqueado(a) com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-administradores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO BLOQUEAR O ADMINISTRADOR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-erro-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove"></i> Erro ao bloquear o(a) administrador(a)</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-administradores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA DESBLOQUEAR O ADMINISTRADOR? -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning"></i> Deseja desbloquear o(a) administrador(a)?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="desbloqueia-administrador">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-desbloqueia-administrador">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ADMINISTRADOR DESBLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-sucesso-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle"></i> Administrador(a) desbloqueado(a) com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-administradores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO DESBLOQUEAR O ADMINISTRADOR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-erro-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove"></i> Erro ao desbloquear o(a) administrador(a)</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-administradores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- FUNÇÕES EM JAVASCRIPT -->
<script type="text/javascript">
    function excluirAdministrador() {

        var dados = "idUsuario=" + $('#idUsuario').val();
        $.ajax({
            url: "<?php echo base_url('sistema/AdministradorController/cExcluirAdministrador'); ?>",
            type: "POST",
            data: dados,
            dataType: 'json',
            success: function (data) {
                $('#excluir-administrador').modal('hide');
                if (data.success) {
                    $('#excluir-sucesso-administrador').modal('show');
                } else {
                    $('#excluir-erro-administrador').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function bloquearAdministrador(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/AdministradorController/cBloquearAdministrador'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#bloquear-administrador').modal("hide");
                if (data.success) {
                    $('#bloquear-sucesso-administrador').modal("show");
                } else {
                    $('#bloquear-erro-administrador').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function desbloquearAdministrador(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/AdministradorController/cDesbloquearAdministrador'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#desbloquear-administrador').modal("hide");
                if (data.success) {
                    $('#desbloquear-sucesso-administrador').modal("show");
                } else {
                    $('#desbloquear-erro-administrador').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>