
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
                                        <hr>
                                        <!-- BOTÕES -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="float: right;" class="form-actions">
                                                    <?php if ($this->session->userdata('tipoConta') == 2) { ?>
                                                        <button type="button"                               
                                                        <?php if ($funcionario->statusConta == 1) { ?>
                                                                    class="btn btn-black"
                                                                    onclick="modalDesBloquearUsuario(this, <?php echo $funcionario->idUsuario; ?>, true);"
                                                                <?php } else { ?>
                                                                    class="btn btn-blue"
                                                                    onclick="modalDesBloquearUsuario(this, <?php echo $funcionario->idUsuario; ?>, false);"
                                                                <?php } ?>
                                                                ><i <?php if ($funcionario->statusConta == 1) { ?>
                                                                    class="icon-lock"
                                                                <?php } else { ?>
                                                                    class="icon-unlock"
                                                                <?php } ?>></i><?php if ($funcionario->statusConta) { ?> Bloquear <?php } else { ?> Desbloquear <?php } ?>
                                                        </button>
                                                        <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('editar-funcionario/' . md5($funcionario->idUsuario) . '/perfil-funcionario'); ?>'">
                                                            <i class="icon-edit"></i> Editar
                                                        </button>
                                                        <button type="button" class="btn btn-danger" onclick="modalExcluirUsuario(<?php echo $funcionario->idUsuario; ?>);">
                                                            <i class="icon-trash"></i> Excluir
                                                        </button>
                                                    <?php } else if ($this->session->userdata('idUsuario') == $funcionario->idUsuario) { ?>
                                                        <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('editar-funcionario/' . md5($funcionario->idUsuario) . '/perfil-funcionario'); ?>'">
                                                            <i class="icon-edit"></i> Editar
                                                        </button>
                                                    <?php } ?>
                                                    <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo base_url('lista-funcionarios'); ?>'">
                                                        <i class="icon-chevron-left2"></i> Voltar
                                                    </button>                                            
                                                </div> 
                                            </div>
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
