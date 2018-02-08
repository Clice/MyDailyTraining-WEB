
<!-- FORM DE CADASTRO DO TREINO -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DA PÁGINA - CAMPOS DE PREENCHIMENTO -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block-cadastro">
                                    <!-- TÍTULO DA PÁGINA -->
                                    <div class="content-header row">
                                        <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                            <h2 class="content-header-title"><?php echo $nomePagina ?></h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="form-group position-relative">
                                                    <input type="text" class="form-control" placeholder="Buscar exercício..." 
                                                           name="pesquisarExercicio" id="pesquisarExercicio" onkeyup="pesquisarExercicio();">
                                                    <div class="form-control-position" style="margin-top: 7px;">
                                                        <i class="icon-search4 font-medium-4"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                               
                                    </div>
                                    <form class="form" id="formCadEditAcademia" name="formCadEditAcademia">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>
                                            <input type="hidden" name="idTreino" id="idTreino" value="<?php echo $idTreino; ?>">  
                                            <div class="content-body">
                                                <div class="row">
                                                    <div class="card">
                                                        <div class="card-body collapse in">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover mb-0" id="tabelaExercicios">
                                                                    <thead>
                                                                        <tr>                                                                            
                                                                            <th style="text-align: center; padding: 0px 5px 0.75rem 5px;">Selecione</th>
                                                                            <th>Nome do Exercício</th>
                                                                            <th>Grupo Muscular</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($exercicios as $exercicio) { ?>
                                                                            <tr>
                                                                                <td style="text-align: center;">
                                                                                    <input type="checkbox" name="" onchange="modalDesBloquearAcademia(this, <?php echo 'idAcademia'; ?>, true);"></td>
                                                                                <td><?php echo $exercicio->nomeExercicio; ?></td>
                                                                                <td><?php echo $exercicio->grupoMuscular; ?></td>
                                                                            </tr>
                                                                        <?php } ?>
                                                                    </tbody>
                                                                </table>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div style="text-align: center;" class="col-md-12">
                                                        <div class="mb-3">
                                                            <nav aria-label="Page navigation">
                                                                <ul class="pagination">
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                    <!-- BOTÕES -->
                                    <div style="float: right; margin-bottom: 15px;" class="form-actions">
                                        <button type="submit" class="btn btn-success" onclick="
                                                getPagination('#tabelaExercicios');">
                                            <i class="icon-check2"></i> Salvar
                                        </button>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>
        </div>
    </div>
</div>

<!-- MODAL - DADOS OBRIGATÓRIOS NÃO INFORMADOS -->
<div class="modal fade text-xs-left" data-backdrop="static" id="dados-obrigatorios-academia" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">Dados obrigatórios não informados</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - CNPJ CADASTRADO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="cnpj-cadastrado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center">CNPJ já cadastrado</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DADOS CADASTRADOS/ALTERADOS COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="sucesso-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><?php if ($idAcademia !== "novo") { ?> Dados alterados com sucesso 
                    <?php } else { ?> Dados cadastrados com sucesso <?php } ?></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="window.location.href = '<?php echo base_url('lista-academias'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO CADASTRAR/ALTERAR OS DADOS -->
<div class="modal fade text-xs-left" data-backdrop="static" id="erro-academia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><?php if ($idAcademia !== "novo") { ?> Erro ao cadastrar os dados 
                    <?php } else { ?> Erro ao alterar os dados <?php } ?></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function verificarCnpjExiste(cnpjAcademia) {
        var dados = "cnpjAcademia=" + cnpjAcademia;
        $.ajax({
            url: "<?php echo base_url('sistema/AcademiaController/cVerificarCNPJ') ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                if (data.existe) {
                    $('#cnpj-cadastrado').modal('show');
                } else {
                    cadEditAcademia();
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function cadEditAcademia() {
        $.ajax({
            url: "<?php echo base_url('sistema/AcademiaController/cCadastrarEditarAcademia') ?>",
            type: "POST",
            data: $('#formCadEditAcademia').serialize(),
            dataType: "JSON",
            success: function (data) {
                if (data.success) {
                    $('#sucesso-academia').modal('show');
                } else {
                    $('#erro-academia').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>