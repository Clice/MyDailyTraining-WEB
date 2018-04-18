
<!-- FORM DE CADASTRO DO TREINO -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <!-- CONTEÚDO DA PÁGINA - CAMPOS DE PREENCHIMENTO -->
        <div class="content-body">
            <!-- EXERCÍCIOS SELEICONADOS PELO INSTRUTOR PARA O TREINO -->
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header bg-blue white">
                                <h4 class="card-title white"><?php echo $nomePagina; ?></h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                <input type="hidden" id="idTreino" name="idTreino" value="<?php echo $idTreino; ?>">
                                <input type="hidden" id="statusTreino" name="statusTreino" value="<?php echo $statusTreino; ?>">
                            </div>
                            <input type="hidden" id="idTreino" name="idTreino">
                            <div class="card-body collapse in">
                                <div class="card-block-cadastro">
                                    <div class="form-body">
                                        <div class="content-body">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-body collapse in">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover mb-0" id="tabelaTreinos">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nome do Exercício</th>
                                                                        <th>Série</th>
                                                                        <th>Repetições</th>
                                                                        <th>Carga</th>
                                                                        <th>Descanso</th>
                                                                        <th style="text-align: center;">Opções</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach ($exercicios as $indice => $exercicio) { ?>
                                                                        <tr>
                                                                    <input type="hidden" id="idExercicioTreino<?php echo $exercicios[$indice]['idExercicio'] ?>"
                                                                           name="idExercicioTreino<?php echo $exercicios[$indice]['idExercicio'] ?>"
                                                                           value="<?php echo $exercicios[$indice]['idExercicioTreino'] ?>">
                                                                    <td><?php echo $exercicios[$indice]['nomeExercicio']; ?></td>
                                                                    <td><?php
                                                                        if ($exercicios[$indice]['serieExercicioTreino'] != NULL) {
                                                                            echo $exercicios[$indice]['serieExercicioTreino'] . " vezes";
                                                                        } else {
                                                                            echo '0 vezes';
                                                                        }
                                                                        ?></td>
                                                                    <td><?php
                                                                        if ($exercicios[$indice]['repeticoesExercicioTreino'] != NULL) {
                                                                            echo $exercicios[$indice]['repeticoesExercicioTreino'] . " vezes";
                                                                        } else {
                                                                            echo '0 vezes';
                                                                        }
                                                                        ?></td>
                                                                    <td><?php
                                                                        if ($exercicios[$indice]['cargaExercicioTreino'] != NULL) {
                                                                            echo $exercicios[$indice]['cargaExercicioTreino'] . " kg";
                                                                        } else {
                                                                            echo '0 kg';
                                                                        }
                                                                        ?></td>
                                                                    <td><?php
                                                                        if ($exercicios[$indice]['descansoExercicioTreino'] != NULL) {
                                                                            echo $exercicios[$indice]['descansoExercicioTreino'] . " s";
                                                                        } else {
                                                                            echo '0 s';
                                                                        }
                                                                        ?></td>
                                                                    <td style="text-align: center;">
                                                                        <button type="button" class="btn mb-1 btn-warning btn-sm"
                                                                                onclick="cardCadEditarExercicio(<?php echo $exercicios[$indice]['idExercicio']; ?>)"><i class="icon-edit"></i> Editar</button>
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
            </section>

            <section id="card-actions" class="hidden">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card">
                            <div class="card-header bg-blue white">
                                <h4 class="card-title white" id="nomeExercicio"></h4>
                                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <form name="formCadastrarEditarExercicioTreino" id="formCadastrarEditarExercicioTreino">
                                        <input type="hidden" id="idExercicio" name="idExercicio">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Séries:</label>
                                                    <input type="text" id="serieExercicioTreino" name="serieExercicioTreino" class="form-control"
                                                           placeholder="Digite a quantidade de séries">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Repetições:</label>
                                                    <input type="text" id="repeticoesExercicioTreino"
                                                           name="repeticoesExercicioTreino" class="form-control" placeholder="Digite a quantidade de repetições">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Carga:</label>
                                                    <input type="text" id="cargaExercicioTreino" name="cargaExercicioTreino"
                                                           class="form-control" placeholder="Digite a carga (kg)">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Tempo de Descanso:</label>
                                                    <input type="text" id="descansoExercicioTreino" name="descansoExercicioTreino"
                                                           class="form-control" placeholder="Digite em segundos o tempo">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <button style="float: right;" type="submit" class="btn btn-primary" onclick="cadEditExercicio()">
                                                <i class="icon-plus4"></i> Adicionar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block-cadastro">
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <label>Observações:</label>
                                            <div class="form-group">
                                                <textarea type="text" class="form-control" name="observacoesTreino"
                                                          id="observacoesTreino"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div style="float: right;" class="form-actions">
                                                <button type="submit" class="btn btn-success" onclick="editTreino();">
                                                    <i class="icon-check2"></i> Salvar
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

<!-- MODAL - EXERCÍCIO ADICIONADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="sucesso-exercicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Exercício cadastrado com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('cadastrar-exercicios-treino/' . $urlPagina); ?>';">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO ADICIONAR O EXERCÍCIO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="erro-exercicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao adicionar o exercício.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - EXERCÍCIO ADICIONADO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="sucesso-treino" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Treino cadastrado com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '<?php echo base_url('perfil-aluno/' . md5($idAluno)); ?>';">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO ADICIONAR O EXERCÍCIO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="erro-treino" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao cadastrar o treino.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script>
    function cardCadEditarExercicio(idExercicio) {
        var dados = 'idExercicio=' + idExercicio + '&idTreino=' + $('#idTreino').val();
        $.ajax({
            url: "<?php echo base_url('ExercicioTreinoController/cVisualizarExercicio') ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                if (data.success) {
                    document.getElementById('idExercicio').value = idExercicio;
                    document.getElementById('nomeExercicio').innerHTML = data.nomeExercicio;
                    if (data.idExercicioTreino) {
                        document.getElementById('serieExercicioTreino').value = data.serieExercicioTreino;
                        document.getElementById('repeticoesExercicioTreino').value = data.repeticoesExercicioTreino;
                        document.getElementById('cargaExercicioTreino').value = data.cargaExercicioTreino;
                        document.getElementById('descansoExercicioTreino').value = data.descansoExercicioTreino;
                    } else {
                        document.getElementById('serieExercicioTreino').value = '';
                        document.getElementById('repeticoesExercicioTreino').value = '';
                        document.getElementById('cargaExercicioTreino').value = '';
                        document.getElementById('descansoExercicioTreino').value = '';
                    }
                    $('#card-actions').removeClass('hidden');
                } else {

                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function cadEditExercicio() {
        var dados = '&idExercicioTreino=' + $('#idExercicioTreino' + $('#idExercicio').val()).val() +
                '&idTreino=' + $('#idTreino').val();
        $.ajax({
            url: "<?php echo base_url('TreinoController/cCadastrarEditarExercicioTreino') ?>",
            type: "POST",
            data: $('#formCadastrarEditarExercicioTreino').serialize() + dados,
            dataType: "JSON",
            success: function (data) {
                if (data.success) {
                    $('#sucesso-exercicio').modal('show');
                } else {
                    $('#erro-exercicio').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function editTreino() {
        var dados = "idTreino=" + $('#idTreino').val() + "&observacoesTreino=" + $('#observacoesTreino').val() +
                "&statusTreino=" + $('#statusTreino').val();
        $.ajax({
            url: "<?php echo base_url('TreinoController/cEditarTreino') ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                if (data.success) {
                    $('#sucesso-treino').modal('show');
                } else {
                    alert('entrou erro');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>
