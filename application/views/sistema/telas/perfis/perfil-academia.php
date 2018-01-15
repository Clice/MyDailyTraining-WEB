
<!-- DADOS DA ACADEMIA -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DA PÁGINA - DADOS DA ACADEMIA ESCOLHIDA -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <input type="hidden" name="idAcademia" id="idAcademia">
                                    <!-- TÍTULO DA PÁGINA - NOME DA ACADEMIA -->
                                    <?php foreach ($perfilAcademia as $academia) { ?>
                                        <div class="content-header row">
                                            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                                <h2 class="content-header-title"><?php echo $academia->nomeAcademia; ?></h2>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>
                                            <div class="row">
                                                <!-- ENDEREÇO DA ACADEMIA -->
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <h4><strong>Endereço da academia: </strong></h4>
                                                        <h4><?php echo $academia->enderecoAcademia; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CNPJ DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>CNPJ: </strong></h4>
                                                        <h4><?php echo $academia->cnpjAcademia; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- ESTADO DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Estado: </strong></h4>
                                                        <h4><?php echo $academia->estadoAcademia; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CIDADE DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Cidade: </strong></h4>
                                                        <h4><?php echo $academia->cidadeAcademia; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Bairro: </strong></h4>
                                                        <h4><?php echo $academia->bairroAcademia; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CEP DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>CEP: </strong></h4>
                                                        <h4><?php echo $academia->cepAcademia; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- NOME DO RESPONSÁVEL DA ACADEMIA -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h4><strong>Nome do responsável: </strong></h4>
                                                        <h4><?php echo $academia->nomeResponsavelAcademia; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Telefone: </strong></h4>
                                                        <h4><?php echo $academia->telefoneAcademia; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>E-mail: </strong></h4>
                                                        <h4><?php echo $academia->emailAcademia; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <!-- QUANTIDADE DE ALUNOS DA ACADEMIA -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Quantidade de Alunos: </strong></h4>
                                                    <h4 class="col-md-8 text-xs-center"><i class="icon-users2"></i> <?php echo $qtdAlunos; ?></h4>
                                                </div>
                                            </div>
                                        </div>

                                        <hr style="margin-top: 4%;">
                                        <!-- BOTÕES -->
                                        <div style="float: right;" class="form-actions">
                                            <button type="button" class="btn btn-purple" onclick="window.location.href = '<?php echo base_url('cadastrar-administrador/novo/' . $academia->idAcademia); ?>'">
                                                <i class="icon-plus4"></i> Novo Administrador
                                            </button>
                                            <button type="button"                               
                                            <?php if ($academia->statusAcademia == 1) { ?>
                                                        class="btn btn-black"
                                                        onclick="modalDesBloquearAcademia(this, <?php echo $academia->idAcademia; ?>, true);"
                                                    <?php } else { ?>
                                                        class="btn btn-blue"
                                                        onclick="modalDesBloquearAcademia(this, <?php echo $academia->idAcademia; ?>, false);"
                                                    <?php } ?>
                                                    ><i <?php if ($academia->statusAcademia == 1) { ?>
                                                        class="icon-lock"
                                                    <?php } else { ?>
                                                        class="icon-unlock"
                                                    <?php } ?>></i><?php if ($academia->statusAcademia) { ?> Bloquear <?php } else { ?> Desbloquear <?php } ?>
                                            </button>
                                            <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('editar-academia/' . md5($academia->idAcademia)); ?>'">
                                                <i class="icon-edit"></i> Editar
                                            </button>
                                            <button type="button" class="btn btn-danger" onclick="modalExcluirAcademia(<?php echo $academia->idAcademia; ?>);">
                                                <i class="icon-trash"></i> Excluir
                                            </button>
                                            <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo base_url('lista-academias'); ?>'">
                                                <i class="icon-chevron-left2"></i> Voltar
                                            </button>
                                        <?php } ?>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>
        </div>
    </div>
</div>
