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
                                                   name="pesquisarUsuario" id="pesquisarUsuario" onkeyup="pesquisarUsuario();">
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
                                    <?php if ($this->session->userdata('tipoConta') != 1) { ?>
                                        <div style="float: right; margin-right: 10px;">
                                            <ul class="pl-0 list-unstyled right">
                                                <li class="mb-1">
                                                    <button type="button" class="btn btn-primary btn-block" onclick="window.location.href = '<?php echo base_url('cadastrar-administrador/novo/' . $this->session->userdata('idAcademia')); ?>'">
                                                        <i class="icon-plus4"></i> Novo Administrador</button>
                                                </li>                                            
                                            </ul>
                                        </div>
                                    <?php } ?>
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
                                                            <table class="table table-hover mb-0" id="tabelaUsuariosAtivos">
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
                                                                                        onclick="window.location.href = '<?php echo base_url('perfil-administrador/' . md5($administradorAtivo->idUsuario)); ?>'"><i class="icon-eye"></i> Ver Perfil</button>
                                                                                <button type="button" class="btn mb-1 btn-warning btn-sm" 
                                                                                        onclick="window.location.href = '<?php echo base_url('editar-administrador/' . md5($administradorAtivo->idUsuario) . '/' . $this->session->userdata('idAcademia')); ?>'"><i class="icon-edit"></i> Editar</button>
                                                                                <button type="button" class="btn mb-1 btn-danger btn-sm" 
                                                                                        onclick="modalExcluirUsuario(<?php echo $administradorAtivo->idUsuario; ?>);"><i class="icon-trash-o"></i> Excluir</button>
                                                                            </td>
                                                                            <td style="text-align: center;" class="">
                                                                                <input type="checkbox" name="" onchange="modalDesBloquearUsuario(this, <?php echo $administradorAtivo->idUsuario; ?>, true);">
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
                                                            <table class="table table-hover mb-0" id="tabelaUsuariosBloqueados">
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
                                                                                        onclick="window.location.href = '<?php echo base_url('perfil-administrador/' . md5($administradorBloqueado->idUsuario)); ?>'"><i class="icon-eye"></i> Ver Perfil</button>
                                                                                <button type="button" class="btn mb-1 btn-warning btn-sm" 
                                                                                        onclick="window.location.href = '<?php echo base_url('editar-administrador/' . md5($administradorBloqueado->idUsuario) . '/' . $this->session->userdata('idAcademia')); ?>'"><i class="icon-edit"></i> Editar</button>
                                                                                <button type="button" class="btn mb-1 btn-danger btn-sm" 
                                                                                        onclick="modalExcluirUsuario(<?php echo $administradorBloqueado->idUsuario; ?>);"><i class="icon-trash-o"></i> Excluir</button>
                                                                            </td>
                                                                            <td style="text-align: center;" class="">
                                                                                <input type="checkbox" name="" checked="" onchange="modalDesBloquearUsuario(this, <?php echo $administradorBloqueado->idUsuario; ?>, false);">
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
