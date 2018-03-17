<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <div class="content-body">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">        
                        <div class="card-header">
                            <div class="content-header row">
                                <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                    <h2 class="content-header-title"><?php echo $nomePagina; ?></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
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
                                    <div class="content-body">
                                        <div class="row">
                                            <div class="card">
                                                <div class="card-body collapse in">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover mb-0" id="tabelaChamados">
                                                            <thead>
                                                                <tr>
                                                                    <th>Nome do Aluno</th>
                                                                    <th style="text-align: center;">Horário</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($chamadosInstrutor as $chamadoInstrutor) { ?>
                                                                    <tr>
                                                                        <td><?php echo $chamadoInstrutor->nomeAluno; ?></td>
                                                                        <td style="text-align: center;"><?php echo $chamadoInstrutor->horarioChamado; ?></td>
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