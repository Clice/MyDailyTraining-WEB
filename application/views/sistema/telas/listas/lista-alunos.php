<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-body">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">        
                        <div class="card-header">
                            <div class="content-header row">
                                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                    <h2 class="content-header-title">Lista de Alunos</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Buscar aluno" 
                                                   name="pesquisarAluno" id="pesquisarAluno">
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
                                                <button type="button" class="btn btn-primary btn-block" onclick="window.location.href = '<?php echo base_url('cadastrar-editar-aluno'); ?>'">
                                                    <i class="icon-plus2"></i> Novo Aluno</button>
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
                                                                        <th>Nome</th>
                                                                        <th>Telefone</th>
                                                                        <th>Endereço</th>
                                                                        <th style="text-align: center">Data do Pagamento</th>
                                                                        <th style="text-align: center">Opções</th>
                                                                        <th class="col-lg-1 text-center" style="text-align: center">Bloqueado</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($alunosAtivos as $alunoAtivo) { ?>   
                                                                        <tr>
                                                                            <td><?php echo $alunoAtivo->nomeAluno; ?></td>
                                                                            <td><?php echo $alunoAtivo->telefoneAluno; ?></td>
                                                                            <td><?php echo $alunoAtivo->enderecoAluno; ?></td>
                                                                            <td style="text-align: center"><?php echo $alunoAtivo->diaPagamentoAluno; ?></td>
                                                                            <td class="actions" style="text-align: center;">
                                                                                <a href="<?php (base_url('funcionarios/alterar/' . md5($alunoAtivo->idAluno))); ?>" 
                                                                                   class="btn btn-success btn-sm"><i class="icon-eye"></i> Visualizar</a>
                                                                                <a href="<?php (base_url('funcionarios/alterar/' . md5($alunoAtivo->idAluno))); ?>" 
                                                                                   class="btn btn-warning btn-sm"><i class="icon-edit"></i> Editar</a>
                                                                                <a href="javascript:func()" 

                                                                                   class="btn btn-danger btn-sm"><i class="icon-trash-o"></i> Excluir</a>
                                                                            </td>
                                                                            <td style="text-align: center;">
                                                                                <input type="checkbox" onchange="desBloquearMotoboy(this,
                                                                                       <?php echo $alunoAtivo->idAluno; ?>, false);">
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
                                                            <table class="table table-hover mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nome</th>
                                                                        <th>Telefone</th>
                                                                        <th>Endereço</th>
                                                                        <th style="text-align: center">Data do Pagamento</th>
                                                                        <th style="text-align: center">Opções</th>
                                                                        <th class="col-lg-1 text-center" style="text-align: center">Bloqueado</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($alunosBloqueados as $alunoBloqueado) { ?>   
                                                                        <tr>
                                                                            <td><?php echo $alunoBloqueado->nomeAluno; ?></td>
                                                                            <td><?php echo $alunoBloqueado->telefoneAluno; ?></td>
                                                                            <td><?php echo $alunoBloqueado->enderecoAluno; ?></td>
                                                                            <td style="text-align: center"><?php echo $alunoBloqueado->diaPagamentoAluno; ?></td>
                                                                            <td class="actions" style="text-align: center;">
                                                                                <a href="<?php (base_url('funcionarios/alterar/' . md5($alunoBloqueado->idAluno))); ?>" 
                                                                                   class="btn btn-success btn-sm"><i class="icon-eye"></i> Visualizar</a>
                                                                                <a href="<?php (base_url('funcionarios/alterar/' . md5($alunoBloqueado->idAluno))); ?>" 
                                                                                   class="btn btn-warning btn-sm"><i class="icon-edit"></i> Editar</a>
                                                                                <a href="javascript:func()" 

                                                                                   class="btn btn-danger btn-sm"><i class="icon-trash-o"></i> Excluir</a>
                                                                            </td>
                                                                            <td style="text-align: center;">
                                                                                <input type="checkbox" onchange="desBloquearMotoboy(this,
                                                                                       <?php echo $alunoBloqueado->idAluno; ?>, false);">
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