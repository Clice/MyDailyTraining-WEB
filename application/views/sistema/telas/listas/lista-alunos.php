<!-- FORM DE CADASTRO DA ACADEMIA -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <!-- TÍTULO DA PÁGINA - LISTA DE ALUNOS -->
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                <h2 class="content-header-title">Lista de Alunos</h2>
            </div>
        </div>
        <!-- CONTEÚDO DA PÁGINA - CAMPOS DE PREENCHIMENTO -->
        <div class="content-body">
            <div class="panel-body">
                <div class="row">        
                    <div class="form-group col-lg-4">
                        <!-- -------------------- CAIXA DE BUSCA -------------------- -->
                        <div class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Buscar Aluno...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="glyphicon glyphicon-search"></i> Buscar
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------- BOTÃO ATUALIZAR -------------------- -->
                    <div class="form-group col-lg-8">
                        <button style="float: right;" class="btn btn-default" onClick="window.location.reload()">
                            <i class="glyphicon glyphicon-refresh"></i> Atualizar 
                        </button>
                    </div>
                </div>
                <div class="row">
                    <!-- -------------------- MOSTRAR A TABELA COM OS ALUNOS CADASTRADOS -------------------- -->
                    <div class="form-group col-lg-12">
                        <!-- -------------------- MOSTRAR A ABA -------------------- -->
                        <ul class="nav nav-tabs" id="tabs">
                            <li class="active"><a href="#ativos" data-toggle="tab">Ativos</a></li>
                            <li><a href="#bloqueados" data-toggle="tab">Bloqueados</a></li>
                        </ul>

                        <div class="tab-content">
                            <!-- -------------------- MOSTRAR A TABELA COM OS ALUNOS DISPONÍVEIS -------------------- -->
                            <div class="tab-pane fade in active" id="disponiveis">
                                <table class="table table-hover" id="tabelaDisponiveis">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Telefone</th>
                                            <th class="text-center">CPF</th>
                                            <th class="col-lg-1 text-center">Data do Pagamento</th>
                                            <th class="text-center">Opções</th>
                                            <th class="col-lg-1 text-center">Bloqueado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php #foreach ($alunoAtivos as $rsAlunosDisponiveis->fetch(PDO::FETCH_ASSOC)) { ?>    
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>                                                
                                            <td></td>                                                
                                            <td class="col-lg-3 text-center">
                                                <a><i class="glyphicon glyphicon-eye-open"></i> Visualizar</a>
                                                <a><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                                <a><i class="glyphicon glyphicon-trash"></i> Excluir</a>
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox">
                                            </td>
                                        </tr>
                                        <?php #} ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- -------------------- MOSTRAR A TABELA COM OS ALUNOS BLOQUEADOS -------------------- -->
                            <div class="tab-pane fade" id="bloqueados">
                                <table class="table table-hover" id="tabelaBloqueados">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Telefone</th>
                                            <th class="text-center">CPF</th>
                                            <th class=" text-center">Data do Pagamento</th>
                                            <th class="text-center">Opções</th>
                                            <th class="col-lg-1 text-center">Bloqueado</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>                                                
                                            <td></td>                                                  
                                            <td class="col-lg-3 text-center">
                                                <a><i class="glyphicon glyphicon-eye-open"></i> Visualizar</a>
                                                <a><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                                <a><i class="glyphicon glyphicon-trash"></i> Excluir</a>
                                            </td>
                                            <td class="text-center">
                                                <input type="checkbox">
                                            </td>
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