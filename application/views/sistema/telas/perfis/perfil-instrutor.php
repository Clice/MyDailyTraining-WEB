
<!-- DODOS DO INSTRUTOR -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DO PÁGINA - DODOS DO INSTRUTOR ESCOLHIDO -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <!-- TÍTULO DO PÁGINA - NOME DO INSTRUTOR -->
                                    <?php foreach ($perfilInstrutor as $instrutor) { ?>
                                        <div class="content-header row">
                                            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                                <h2 class="content-header-title"><?php echo $instrutor->nomeUsuario; ?></h2>
                                            </div>

                                        </div>
                                        <hr>
                                        <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $instrutor->idUsuario; ?>">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>
                                            <div class="row">
                                                <!-- CPF DO INSTRUTOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>CPF: </strong></h4>
                                                        <h4><?php echo $instrutor->cpfUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- RG DO INSTRUTOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>RG: </strong></h4>
                                                        <h4><?php echo $instrutor->rgUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DO INSTRUTOR -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h4><strong>E-mail: </strong></h4>
                                                        <h4><?php echo $instrutor->emailUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO INSTRUTOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Telefone: </strong></h4>
                                                        <h4><i class="icon-phone-square"></i> <?php echo $instrutor->telefoneUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- SEXO DO INSTRUTOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Sexo: </strong></h4>
                                                        <h4><?php echo $instrutor->sexoUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- DATA DO NASCIMENTO DO INSTRUTOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Data de Nascimento: </strong></h4>
                                                        <h4><?php echo $instrutor->dataNascimentoUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- IDADE DO INSTRUTOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Idade: </strong></h4>
                                                        <h4><?php echo $instrutor->idadeUsuario; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- ENDEREÇO DO INSTRUTOR -->
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <h4><strong>Endereço: </strong></h4>
                                                        <h4><?php echo $instrutor->enderecoUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CEP DO INSTRUTOR -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>CEP: </strong></h4>
                                                        <h4><?php echo $instrutor->cepUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DO INSTRUTOR -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Bairro: </strong></h4>
                                                        <h4><?php echo $instrutor->bairroUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CIDADE DO INSTRUTOR -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Cidade: </strong></h4>
                                                        <h4><?php echo $instrutor->cidadeUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- ESTADO DO INSTRUTOR -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Estado: </strong></h4>
                                                        <h4><?php echo $instrutor->estadoUsuario; ?></h4>
                                                    </div>
                                                </div>                                     
                                            </div>
                                        </div>
                                        <hr style="margin-top: 4%;">
                                        <!-- BOTÕES -->
                                        <div style="float: right;" class="form-actions">
                                            <button type="button"                               
                                            <?php if ($instrutor->statusConta == 1) { ?>
                                                        class="btn btn-blue"
                                                        onclick="modalDesBloquearInstrutor(this, <?php echo $instrutor->idUsuario; ?>, true);"
                                                    <?php } else { ?>
                                                        class="btn btn-black"
                                                        onclick="modalDesBloquearInstrutor(this, <?php echo $instrutor->idUsuario; ?>, false);"
                                                    <?php } ?>
                                                    ><i <?php if ($instrutor->statusConta == 1) { ?>
                                                        class="icon-unlock"
                                                    <?php } else { ?>
                                                        class="icon-lock"
                                                    <?php } ?>></i><?php if ($instrutor->statusConta) { ?> Bloquear <?php } else { ?> Desbloquear <?php } ?>
                                            </button>
                                            <button type="button" class="btn btn-green" onclick="window.location.href = '<?php echo base_url('editar-instrutor/' . md5($instrutor->idUsuario)); ?>'">
                                                <i class="icon-edit"></i> Editar
                                            </button>
                                            <button type="button" class="btn btn-danger" onclick="modalExcluirInstrutor(<?php echo $instrutor->idUsuario; ?>);">
                                                <i class="icon-trash"></i> Excluir
                                            </button>
                                            <button type="button" class="btn btn-primary" onclick="window.location.href = '<?php echo base_url('lista-instrutores'); ?>'">
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

<!-- MODAL - DESEJA EXCLUIR O INSTRUTOR? -->
<div class="modal fade text-xs-left" id="excluir-instrutor" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning"></i> Deseja excluir o funcionário?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" onclick="excluirInstrutor();">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - INSTRUTOR EXCLUÍDO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-sucesso-instrutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Instrutor excluído com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-instrutores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO EXCLUIR O INSTRUTOR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-erro-instrutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Erro ao excluir o funcionário</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA BLOQUEAR O INSTRUTOR? -->
<div class="modal fade text-xs-left" id="bloquear-instrutor" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">Deseja bloquear o funcionário?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="bloqueia-instrutor">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-bloqueia-instrutor">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - INSTRUTOR BLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-sucesso-instrutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Instrutor bloqueado com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-instrutores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO BLOQUEAR O INSTRUTOR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-erro-instrutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Erro ao bloquear o funcionário</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-instrutores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA DESBLOQUEAR O INSTRUTOR? -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-instrutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">Deseja desbloquear o funcionário?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="desbloqueia-instrutor">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-desbloqueia-instrutor">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - INSTRUTOR DESBLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-sucesso-instrutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Instrutor desbloqueado com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-instrutores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO DESBLOQUEAR O INSTRUTOR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-erro-instrutor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Erro ao desbloquear o funcionário</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-instrutores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- FUNÇÕES EM JAVASCRIPT -->
<script type="text/javascript">
    function excluirInstrutor() {

        var dados = "idUsuario=" + $('#idUsuario').val();
        $.ajax({
            url: "<?php echo base_url('sistema/InstrutorController/cExcluirInstrutor'); ?>",
            type: "POST",
            data: dados,
            dataType: 'json',
            success: function (data) {
                $('#excluir-instrutor').modal('hide');
                if (data.success) {
                    $('#excluir-sucesso-instrutor').modal('show');
                } else {
                    $('#excluir-erro-instrutor').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function bloquearInstrutor(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/InstrutorController/cBloquearInstrutor'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#bloquear-instrutor').modal("hide");
                if (data.success) {
                    $('#bloquear-sucesso-instrutor').modal("show");
                } else {
                    $('#bloquear-erro-instrutor').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function desbloquearInstrutor(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/InstrutorController/cDesbloquearInstrutor'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#desbloquear-instrutor').modal("hide");
                if (data.success) {
                    $('#desbloquear-sucesso-instrutor').modal("show");
                } else {
                    $('#desbloquear-erro-instrutor').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>