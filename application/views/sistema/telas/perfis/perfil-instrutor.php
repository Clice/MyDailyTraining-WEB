
<!-- DADOS DO INSTRUTOR -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <!-- CONTEÚDO DO PÁGINA - DADOS DO INSTRUTOR ESCOLHIDO -->
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
                                                <?php if ($instrutor->crefUsuario != "") { ?>
                                                    <!-- CREF DO INSTRUTOR -->
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <h4><strong>CREF: </strong></h4>
                                                            <h4><?php echo $instrutor->crefUsuario; ?></h4>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <!-- TELEFONE DO INSTRUTOR -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Telefone: </strong></h4>
                                                        <h4><?php echo $instrutor->telefoneUsuario; ?></h4>
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
                                                        <h4><?php echo formatarData($instrutor->dataNascimentoUsuario); ?></h4>
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
                                        <hr>
                                        <!-- BOTÕES -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="float: right;" class="form-actions">
                                                    <?php if ($this->session->userdata('tipoConta') == 2) { ?>
                                                        <button type="button"
                                                        <?php if ($instrutor->statusConta == 1) { ?>
                                                                    class="btn btn-black"
                                                                    onclick="modalDesBloquearUsuario(this, <?php echo $instrutor->idUsuario; ?>, true);"
                                                                <?php } else { ?>
                                                                    class="btn btn-blue"
                                                                    onclick="modalDesBloquearUsuario(this, <?php echo $instrutor->idUsuario; ?>, false);"
                                                                <?php } ?>
                                                                ><i <?php if ($instrutor->statusConta == 1) { ?>
                                                                    class="icon-lock"
                                                                <?php } else { ?>
                                                                    class="icon-unlock"
                                                                <?php } ?>></i><?php if ($instrutor->statusConta) { ?> Bloquear <?php } else { ?> Desbloquear <?php } ?>
                                                        </button>
                                                        <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('editar-instrutor/' . md5($instrutor->idUsuario) . '/perfil-instrutor'); ?>'">
                                                            <i class="icon-edit"></i> Editar
                                                        </button>
                                                        <button type="button" class="btn btn-danger" onclick="modalExcluirUsuario(<?php echo $instrutor->idUsuario; ?>);">
                                                            <i class="icon-trash"></i> Excluir
                                                        </button>
                                                    <?php } else if ($this->session->userdata('idUsuario') == $instrutor->idUsuario) { ?>
                                                        <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('editar-instrutor/' . md5($instrutor->idUsuario) . '/perfil-instrutor'); ?>'">
                                                            <i class="icon-edit"></i> Editar
                                                        </button>
                                                    <?php } ?>
                                                    <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo base_url('lista-instrutores'); ?>'">
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
