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
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Digite o nome do administrador" 
                                                   name="pesquisarAdministrador" id="pesquisarAdministrador">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </span>
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
                                                <button type="button" class="btn btn-primary btn-block" onclick="window.location.href = '<?php echo base_url('cadastrar-editar-administrador'); ?>'">
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
                                                            <table class="table table-hover mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name</th>
                                                                        <th>Username</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Otto</td>
                                                                        <td>@mdo</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>Jacob</td>
                                                                        <td>Thornton</td>
                                                                        <td>@fat</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Larry</td>
                                                                        <td>the Bird</td>
                                                                        <td>@twitter</td>
                                                                    </tr>
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
                                                            <table class="table table-hover mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>First Name</th>
                                                                        <th>Last Name</th>
                                                                        <th>Username</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>Mark</td>
                                                                        <td>Otto</td>
                                                                        <td>@mdo</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">2</th>
                                                                        <td>Jacob</td>
                                                                        <td>Thornton</td>
                                                                        <td>@fat</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">3</th>
                                                                        <td>Larry</td>
                                                                        <td>the Bird</td>
                                                                        <td>@twitter</td>
                                                                    </tr>
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