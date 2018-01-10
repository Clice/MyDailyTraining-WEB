
<!-- DODOS DO ALUNO -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DO PÁGINA - DODOS DO ALUNO ESCOLHIDO -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <!-- TÍTULO DO PÁGINA - NOME DO ALUNO -->
                                    <?php foreach ($perfilAluno as $aluno) { ?>
                                        <div class="content-header row">
                                            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                                <h2 class="content-header-title"><?php echo $aluno->nomeAluno; ?></h2>
                                            </div>

                                        </div>
                                        <hr>
                                        <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $aluno->idAluno; ?>">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>
                                            <div class="row">
                                                <!-- CPF DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>CPF: </strong></h4>
                                                        <h4><?php echo $aluno->cpfAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- RG DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>RG: </strong></h4>
                                                        <h4><?php echo $aluno->rgAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DO ALUNO -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h4><strong>E-mail: </strong></h4>
                                                        <h4><?php echo $aluno->emailAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Telefone: </strong></h4>
                                                        <h4><i class="icon-phone-square"></i> <?php echo $aluno->telefoneAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- SEXO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Sexo: </strong></h4>
                                                        <h4><?php echo $aluno->sexoAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- DATA DO NASCIMENTO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Data de Nascimento: </strong></h4>
                                                        <h4><?php echo $aluno->dataNascimentoAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- IDADE DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Idade: </strong></h4>
                                                        <h4><?php echo $aluno->idadeAluno; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- ENDEREÇO DO ALUNO -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h4><strong>Endereço: </strong></h4>
                                                        <h4><?php echo $aluno->enderecoAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CEP DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>CEP: </strong></h4>
                                                        <h4><?php echo $aluno->cepAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Bairro: </strong></h4>
                                                        <h4><?php echo $aluno->bairroAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CIDADE DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Cidade: </strong></h4>
                                                        <h4><?php echo $aluno->cidadeAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- ESTADO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Estado: </strong></h4>
                                                        <h4><?php echo $aluno->estadoAluno; ?></h4>
                                                    </div>
                                                </div>                                     
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <!-- DATA DA AVALIAÇÃO DO ALUNO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Data da Avaliação: </strong></h4>
                                                    <h4><?php echo $aluno->dataValidadeExame; ?></h4>
                                                </div>
                                            </div>
                                            <!-- DIA DO PAGAMENTO DO ALUNO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Dia do Pagamento: </strong></h4>
                                                    <h4><?php echo $aluno->diaPagamentoAluno; ?></h4>
                                                </div>
                                            </div>
                                            <!-- OBJETIVO DO ALUNO -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h4><strong>Objetivo: </strong></h4>
                                                    <h4><?php echo $aluno->objetivoAluno; ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <?php if (!$aluno->nomeResponsavelAluno == NULL || !$aluno->cirurgias == NULL ||
                                                    !$aluno->medicamentos == NULL || !$aluno->doencasFamiliaresAluno == NULL) { ?>
                                                <h4 style="margin-left: 14px;"><strong>Observações:</strong></h4>
                                            <?php } ?>
                                            <?php if (!$aluno->nomeResponsavelAluno == NULL) { ?>
                                                <!-- NOME DO RESPONSÁVEL DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Nome do Responsável:</strong></h4>
                                                        <h4><?php echo $aluno->nomeResponsavelAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO RESPONSÁVEL DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Telefone do Responsável:</strong></h4>
                                                        <h4><?php echo $aluno->telefoneResponsavelAluno; ?></h4>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if (!$aluno->cirurgias == NULL) { ?>
                                                <!-- CIRURGIAS DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Cirurgias: </strong></h4>
                                                        <h4><?php echo $aluno->cirurgias; ?></h4>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if (!$aluno->medicamentos == NULL) { ?>
                                                <!-- MEDICAMENTOS DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Medicamentos: </strong></h4>
                                                        <h4><?php echo $aluno->medicamentos; ?></h4>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if (!$aluno->doencasFamiliaresAluno == NULL) { ?>
                                                <!-- DOENÇAS FAMILIARES DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Doenças Familiares: </strong></h4>
                                                        <h4><?php echo $aluno->doencasFamiliaresAluno; ?></h4>
                                                    </div>
                                                </div>                                   
                                            </div>
                                        <?php } ?>
                                        <hr style="margin-top: 4%;">
                                        <!-- BOTÕES -->
                                        <div style="float: left;" class="form-actions">
                                            <button type="button" class="btn btn-green" onclick="window.location.href = '<?php echo base_url('lista-treinos/' . md5($aluno->idAluno)); ?>'">
                                                <i class="icon-IcoMoon"></i> Definir Treino
                                            </button>
                                            <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('lista-treinos/' . md5($aluno->idAluno)); ?>'">
                                                <i class="icon-mobile"></i> Enviar Notificação
                                            </button>
                                        </div>
                                        <div style="float: right;" class="form-actions">
                                            <button type="button"                               
                                            <?php if ($aluno->statusAluno == 1) { ?>
                                                        class="btn btn-blue"
                                                        onclick="modalDesBloquearAluno(this, <?php echo $aluno->idAluno; ?>, true);"
                                                    <?php } else { ?>
                                                        class="btn btn-black"
                                                        onclick="modalDesBloquearAluno(this, <?php echo $aluno->idAluno; ?>, false);"
                                                    <?php } ?>
                                                    ><i <?php if ($aluno->statusAluno == 1) { ?>
                                                        class="icon-unlock"
                                                    <?php } else { ?>
                                                        class="icon-lock"
                                                    <?php } ?>></i><?php if ($aluno->statusAluno) { ?> Bloquear <?php } else { ?> Desbloquear <?php } ?>
                                            </button>
                                            <button type="button" class="btn btn-green" onclick="window.location.href = '<?php echo base_url('editar-aluno/' . md5($aluno->idAluno)); ?>'">
                                                <i class="icon-edit"></i> Editar
                                            </button>
                                            <button type="button" class="btn btn-danger" onclick="modalExcluirAluno(<?php echo $aluno->idAluno; ?>);">
                                                <i class="icon-trash"></i> Excluir
                                            </button>
                                            <button type="button" class="btn btn-primary" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">
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

<!-- MODAL - DESEJA EXCLUIR O ALUNO? -->
<div class="modal fade text-xs-left" id="excluir-aluno" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning"></i> Deseja excluir o(a) aluno(a)?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" onclick="excluirAluno();">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ALUNO EXCLUÍDO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-sucesso-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle"></i> Aluno(a) excluído(a) com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO EXCLUIR O ALUNO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-erro-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove"></i> Erro ao excluir o(a) aluno(a)</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA BLOQUEAR O ALUNO? -->
<div class="modal fade text-xs-left" id="bloquear-aluno" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning"></i> Deseja bloquear o(a) aluno(a)?</h4>
                <br>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="bloqueia-aluno">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-bloqueia-aluno">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ALUNO BLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-sucesso-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle"></i> Aluno(a) bloqueado(a) com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO BLOQUEAR O ALUNO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-erro-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove"></i> Erro ao bloquear o(a) aluno(a)</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA DESBLOQUEAR O ALUNO? -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center"><i class="icon-warning"></i> Deseja desbloquear o(a) aluno(a)?</h4>
                <br>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="desbloqueia-aluno">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-desbloqueia-aluno">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ALUNO DESBLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-sucesso-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle"></i> Aluno(a) desbloqueado(a) com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO DESBLOQUEAR O ALUNO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-erro-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove"></i> Erro ao desbloquear o(a) aluno(a)</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- FUNÇÕES EM JAVASCRIPT -->
<script type="text/javascript">
    function excluirAluno() {

        var dados = "idAluno=" + $('#idAluno').val();
        $.ajax({
            url: "<?php echo base_url('sistema/AlunoController/cExcluirAluno'); ?>",
            type: "POST",
            data: dados,
            dataType: 'json',
            success: function (data) {
                $('#excluir-aluno').modal('hide');
                if (data.success) {
                    $('#excluir-sucesso-aluno').modal('show');
                } else {
                    $('#excluir-erro-aluno').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function bloquearAluno(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/AlunoController/cBloquearAluno'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#bloquear-aluno').modal("hide");
                if (data.success) {
                    $('#bloquear-sucesso-aluno').modal("show");
                } else {
                    $('#bloquear-erro-aluno').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function desbloquearAluno(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/AlunoController/cDesbloquearAluno'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#desbloquear-aluno').modal("hide");
                if (data.success) {
                    $('#desbloquear-sucesso-aluno').modal("show");
                } else {
                    $('#desbloquear-erro-aluno').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>