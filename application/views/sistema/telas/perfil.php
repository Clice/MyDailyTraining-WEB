
<!-- DODOS DO FUNCIONÁRIO -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DO PÁGINA - DODOS DO FUNCIONÁRIO ESCOLHIDO -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <!-- TÍTULO DO PÁGINA - NOME DO FUNCIONÁRIO -->
                                    <?php foreach ($perfilLogado as $logado) { ?>
                                        <div class="content-header row">
                                            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                                <h2 class="content-header-title"><?php echo $logado->nomeUsuario; ?></h2>
                                            </div>
                                        </div>
                                        <hr>
                                        <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $logado->idUsuario; ?>">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>
                                            <div class="row">
                                                <!-- CPF DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>CPF: </strong></h4>
                                                        <h4><?php echo $logado->cpfUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- RG DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>RG: </strong></h4>
                                                        <h4><?php echo $logado->rgUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DO FUNCIONÁRIO -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h4><strong>E-mail: </strong></h4>
                                                        <h4><?php echo $logado->emailUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Telefone: </strong></h4>
                                                        <h4><?php echo $logado->telefoneUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- SEXO DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Sexo: </strong></h4>
                                                        <h4><?php echo $logado->sexoUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- DATA DO NASCIMENTO DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Data de Nascimento: </strong></h4>
                                                        <h4><?php echo formatarData($logado->dataNascimentoUsuario); ?></h4>
                                                    </div>
                                                </div>
                                                <!-- IDADE DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Idade: </strong></h4>
                                                        <h4><?php echo $logado->idadeUsuario; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- ENDEREÇO DO FUNCIONÁRIO -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h4><strong>Endereço: </strong></h4>
                                                        <h4><?php echo $logado->enderecoUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CEP DO FUNCIONÁRIO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>CEP: </strong></h4>
                                                        <h4><?php echo $logado->cepUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Bairro: </strong></h4>
                                                        <h4><?php echo $logado->bairroUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CIDADE DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Cidade: </strong></h4>
                                                        <h4><?php echo $logado->cidadeUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- ESTADO DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Estado: </strong></h4>
                                                        <h4><?php echo $logado->estadoUsuario; ?></h4>
                                                    </div>
                                                </div>                                     
                                            </div>
                                        </div>
                                        <hr style="margin-top: 4%;">
                                        <!-- BOTÕES -->
                                        <div style="float: right;" class="form-actions">
                                            <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('editar-logado/' . md5($logado->idUsuario)); ?>'">
                                                <i class="icon-edit"></i> Editar
                                            </button>
                                            <?php if (($logado->idAcademia > 0) && ($logado->tipoConta == 2)) {?>
                                            <button type="button" class="btn btn-success" onclick="window.location.href = '<?php echo base_url('perfil-academia/' . md5($logado->idAcademia)); ?>';">
                                                <i class="icon-eye"></i> Perfil Academia
                                            </button>
                                            <?php } ?>
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
