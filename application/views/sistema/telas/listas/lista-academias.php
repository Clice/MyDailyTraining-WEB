<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-body">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">        
                        <div class="card-header">
                            <div class="content-header row">
                                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                    <h2 class="content-header-title">Lista de Academias</h2>
                                </div>
                            </div>
                            <input type="hidden" name="idAcademia" id="idAcademia">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="form-group position-relative">
                                            <input type="text" class="form-control" placeholder="Buscar academia..." 
                                                   name="pesquisarAcademia" id="pesquisarAcademia" onkeyup="pesquisarAcademia();">
                                            <div class="form-control-position" style="margin-top: 7px;">
                                                <i class="icon-search4 font-medium-4"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div style="float: right;">
                                        <ul class="pl-0 list-unstyled right">
                                            <li class="mb-1">
                                                <button type="button" class="btn btn-secondary btn-block" onclick="window.location.reload();">
                                                    <i class="icon-refresh"></i> Atualizar</button>
                                            </li>                                            
                                        </ul>
                                    </div>
                                    <div style="float: right; margin-right: 10px;">
                                        <ul class="pl-0 list-unstyled right">
                                            <li class="mb-1">
                                                <button type="button" class="btn btn-primary btn-block" 
                                                        onclick="window.location.href = '<?php echo base_url('cadastrar-academia'); ?>'">
                                                    <i class="icon-plus2"></i> Nova Academia</button>
                                            </li>                                            
                                        </ul>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#ativos" 
                                           aria-expanded="true">Ativos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#bloqueados" 
                                           aria-expanded="false">Bloqueados</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="ativos" aria-expanded="true" aria-labelledby="base-tab1">
                                        <div class="content-body">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-body collapse in">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover mb-0" id="tabelaAcademiasAtivas">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nome da Academia</th>
                                                                        <th>Endereço</th>
                                                                        <th>Telefone</th>
                                                                        <th style="text-align: center;">Opções</th>
                                                                        <th style="text-align: center;">Bloquear</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($academiasAtivas as $academiaAtiva) { ?>
                                                                        <tr>
                                                                            <td><?php echo $academiaAtiva->nomeAcademia; ?></td>
                                                                            <td><?php echo $academiaAtiva->enderecoAcademia; ?></td>
                                                                            <td><?php echo $academiaAtiva->telefoneAcademia; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn mb-1 btn-success btn-sm" 
                                                                                        onclick="window.location.href = '<?php echo base_url('perfil-academia/' . md5($academiaAtiva->idAcademia)); ?>'"><i class="icon-eye"></i> Ver</button>
                                                                                <button type="button" class="btn mb-1 btn-warning btn-sm" 
                                                                                        onclick="window.location.href = '<?php echo base_url('editar-academia/' . md5($academiaAtiva->idAcademia)); ?>'"><i class="icon-edit"></i> Editar</button>
                                                                                <button type="button" class="btn mb-1 btn-danger btn-sm" 
                                                                                        onclick="modalExcluirAcademia(<?php echo $academiaAtiva->idAcademia; ?>);"><i class="icon-trash-o"></i> Excluir</button>
                                                                            </td>
                                                                            <td style="text-align: center;">
                                                                                <input type="checkbox" name="" onchange="modalDesBloquearAcademia(this, <?php echo $academiaAtiva->idAcademia; ?>, true);"></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="bloqueados" aria-labelledby="base-tab2">
                                        <div class="content-body">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-body collapse in">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover mb-0" id="tabelaAcademiasBloqueadas">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nome da Academia</th>
                                                                        <th>Endereço</th>
                                                                        <th>Telefone</th>
                                                                        <th style="text-align: center;">Opções</th>
                                                                        <th style="text-align: center;">Bloquear</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($academiasBloqueadas as $academiaBloqueada) { ?>
                                                                        <tr>
                                                                            <td><?php echo $academiaBloqueada->nomeAcademia; ?></td>
                                                                            <td><?php echo $academiaBloqueada->enderecoAcademia; ?></td>
                                                                            <td><?php echo $academiaBloqueada->telefoneAcademia; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn mb-1 btn-success btn-sm" 
                                                                                        onclick="window.location.href = '<?php echo base_url('perfil-academia/' . md5($academiaBloqueada->idAcademia)); ?>'"><i class="icon-eye"></i> Ver</button>
                                                                                <button type="button" class="btn mb-1 btn-warning btn-sm" 
                                                                                        onclick="window.location.href = '<?php echo base_url('editar-academia/' . md5($academiaBloqueada->idAcademia)); ?>'"><i class="icon-edit"></i> Editar</button>
                                                                                <button type="button" class="btn mb-1 btn-danger btn-sm" 
                                                                                        onclick="modalExcluirAcademia(<?php echo $academiaBloqueada->idAcademia; ?>);"><i class="icon-trash-o"></i> Excluir</button>
                                                                            </td>
                                                                            <td style="text-align: center;" class="">
                                                                                <input type="checkbox" name="" checked="" onchange="modalDesBloquearAcademia(this, <?php echo $academiaBloqueada->idAcademia; ?>, false);"></td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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