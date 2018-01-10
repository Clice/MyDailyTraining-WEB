
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
                                    <!-- TÍTULO DA PÁGINA - NOME DA ACADEMIA -->
                                    <?php foreach ($perfilAcademia as $academia) { ?>
                                        <div class="content-header row">
                                            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                                <h2 class="content-header-title"><?php echo $academia->nomeAcademia; ?></h2>
                                            </div>
                                        </div>  
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
                                            <button type="button" class="btn btn-primary" onclick="window.location.href = '<?php echo base_url('lista-academias'); ?>'">
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

<!-- MODAL - DESEJA EXCLUIR A ACADEMIA? -->
<div class="modal fade text-xs-left" id="excluir-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">Deseja excluir a academia?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" onclick="excluirAcademia();">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ACADEMIA EXCLUÍDA COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-sucesso-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Academia excluída com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-academias'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO EXCLUIR A ACADEMIA -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-erro-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Erro ao excluir a academia</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA BLOQUEAR A ACADEMIA? -->
<div class="modal fade text-xs-left" id="bloquear-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">Deseja bloquear a academia?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="bloqueia-academia">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-bloqueia-academia">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ACADEMIA BLOQUEADA COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-sucesso-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Academia bloqueada com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-academias'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO BLOQUEAR A ACADEMIA -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-erro-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Erro ao bloquear a academia</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-academias'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA DESBLOQUEAR A ACADEMIA? -->
<div class="modal fade text-xs-left" id="desbloquear-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">Deseja desbloquear a academia?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="desbloqueia-academia">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-desbloqueia-academia">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ACADEMIA DESBLOQUEADA COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-sucesso-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Academia desbloqueada com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-academias'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO DESBLOQUEAR A ACADEMIA -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-erro-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Erro ao desbloquear a academia</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-academias'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function excluirAcademia() {
        var dados = "idAcademia=" + $('#idAcademia').val();
        $.ajax({
            url: "<?php echo base_url('sistema/AcademiaController/cExcluirAcademia'); ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                $('#excluir-academia').modal('hide');
                if (data.success) {
                    $('#excluir-sucesso-academia').modal('show');
                } else {
                    $('#excluir-erro-academia').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function bloquearAcademia(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/AcademiaController/cBloquearAcademia'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#bloquear-academia').modal("hide");
                if (data.success) {
                    $('#bloquear-sucesso-academia').modal("show");
                } else {
                    $('#bloquear-erro-academia').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function desbloquearAcademia(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/AcademiaController/cDesbloquearAcademia'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#desbloquear-academia').modal("hide");
                if (data.success) {
                    $('#desbloquear-sucesso-academia').modal("show");
                } else {
                    $('#desbloquear-erro-academia').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>