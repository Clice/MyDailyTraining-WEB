
<!-- DADOS DO ADMINISTRADOR -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <!-- CONTEÚDO DO PÁGINA - DADOS DO ADMINISTRADOR ESCOLHIDO -->
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
                                                        <h4><?php echo $administrador->telefoneUsuario; ?></h4>
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
                                                        <h4><?php echo formatarData($administrador->dataNascimentoUsuario); ?></h4>
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
                                        <hr>
                                        <!-- BOTÕES -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="float: right;" class="form-actions">
                                                    <?php if ($this->session->userdata('tipoConta') < 2) { ?>
                                                        <button type="button"
                                                        <?php if ($administrador->statusConta == 1) { ?>
                                                                    class="btn btn-black"
                                                                    onclick="modalDesBloquearUsuario(this, <?php echo $administrador->idUsuario; ?>, true);"
                                                                <?php } else { ?>
                                                                    class="btn btn-blue"
                                                                    onclick="modalDesBloquearUsuario(this, <?php echo $administrador->idUsuario; ?>, false);"
                                                                <?php } ?>>
                                                            <i <?php if ($administrador->statusConta == 1) { ?>
                                                                    class="icon-lock"
                                                                <?php } else { ?>
                                                                    class="icon-unlock"
                                                                <?php } ?>></i><?php if ($administrador->statusConta) { ?> Bloquear <?php } else { ?> Desbloquear <?php } ?>
                                                        </button>
                                                        <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('editar-administrador/' . md5($administrador->idUsuario) . '/' . $administrador->idAcademia . '/perfil-administrador'); ?>'">
                                                            <i class="icon-edit"></i> Editar
                                                        </button>
                                                        <button type="button" class="btn btn-danger" onclick="modalExcluirUsuario(<?php echo $administrador->idUsuario; ?>);">
                                                            <i class="icon-trash"></i> Excluir
                                                        </button>
                                                    <?php } else if ($this->session->userdata('idUsuario') == $administrador->idUsuario) { ?>
                                                        <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('editar-administrador/' . md5($administrador->idUsuario) . '/' . $this->session->userdata('idAcademia') . '/perfil-administrador'); ?>'">
                                                            <i class="icon-edit"></i> Editar
                                                        </button>
                                                    <?php } ?>
                                                    <?php if (($this->session->userdata('idAcademia') > 0) && ($this->session->userdata('tipoConta') == 2)) { ?>
                                                        <button type="button" class="btn btn-success"
                                                                onclick="window.location.href = '<?php echo base_url('perfil-academia/' . md5($this->session->userdata('idAcademia'))); ?>';">
                                                            <i class="icon-eye"></i> Perfil Academia
                                                        </button>
                                                    <?php } ?>
                                                    <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo base_url($voltarPagina); ?>'">
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
