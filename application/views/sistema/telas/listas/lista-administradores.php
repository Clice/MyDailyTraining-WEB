<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-body">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">        
                        <div class="card-header">
                            <div class="content-header row">
                                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                    <h2 class="content-header-title">Lista de Administradores</h2>
                                </div>
                            </div>
                            <input type="hidden" name="idUsuario" id="idUsuario">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                       <div class="form-group position-relative">
                                            <input type="text" class="form-control" placeholder="Buscar administrador..." 
                                                   name="pesquisarAdministrador" id="pesquisarAdministrador" onkeyup="pesquisarAdministrador();">
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
                                                <button type="button" class="btn btn-secondary btn-block" onclick="window.location.reload()"><i class="icon-refresh"></i> Atualizar</button>
                                            </li>                                            
                                        </ul>
                                    </div>
                                    <div style="float: right; margin-right: 10px;">
                                        <ul class="pl-0 list-unstyled right">
                                            <li class="mb-1">
                                                <button type="button" class="btn btn-primary btn-block" onclick="window.location.href = '<?php echo base_url('cadastrar-administrador'); ?>'">
                                                    <i class="icon-plus2"></i> Novo Administrador</button>
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
                                                            <table class="table table-hover mb-0" id="tabelaAdministradoresAtivos">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nome</th>
                                                                        <th>Telefone</th>
                                                                        <th>Endereço</th>
                                                                        <th style="text-align: center;">Opções</th>
                                                                        <th style="text-align: center;">Bloqueado</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($administradoresAtivos as $administradorAtivo) { ?>   
                                                                        <tr>
                                                                            <td><?php echo $administradorAtivo->nomeUsuario; ?></td>
                                                                            <td><?php echo $administradorAtivo->telefoneUsuario; ?></td>
                                                                            <td><?php echo $administradorAtivo->enderecoUsuario; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn mb-1 btn-success btn-sm" 
                                                                                        onclick="window.location.href = '<?php echo base_url('perfil-administrador/' . md5($administradorAtivo->idUsuario)); ?>'"><i class="icon-eye"></i> Ver</button>
                                                                                <button type="button" class="btn mb-1 btn-warning btn-sm" 
                                                                                        onclick="window.location.href = '<?php echo base_url('editar-administrador/' . md5($administradorAtivo->idUsuario)); ?>'"><i class="icon-edit"></i> Editar</button>
                                                                                <button type="button" class="btn mb-1 btn-danger btn-sm" 
                                                                                        onclick="modalExcluirAdministrador(<?php echo $administradorAtivo->idUsuario; ?>);"><i class="icon-trash-o"></i> Excluir</button>
                                                                            </td>
                                                                            <td style="text-align: center;" class="">
                                                                                <input type="checkbox" name="" onchange="modalDesBloquearAdministrador(this, <?php echo $administradorAtivo->idUsuario; ?>, true);">
                                                                            </td>
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
                                                            <table class="table table-hover mb-0" id="tabelaAdministradoresBloqueados">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nome</th>
                                                                        <th>Telefone</th>
                                                                        <th>Endereço</th>
                                                                        <th style="text-align: center;">Opções</th>
                                                                        <th style="text-align: center;">Bloqueado</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($administradoresBloqueados as $administradorBloqueado) { ?>   
                                                                        <tr>
                                                                            <td><?php echo $administradorBloqueado->nomeUsuario; ?></td>
                                                                            <td><?php echo $administradorBloqueado->telefoneUsuario; ?></td>
                                                                            <td><?php echo $administradorBloqueado->enderecoUsuario; ?></td>
                                                                            <td style="text-align: center;">
                                                                                <button type="button" class="btn mb-1 btn-success btn-sm" 
                                                                                        onclick="window.location.href = '<?php echo base_url('perfil-administrador/' . md5($administradorBloqueado->idUsuario)); ?>'"><i class="icon-eye"></i> Ver</button>
                                                                                <button type="button" class="btn mb-1 btn-warning btn-sm" 
                                                                                        onclick="window.location.href = '<?php echo base_url('editar-administrador/' . md5($administradorBloqueado->idUsuario)); ?>'"><i class="icon-edit"></i> Editar</button>
                                                                                <button type="button" class="btn mb-1 btn-danger btn-sm" 
                                                                                        onclick="modalExcluirAdministrador(<?php echo $administradorBloqueado->idUsuario; ?>);"><i class="icon-trash-o"></i> Excluir</button>
                                                                            </td>
                                                                            <td style="text-align: center;" class="">
                                                                                <input type="checkbox" name="" checked="" onchange="modalDesBloquearAdministrador(this, <?php echo $administradorBloqueado->idUsuario; ?>, false);">
                                                                            </td>
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

<!-- MODAL - DESEJA EXCLUIR O ADMINISTRADOR? -->
<div class="modal fade text-xs-left" id="excluir-administrador" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">Deseja excluir o administrador?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" onclick="excluirAdministrador();">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ADMINISTRADOR EXCLUÍDO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-sucesso-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Administrador excluído com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-administradores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO EXCLUIR O ADMINISTRADOR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="excluir-erro-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Erro ao excluir o administrador</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA BLOQUEAR O ADMINISTRADOR? -->
<div class="modal fade text-xs-left" id="bloquear-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">Deseja bloquear o administrador?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="bloqueia-administrador">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-bloqueia-administrador">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ADMINISTRADOR BLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-sucesso-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Administrador bloqueado com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-administradores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO BLOQUEAR O ADMINISTRADOR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="bloquear-erro-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Erro ao bloquear o administrador</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-administradores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DESEJA DESBLOQUEAR O ADMINISTRADOR? -->
<div class="modal fade text-xs-left" id="desbloquear-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-xs-center">Deseja desbloquear o administrador?</h4>
                <div class="modal-footer">                
                    <button type="button" class="btn btn-primary" id="desbloqueia-administrador">Sim</button>
                    <button type="button" class="btn grey btn-secondary" data-dismiss="modal" id="nao-desbloqueia-administrador">Não</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ADMINISTRADOR DESBLOQUEADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-sucesso-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Administrador desbloqueado com sucesso</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-administradores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO DESBLOQUEAR O ADMINISTRADOR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="desbloquear-erro-administrador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Erro ao desbloquear o administrador</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('lista-administradores'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- FUNÇÕES EM JAVASCRIPT -->
<script type="text/javascript">
    function excluirAdministrador() {
        var dados = "idUsuario=" + $('#idUsuario').val();
        $.ajax({
            url: "<?php echo base_url('sistema/AdministradorController/cExcluirAdministrador'); ?>",
            type: "POST",
            data: dados,
            dataType: 'json',
            success: function (data) {
                $('#excluir-administrador').modal('hide');
                if (data.success) {
                    $('#excluir-sucesso-administrador').modal('show');
                } else {
                    $('#excluir-erro-administrador').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function bloquearAdministrador(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/AdministradorController/cBloquearAdministrador'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#bloquear-administrador').modal("hide");
                if (data.success) {
                    $('#bloquear-sucesso-administrador').modal("show");
                } else {
                    $('#bloquear-erro-administrador').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function desbloquearAdministrador(dados) {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url('sistema/AdministradorController/cDesbloquearAdministrador'); ?>",
            dataType: 'json',
            data: dados,
            success: function (data) {
                $('#desbloquear-administrador').modal("hide");
                if (data.success) {
                    $('#desbloquear-sucesso-administrador').modal("show");
                } else {
                    $('#desbloquear-erro-administrador').modal("show");
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>