
<!-- RELATÓRIO -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DA PÁGINA -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block-cadastro">
                                    <!-- TÍTULO DA PÁGINA - RELATÓRIOS -->
                                    <div class="content-header row">
                                        <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                            <h2 class="content-header-title"><?php echo $nomePagina ?></h2>
                                        </div>
                                    </div>
                                    <form class="form" id="formRelatorio" name="formRelatorio">
                                        <div class="form-body">

                                            <input type="hidden" name="idAcademia" id="idAcademia" value="<?php echo $this->session->userdata('idAcademia'); ?>">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Pessoas:*</label>
                                                        <select id="tipoConta" name="tipoConta" class="form-control">
                                                            <option value="">Selecione</option>
                                                            <option value="Todos">Todos</option>
                                                            <option value="5">Alunos</option>
                                                            <option value="4">Instrutores</option>
                                                            <option value="3">Funcionários</option>
                                                        </select>
                                                    </div>
                                                </div>   
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Status:*</label>
                                                        <select id="statusConta" name="statusConta" class="form-control">
                                                            <option value="">Selecione</option>
                                                            <option value="Todos">Todos</option>
                                                            <option value="true">Ativos</option>
                                                            <option value="false">Bloqueados</option>
                                                        </select>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="float: right;" class="form-actions">
                                                <button type="submit" class="btn btn-success" onclick="verificarDadosRelatorio();">
                                                    <i class="icon-check2"></i> Gerar Relatório
                                                </button>
                                            </div>
                                        </div>
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

<!--MODAL - DADOS OBRIGATÓRIOS NÃO INFORMADOS -->
<div class="modal fade text-xs-left" data-backdrop="static" id="dados-obrigatorios" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Dados obrigatórios não informados.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO CADASTRAR/ALTERAR OS DADOS -->
<div class="modal fade text-xs-left" data-backdrop="static" id="erro-relatorio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i>
                    <?php if (isset($idAluno)) { ?> Erro ao alterar os dados.
                    <?php } else { ?> Erro ao cadastrar os dados. <?php } ?></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - FALHA AO SE CONECTAR COM A INTERNET -->
<div class="modal fade text-xs-left" data-backdrop="static" id="falha-internet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Sem conexão com a Internet.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function gerarRelatorio() {
        var tipoConta = $('#tipoConta').val();
        var statusConta = $('#statusConta').val();
        window.location.href = "imprimir-relatorio/" + tipoConta + "/" + statusConta;
    }
</script>
