
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
                                                        <h4><?php echo $aluno->telefoneAluno; ?></h4>
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
                                                        <h4><?php echo formatarData($aluno->dataNascimentoAluno); ?></h4>
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
                                            <!-- DIA DA AVALIAÇÃO DO ALUNO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Data da Próxima Avaliação: </strong></h4>
                                                    <h4><?php echo dataProximoMes($aluno->diaValidadeExame); ?></h4>
                                                </div>
                                            </div>
                                            <!-- DIA DO PAGAMENTO DO ALUNO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Dia do Pagamento: </strong></h4>
                                                    <h4><?php echo dataProximoMes($aluno->diaPagamentoAluno); ?></h4>
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
                                            <button type="button" class="btn btn-indigo" onclick="window.location.href = '<?php echo base_url('lista-treinos/' . md5($aluno->idAluno)); ?>'">
                                                <i class="icon-IcoMoon"></i> Definir Treino
                                            </button>
                                            <button type="button" class="btn btn-green" onclick="window.location.href = '<?php echo base_url('lista-treinos/' . md5($aluno->idAluno)); ?>'">
                                                <i class="icon-mobile"></i> Enviar Notificação
                                            </button>
                                        </div>
                                        <div style="float: right;" class="form-actions">
                                            <button type="button"                               
                                            <?php if ($aluno->statusAluno == 1) { ?>
                                                        class="btn btn-black"
                                                        onclick="modalDesBloquearAluno(this, <?php echo $aluno->idAluno; ?>, true);"
                                                    <?php } else { ?>
                                                        class="btn btn-blue"
                                                        onclick="modalDesBloquearAluno(this, <?php echo $aluno->idAluno; ?>, false);"
                                                    <?php } ?>
                                                    ><i <?php if ($aluno->statusAluno == 1) { ?>
                                                        class="icon-lock"
                                                    <?php } else { ?>
                                                        class="icon-unlock"
                                                    <?php } ?>></i><?php if ($aluno->statusAluno) { ?> Bloquear <?php } else { ?> Desbloquear <?php } ?>
                                            </button>
                                            <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('editar-aluno/' . md5($aluno->idAluno)); ?>'">
                                                <i class="icon-edit"></i> Editar
                                            </button>
                                            <button type="button" class="btn btn-danger" onclick="modalExcluirAluno(<?php echo $aluno->idAluno; ?>);">
                                                <i class="icon-trash"></i> Excluir
                                            </button>
                                            <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">
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
