
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
                                    <div class="form-body">
                                        <form name="formCadastrarEditarTreino" id="formCadastrarEditarTreino">
                                            <input type="hidden" name="idExercicio" id="idExercicio">
                                            <input type="hidden" name="idTreino" id="idTreino" value="<?php echo $idTreino; ?>">
                                            <input type="hidden" name="idAluno" id="idAluno" value="<?php echo $idAluno; ?>">
                                            <input type="hidden" id="statusTreino" name="statusTreino" value="<?php echo $statusTreino; ?>">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Descrição do treino:*</label>
                                                        <input type="text" id="nomeTreino" name="nomeTreino" class="form-control" placeholder="Digite a descrição do treino">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Dias de Treino do Aluno:*</label>
                                                    <div class="input-group" style="margin-top: 13px">
                                                        <?php for ($i = 0; $i < count($diasTreinoAluno); $i++) { ?>
                                                            <?php if (strstr($diasTreinoAluno[$i], "Domingo")) { ?>
                                                                <!-- DOMINGO -->
                                                                <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                    <input type="checkbox" name="diasTreinoAluno[]" id="domingo"
                                                                           value="Domingo" class="custom-control-input" name="domingo">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description ml-0">Domingo</span>
                                                                </label>
                                                            <?php } ?>
                                                            <?php if (strstr($diasTreinoAluno[$i], "Segunda")) { ?>
                                                                <!-- SEGUNDA -->
                                                                <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                    <input type="checkbox" name="diasTreinoAluno[]" id="segunda"
                                                                           value="Segunda" class="custom-control-input" name="segunda">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description ml-0">Segunda</span>
                                                                </label>
                                                            <?php } ?>
                                                            <?php if (strstr($diasTreinoAluno[$i], "Terça")) { ?>
                                                                <!-- TERÇA -->
                                                                <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                    <input type="checkbox" name="diasTreinoAluno[]" id="terca"
                                                                           value="Terça" class="custom-control-input" name="terca">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description ml-0">Terça</span>
                                                                </label>
                                                            <?php } ?>
                                                            <?php if (strstr($diasTreinoAluno[$i], "Quarta")) { ?>
                                                                <!-- QUARTA -->
                                                                <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                    <input type="checkbox" name="diasTreinoAluno[]" id="quarta"
                                                                           value="Quarta" class="custom-control-input" name="quarta">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description ml-0">Quarta</span>
                                                                </label>
                                                            <?php } ?>
                                                            <?php if (strstr($diasTreinoAluno[$i], "Quinta")) { ?>
                                                                <!-- QUINTA -->
                                                                <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                    <input type="checkbox" name="diasTreinoAluno[]" id="quinta"
                                                                           value="Quinta" class="custom-control-input" name="quinta">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description ml-0">Quinta</span>
                                                                </label>
                                                            <?php } ?>
                                                            <?php if (strstr($diasTreinoAluno[$i], "Sexta")) { ?>
                                                                <!-- SEXTA -->
                                                                <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                    <input type="checkbox" name="diasTreinoAluno[]" id="sexta"
                                                                           value="Sexta" class="custom-control-input" name="sexta">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description ml-0">Sexta</span>
                                                                </label>
                                                            <?php } ?>
                                                            <?php if (strstr($diasTreinoAluno[$i], "Sábado")) { ?>
                                                                <!-- SÁBADO -->
                                                                <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                    <input type="checkbox" name="diasTreinoAluno[]" id="sabado"
                                                                           value="Sábado" class="custom-control-input" name="sabado">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description ml-0">Sábado</span>
                                                                </label>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="form-group position-relative">
                                                        <label>Nome do Exercício:</label>
                                                        <input type="text" class="form-control" placeholder="Digite o nome de um exercício..."
                                                               name="pesquisarExercicio" id="pesquisarExercicio" onkeyup="pesquisarExercicio();">
                                                        <div class="form-control-position" style="margin-top: 38px;">
                                                            <i class="icon-search4 font-medium-4"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form name="formCadEditTreino" id="formCadEditTreino">
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
                                                                                    <input type="checkbox" name="exerciciosSelecionados[<?php echo $exercicio->idExercicio; ?>]"
                                                                                           value="<?php echo $exercicio->nomeExercicio; ?>"
                                                                                           onchange="selecionarExercicio(this, <?php echo $exercicio->idExercicio; ?>);">
                                                                                </td>
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
                                                                <ul class="pagination text-dark">
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <hr>
                                        <!-- BOTÕES -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-actions" style="float: right;">
                                                    <button type="submit" class="btn btn-primary" onclick="verificarDadosTreino();">
                                                        Continuar <i class="icon-chevron-right"></i>
                                                    </button>
                                                </div>
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

<!-- MODAL - ERRO CADASTRAR TREINO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="erro-continuar-treino" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Erro ao continuar com o treino.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - SELECIONE AO MENOS UM EXERCÍCIO ANTES DE CONTINUAR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="dados-obrigatorios" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Dado(s) obrigatório(s) não informado(s).</h4>
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

<script>
    function selecionarExercicio(obj, idExercicio) {
        var strAux = "|" + idExercicio;
        var strIdExercicio = document.getElementById('idExercicio').value;

        if (obj.checked) {
            strIdExercicio += "|" + idExercicio;
        } else {
            if (strIdExercicio.search(idExercicio) > 0) {
                strIdExercicio = strIdExercicio.replace(strAux, "");
            }
        }

        document.getElementById('idExercicio').value = strIdExercicio;
    }

    function cadEditTreino() {
        $.ajax({
            url: "<?php echo base_url('TreinoController/cCadastrarEditarTreino') ?>",
            type: "POST",
            data: $('#formCadastrarEditarTreino').serialize(),
            dataType: "JSON",
            success: function (data) {
                if (data.success) {
                    window.location.href = '<?php echo base_url('cadastrar-exercicios-treino/'); ?>' +
                            document.getElementById('idAluno').value + "/" + data.idTreino + "/" +
                            data.idTreinoN + document.getElementById('idExercicio').value;
                } else {
                    $('erro-continuar-treino').modal('show');
                }
            },
            error: function (request, status, error) {
                $('#falha-internet').modal('show');
            }
        });
    }
</script>
