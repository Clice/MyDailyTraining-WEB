
<!-- DADOS DO FUNCIONÁRIO -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DO PÁGINA - DADOS DO FUNCIONÁRIO ESCOLHIDO -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <!-- TÍTULO DO PÁGINA - NOME DO FUNCIONÁRIO -->
                                    <?php foreach ($perfilFuncionario as $funcionario) { ?>
                                        <div class="content-header row">
                                            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                                <h2 class="content-header-title"><?php echo $funcionario->nomeUsuario; ?></h2>
                                            </div>

                                        </div>
                                        <hr>
                                        <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $funcionario->idUsuario; ?>">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>
                                            <div class="row">
                                                <!-- CPF DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>CPF: </strong></h4>
                                                        <h4><?php echo $funcionario->cpfUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- RG DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>RG: </strong></h4>
                                                        <h4><?php echo $funcionario->rgUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DO FUNCIONÁRIO -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h4><strong>E-mail: </strong></h4>
                                                        <h4><?php echo $funcionario->emailUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Telefone: </strong></h4>
                                                        <h4><?php echo $funcionario->telefoneUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- SEXO DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Sexo: </strong></h4>
                                                        <h4><?php echo $funcionario->sexoUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- DATA DO NASCIMENTO DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Data de Nascimento: </strong></h4>
                                                        <h4><?php echo formatarData($funcionario->dataNascimentoUsuario); ?></h4>
                                                    </div>
                                                </div>
                                                <!-- IDADE DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Idade: </strong></h4>
                                                        <h4><?php echo $funcionario->idadeUsuario; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- ENDEREÇO DO FUNCIONÁRIO -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h4><strong>Endereço: </strong></h4>
                                                        <h4><?php echo $funcionario->enderecoUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CEP DO FUNCIONÁRIO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>CEP: </strong></h4>
                                                        <h4><?php echo $funcionario->cepUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Bairro: </strong></h4>
                                                        <h4><?php echo $funcionario->bairroUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CIDADE DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Cidade: </strong></h4>
                                                        <h4><?php echo $funcionario->cidadeUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- ESTADO DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Estado: </strong></h4>
                                                        <h4><?php echo $funcionario->estadoUsuario; ?></h4>
                                                    </div>
                                                </div>                                     
                                            </div>
                                        </div>
                                        <hr style="margin-top: 4%;">
                                        <!-- BOTÕES -->
                                        <div style="float: right;" class="form-actions">
                                            <?php if ($this->session->userdata('tipoConta') == 2) { ?>
                                                <button type="button"                               
                                                <?php if ($funcionario->statusConta == 1) { ?>
                                                            class="btn btn-black"
                                                            onclick="modalDesBloquearFuncionario(this, <?php echo $funcionario->idUsuario; ?>, true);"
                                                        <?php } else { ?>
                                                            class="btn btn-blue"
                                                            onclick="modalDesBloquearFuncionario(this, <?php echo $funcionario->idUsuario; ?>, false);"
                                                        <?php } ?>
                                                        ><i <?php if ($funcionario->statusConta == 1) { ?>
                                                            class="icon-lock"
                                                        <?php } else { ?>
                                                            class="icon-unlock"
                                                        <?php } ?>></i><?php if ($funcionario->statusConta) { ?> Bloquear <?php } else { ?> Desbloquear <?php } ?>
                                                </button>
                                                <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('editar-funcionario/' . md5($funcionario->idUsuario)); ?>'">
                                                    <i class="icon-edit"></i> Editar
                                                </button>
                                                <button type="button" class="btn btn-danger" onclick="modalExcluirFuncionario(<?php echo $funcionario->idUsuario; ?>);">
                                                    <i class="icon-trash"></i> Excluir
                                                </button>
                                            <?php } else if ($this->session->userdata('idUsuario') == $funcionario->idUsuario) { ?>
                                                <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('editar-funcionario/' . md5($funcionario->idUsuario)); ?>'">
                                                    <i class="icon-edit"></i> Editar
                                                </button>
                                            <?php } ?>
                                            <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo base_url('lista-funcionarios'); ?>'">
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

<!-- MODAL - DESEJA EXCLUIR O FUNCIONÁRIO? -->
<div class="modal fade text-xs-left" id="excluir-funcionario" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning"></i> Deseja excluir o(a) funcionário(a)?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" onclick="excluirFuncionario();">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - FUNCIONÁRIO EXCLUÍDO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-sucesso-funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle"></i> Funcionário(a) excluído(a) com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-funcionarios'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO EXCLUIR O FUNCIONÁRIO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-erro-funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove"></i> Erro ao excluir o(a) funcionário(a)</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA BLOQUEAR O FUNCIONÁRIO? -->
<div class="modal fade text-xs-left" id="bloquear-funcionario" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning"></i> Deseja bloquear o funcionário?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="bloqueia-funcionario">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-bloqueia-funcionario">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - FUNCIONÁRIO BLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-sucesso-funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle"></i> Funcionário(a) bloqueado(a) com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-funcionarios'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO BLOQUEAR O FUNCIONÁRIO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-erro-funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove"></i> Erro ao bloquear o(a) funcionário(a)</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-funcionarios'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA DESBLOQUEAR O FUNCIONÁRIO? -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning"></i> Deseja desbloquear o(a) funcionário(a)?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="desbloqueia-funcionario">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-desbloqueia-funcionario">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - FUNCIONÁRIO DESBLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-sucesso-funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle"></i> Funcionário(a) desbloqueado(a) com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-funcionarios'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO DESBLOQUEAR O FUNCIONÁRIO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-erro-funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove"></i> Erro ao desbloquear o(a) funcionário(a)</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-funcionarios'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- FUNÇÕES EM JAVASCRIPT -->
<script type="text/javascript">
    function excluirFuncionario() {

        var dados = "idUsuario=" + $('#idUsuario').val();
        $.ajax({
            url: "<?php echo base_url('sistema/FuncionarioController/cExcluirFuncionario'); ?>",
            type: "POST",
            data: dados,
            dataType: 'json',
            success: function (data) {
                $('#excluir-funcionario').modal('hide');
                if (data.success) {
                    $('#excluir-sucesso-funcionario').modal('show');
                } else {
                    $('#excluir-erro-funcionario').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function bloquearFuncionario(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/FuncionarioController/cBloquearFuncionario'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#bloquear-funcionario').modal("hide");
                if (data.success) {
                    $('#bloquear-sucesso-funcionario').modal("show");
                } else {
                    $('#bloquear-erro-funcionario').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function desbloquearFuncionario(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/FuncionarioController/cDesbloquearFuncionario'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#desbloquear-funcionario').modal("hide");
                if (data.success) {
                    $('#desbloquear-sucesso-funcionario').modal("show");
                } else {
                    $('#desbloquear-erro-funcionario').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>
