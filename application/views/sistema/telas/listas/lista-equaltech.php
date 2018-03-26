<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-body">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">        
                        <div class="card-header">
                            <div class="content-header row">
                                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                    <h2 class="content-header-title">Lista da EqualTech</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="form-group position-relative">
                                            <input type="text" class="form-control" placeholder="Digite o nome do funcionário da EqualTech" 
                                                   name="pesquisarEqualTech" id="pesquisarEqualTech" onkeyup="pesquisarEqualTech();">
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
                                                <button type="button" class="btn btn-secondary btn-block" onclick="window.location.reload()">
                                                    <i class="icon-refresh"></i> Atualizar</button>
                                            </li>                                            
                                        </ul>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="ativos" aria-expanded="true" aria-labelledby="base-tab1">
                                        <div class="content-body">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-body collapse in">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover mb-0" id="tabelaEqualTech">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nome</th>
                                                                        <th>Telefone</th>
                                                                        <th>Endereço</th>
                                                                        <th style="text-align: center;">Opções</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($equaltechs as $equaltech) { ?>   
                                                                        <tr>
                                                                            <td><?php echo $equaltech->nomeUsuario; ?></td>
                                                                            <td><?php echo $equaltech->telefoneUsuario; ?></td>
                                                                            <td><?php echo $equaltech->enderecoUsuario; ?></td>
                                                                            <td style="text-align: center;">                                                                                
                                                                                <button type="button" class="btn mb-1 btn-success btn-sm" 
                                                                                        onclick="window.location.href = '<?php echo base_url('perfil-equaltech/' . md5($equaltech->idUsuario)); ?>'">
                                                                                    <i class="icon-eye"></i> Ver Perfil</button>
                                                                                <?php if ($this->session->userdata('idUsuario') == $equaltech->idUsuario) { ?>
                                                                                    <button type="button" class="btn mb-1 btn-warning btn-sm" 
                                                                                            onclick="window.location.href = '<?php echo base_url('editar-equaltech/' . md5($equaltech->idUsuario) . '/lista-equaltech'); ?>'">
                                                                                        <i class="icon-edit"></i> Editar</button>
                                                                                    <?php } ?>
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
