<!-- DADOS DA AEQUALTECH -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DA PÁGINA - DADOS DA EQUALTECH ESCOLHIDA -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <!-- TÍTULO DA PÁGINA - NOME DA EQUALTECH -->
                                    <?php foreach ($perfilEqualTech as $equaltech) { ?>   
                                        <div class="content-header row">
                                            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                                <h2 class="content-header-title"><?php echo $equaltech->nomeUsuario; ?></h2>
                                                <?php ?>
                                            </div>
                                        </div>                                     
                                        <hr>
                                        <input type="hidden" name="idEqualTech" id="idEqualTech" value="<?php echo $equaltech->idUsuario; ?>">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>
                                            <div class="row">
                                                <!-- ENDEREÇO -->
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <h4><strong>Endereço da academia: </strong></h4>
                                                        <h4><?php echo $equaltech->enderecoUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- ESTADO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Estado: </strong></h4>
                                                        <h4><?php echo $equaltech->estadoUsuario; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- CIDADE -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Cidade: </strong></h4>
                                                        <h4><?php echo $equaltech->cidadeUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- BAIRRO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Bairro: </strong></h4>
                                                        <h4><?php echo $equaltech->bairroUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CEP -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>CEP: </strong></h4>
                                                        <h4><?php echo $equaltech->cepUsuario; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- TELEFONE -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Telefone: </strong></h4>
                                                        <h4><?php echo $equaltech->telefoneUsuario; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- E-MAIL -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>E-mail: </strong></h4>
                                                        <h4><?php echo $equaltech->emailUsuario; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <!-- BOTÕES -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="float: right;" class="form-actions">
                                                    <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo base_url('lista-equaltech'); ?>'">
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
