
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
                                            <h2 class="content-header-title"><?php echo $nomePagina; ?></h2>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- EXERCÍCIOS SELEICONADOS PELO INSTRUTOR PARA O TREINO -->
            <?php foreach ($exercicios as $indice => $exercicio) { ?>
                <section id="card-actions">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-header bg-blue white">
                                    <h4 class="card-title white"><?php echo $exercicios[$indice]['nomeExercicio']; ?></h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                </div>                                     
                                <div class="card-body collapse in">
                                    <div class="card-block">
                                        <form name="formCadastrarEditarExercicioTreino<?php echo $exercicios[$indice]['idExercicio']; ?>" 
                                              id="formCadastrarEditarExercicioTreino<?php echo $exercicios[$indice]['idExercicio']; ?>">
                                            <input type="hidden" id="idExercicioTreino<?php echo $exercicios[$indice]['idExercicio']; ?>" 
                                                   name="idExercicioTreino" value="<?php echo $exercicios[$indice]['idExercicioTreino']; ?>">
                                            <input type="hidden" id="idTreino" name="idTreino" value="<?php echo $idTreino; ?>">
                                            <input type="hidden" id="statusTreino" name="statusTreino" value="<?php echo $statusTreino; ?>">
                                            <input type="hidden" id="idExercicio" name="idExercicio" value="<?php echo $exercicios[$indice]['idExercicio']; ?>">
                                            <div class="row">
                                                <!-- SE O EXERCÍCIO JÁ FOI SALVO NO BANCO DE DADOS -->
                                                <?php if ($exercicios[$indice]['idExercicioTreino'] != "novo") { ?>
                                                    <!-- SE O TIPO DE EXERCICIO FOR 1 -->
                                                    <?php if ($exercicios[$indice]['tipoExercicio'] == true) { ?>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <h4><strong>Séries:</strong></h4>
                                                                <h4><?php echo $exercicios[$indice]['serieExercicioTreino'] . " vezes"; ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <h4><strong>Repetições:</strong></h4>
                                                                <h4><?php echo $exercicios[$indice]['repeticoesExercicioTreino'] . " vezes"; ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <h4><strong>Carga:</strong></h4>
                                                                <h4><?php echo $exercicios[$indice]['cargaExercicioTreino'] . " kg"; ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <h4><strong>Tempo de Descanso:</strong></h4>
                                                                <h4><?php echo $exercicios[$indice]['descansoExercicioTreino'] . " segundos"; ?></h4>
                                                            </div>
                                                        </div>                                                    
                                                    <?php } else { ?>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <h4><strong>Tempo:</strong></h4>
                                                                <h4><?php echo $exercicios[$indice]['tempoExercicioTreino'] . " minutos"; ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <h4><strong>Velocidade:</strong></h4>
                                                                <h4><?php echo $exercicios[$indice]['velocidadeExercicioTreino']; ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <h4><strong>Carga:</strong></h4>
                                                                <h4><?php echo $exercicios[$indice]['cargaExercicioTreino'] . " kg"; ?></h4>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                    <!-- SE O EXERCÍCIO AINDA NÃO FOI SALVO NO BANCO DE DADOS -->
                                                <?php } else { ?>
                                                    <?php if ($exercicios[$indice]['tipoExercicio'] == true) { ?>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Séries:</label>
                                                                <input type="text" id="serieExercicioTreino<?php echo $exercicios[$indice]['idExercicio']; ?>" 
                                                                       name="serieExercicioTreino" class="form-control" placeholder="Digite a quantidade de séries" 
                                                                       value="<?php echo $exercicios[$indice]['serieExercicioTreino']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Repetições:</label>
                                                                <input type="text" id="repeticoesExercicioTreino<?php echo $exercicios[$indice]['idExercicio']; ?>" 
                                                                       name="repeticoesExercicioTreino" class="form-control" placeholder="Digite a quantidade de repetições" 
                                                                       value="<?php echo $exercicios[$indice]['repeticoesExercicioTreino']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Carga:</label>
                                                                <input type="text" id="cargaExercicioTreino<?php echo $exercicios[$indice]['idExercicio']; ?>" 
                                                                       name="cargaExercicioTreino" class="form-control" placeholder="Digite a carga (kg)" 
                                                                       value="<?php echo $exercicios[$indice]['cargaExercicioTreino']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Tempo de Descanso:</label>
                                                                <input type="text" id="descansoExercicioTreino<?php echo $exercicios[$indice]['idExercicio']; ?>" 
                                                                       name="descansoExercicioTreino" class="form-control" placeholder="Digite em segundos o tempo" 
                                                                       value="<?php echo $exercicios[$indice]['descansoExercicioTreino']; ?>">
                                                            </div>
                                                        </div>                                                    
                                                    <?php } else { ?>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Tempo:</label>
                                                                <input type="text" id="tempoExercicioTreino<?php echo $exercicios[$indice]['idExercicio']; ?>" 
                                                                       name="tempoExercicioTreino" class="form-control" placeholder="Digite o tempo em minutos" 
                                                                       value="<?php echo $exercicios[$indice]['tempoExercicioTreino']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Velocidade:</label>
                                                                <input type="text" id="velocidadeExercicioTreino<?php echo $exercicios[$indice]['idExercicio']; ?>" 
                                                                       name="velocidadeExercicioTreino" class="form-control" placeholder="Digite a velocidade do exercicio" 
                                                                       value="<?php echo $exercicios[$indice]['velocidadeExercicioTreino']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Carga:</label>
                                                                <input type="text" id="cargaExercicioTreino<?php echo $exercicios[$indice]['idExercicio']; ?>" 
                                                                       name="cargaExercicioTreino" class="form-control" placeholder="Digite a carga (kg)" 
                                                                       value="<?php echo $exercicios[$indice]['cargaExercicioTreino']; ?>">
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </form>
                                        <?php if ($exercicios[$indice]['idExercicioTreino'] == "novo") { ?>
                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <button style="float: right;" type="submit" class="btn btn-primary" onclick="cadEditExercicio(<?php echo $exercicios[$indice]['idExercicio']; ?>)">
                                                        <i class="icon-plus4"></i> Adicionar
                                                    </button>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>
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
    function cadEditExercicio(idExercicio) {
        var dados = "idTreino=" + $('#idTreino').val() + "&idExercicioTreino=" + $('#idExercicioTreino' + idExercicio).val() +
                "&idExercicio=" + idExercicio + "&serieExercicioTreino=" + $('#serieExercicioTreino' + idExercicio).val() +
                "&cargaExercicioTreino=" + $('#cargaExercicioTreino' + idExercicio).val() +
                "&tempoExercicioTreino=" + $('#tempoExercicioTreino' + idExercicio).val() +
                "&descansoExercicioTreino=" + $('#descansoExercicioTreino' + idExercicio).val() +
                "&repeticoesExercicioTreino=" + $('#repeticoesExercicioTreino' + idExercicio).val() +
                "&velocidadeExercicioTreino=" + $('#velocidadeExercicioTreino' + idExercicio).val();

        $.ajax({
            url: "<?php echo base_url('TreinoController/cCadastrarEditarExercicioTreino') ?>",
            type: "POST",
            data: dados,
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
