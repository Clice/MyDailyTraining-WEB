
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
                                    <input type="hidden" id="idTreino" name="idTreino">
                                    <input type="hidden" id="idAluno" name="idAluno" value="<?php echo $idAluno; ?>">
                                    <input type="hidden" id="idsTreino" name="idsTreino" value="<?php echo $idsTreino; ?>">
                                    <input type="hidden" id="idTreinoAluno" name="idTreinoAluno" value="<?php echo $idTreinoAluno; ?>">
                                    <input type="text" id="urlPagina" name="urlPagina" value="<?php echo $urlPagina; ?>">
                                    <!-- TÍTULO DA PÁGINA -->
                                    <?php foreach ($perfilAluno as $aluno) { ?>
                                        <div class="content-header row">
                                            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                                <h2 class="content-header-title"><?php echo $nomePagina2 . $aluno->nomeAluno; ?></h2>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group position-relative">
                                                            <input type="text" class="form-control" placeholder="Buscar treino..." 
                                                                   name="pesquisarTreino" id="pesquisarTreino" onkeyup="pesquisarTreino();">
                                                            <div class="form-control-position" style="margin-top: 7px;">
                                                                <i class="icon-search4 font-medium-4"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-body">
                                                <div class="row">
                                                    <div class="card">
                                                        <div class="card-body collapse in">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover mb-0" id="tabelaTreinos">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="text-align: center;">Selecione</th>
                                                                            <th>Nome do Treino</th>
                                                                            <th style="text-align: center;">Exercícios</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php foreach ($treinos as $treino) { ?>                                                                         
                                                                            <tr>
                                                                                <td style="text-align: center;">
                                                                                    <input type="hidden" name="nomeTreino<?php echo $treino->idTreino ?>" id="nomeTreino<?php echo $treino->idTreino ?>" 
                                                                                           value="<?php echo $treino->nomeTreino; ?>">
                                                                                    <input type="checkbox" name="treinosSelecionados[<?php echo $treino->idTreino; ?>]" 
                                                                                           value="<?php echo $treino->nomeTreino; ?>" id="treinosSelecionados[<?php echo $treino->idTreino; ?>]" 
                                                                                           onchange="selecionarTreino(this, <?php echo $treino->idTreino; ?>);">
                                                                                </td>
                                                                                <td><?php echo $treino->nomeTreino; ?></td>
                                                                                <td style="text-align: center; padding: 0.75rem 0px 0px 0px;">
                                                                                    <?php
                                                                                    for ($i = 0; $i < count($exerciciosTreinos); $i++) {
                                                                                        for ($j = 0; $j < count($exerciciosTreinos[$i]); $j++) {
                                                                                            if ($exerciciosTreinos[$i][$j]['idTreino'] == $treino->idTreino) {
                                                                                                echo $exerciciosTreinos[$i][$j]['nomeExercicio'] . "; ";
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                    ?>
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
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                    
            </section>

            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-xl-12">
                        <input type="hidden" name="diasTreinoAluno" id="diasTreinoAluno" value="<?php echo $diasTreinoAluno2; ?>">
                        <?php foreach ($treinos as $treino) { ?> 
                            <div id="<?php echo $treino->idTreino ?>" class="card hidden">
                                <div class="card-header bg-blue white">
                                    <h4 class="card-title white" id="nomeCard<?php echo $treino->idTreino ?>"></h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="card-block-cadastro">
                                        <div class="form-body">
                                            <form class="form" id="formCadEditTreinoAluno<?php echo $treino->idTreino ?>" name="formCadEditTreinoAluno<?php echo $treino->idTreino ?>">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Dias de Treino do Aluno:*</label>
                                                        <div class="input-group" style="margin-top: 13px">
                                                            <?php for ($i = 0; $i < count($diasTreinoAluno); $i++) { ?>
                                                                <?php if (strstr($diasTreinoAluno[$i], "Domingo")) { ?>
                                                                    <!-- DOMINGO -->
                                                                    <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                        <input type="checkbox" name="diasTreinoAluno[]" id="Domingo<?php echo $treino->idTreino; ?>" 
                                                                               value="Domingo" class="custom-control-input" name="domingo<?php echo $treino->idTreino; ?>">
                                                                        <span class="custom-control-indicator"></span>
                                                                        <span class="custom-control-description ml-0">Domingo</span>
                                                                    </label>
                                                                <?php } ?>
                                                                <?php if (strstr($diasTreinoAluno[$i], "Segunda")) { ?>
                                                                    <!-- SEGUNDA -->
                                                                    <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                        <input type="checkbox" name="diasTreinoAluno[]" id="Segunda<?php echo $treino->idTreino; ?>" 
                                                                               value="Segunda" class="custom-control-input" name="segunda<?php echo $treino->idTreino; ?>">
                                                                        <span class="custom-control-indicator"></span>
                                                                        <span class="custom-control-description ml-0">Segunda</span>
                                                                    </label>
                                                                <?php } ?>
                                                                <?php if (strstr($diasTreinoAluno[$i], "Terça")) { ?>
                                                                    <!-- TERÇA -->
                                                                    <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                        <input type="checkbox" name="diasTreinoAluno[]" id="Terça<?php echo $treino->idTreino; ?>" 
                                                                               value="Terça" class="custom-control-input" name="terca<?php echo $treino->idTreino; ?>">
                                                                        <span class="custom-control-indicator"></span>
                                                                        <span class="custom-control-description ml-0">Terça</span>
                                                                    </label>
                                                                <?php } ?>
                                                                <?php if (strstr($diasTreinoAluno[$i], "Quarta")) { ?>
                                                                    <!-- QUARTA -->
                                                                    <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                        <input type="checkbox" name="diasTreinoAluno[]" id="Quarta<?php echo $treino->idTreino; ?>" 
                                                                               value="Quarta" class="custom-control-input" name="quarta<?php echo $treino->idTreino; ?>">
                                                                        <span class="custom-control-indicator"></span>
                                                                        <span class="custom-control-description ml-0">Quarta</span>
                                                                    </label>
                                                                <?php } ?>
                                                                <?php if (strstr($diasTreinoAluno[$i], "Quinta")) { ?>
                                                                    <!-- QUINTA -->
                                                                    <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                        <input type="checkbox" name="diasTreinoAluno[]" id="Quinta<?php echo $treino->idTreino; ?>" 
                                                                               value="Quinta" class="custom-control-input" name="quinta<?php echo $treino->idTreino; ?>">
                                                                        <span class="custom-control-indicator"></span>
                                                                        <span class="custom-control-description ml-0">Quinta</span>
                                                                    </label>
                                                                <?php } ?>
                                                                <?php if (strstr($diasTreinoAluno[$i], "Sexta")) { ?>
                                                                    <!-- SEXTA -->
                                                                    <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                        <input type="checkbox" name="diasTreinoAluno[]" id="Sexta<?php echo $treino->idTreino; ?>" 
                                                                               value="Sexta" class="custom-control-input" name="sexta<?php echo $treino->idTreino; ?>">
                                                                        <span class="custom-control-indicator"></span>
                                                                        <span class="custom-control-description ml-0">Sexta</span>
                                                                    </label>  
                                                                <?php } ?>
                                                                <?php if (strstr($diasTreinoAluno[$i], "Sábado")) { ?>
                                                                    <!-- SÁBADO -->
                                                                    <label class="display-inline-block custom-control custom-checkbox" style="margin-right: 70px;">
                                                                        <input type="checkbox" name="diasTreinoAluno[]" id="Sábado<?php echo $treino->idTreino; ?>" 
                                                                               value="Sábado" class="custom-control-input" name="sabado<?php echo $treino->idTreino; ?>">
                                                                        <span class="custom-control-indicator"></span>
                                                                        <span class="custom-control-description ml-0">Sábado</span>
                                                                    </label>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="float: right;" class="form-actions">
                                                    <button type="submit" class="btn btn-success" onclick="verificarTreinoAluno(<?php echo $treino->idTreino ?>);">
                                                        <i class="icon-check2"></i> Salvar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- MODAL - SELECIONE AO MENOS UM EXERCÍCIO ANTES DE CONTINUAR -->
<div class="modal fade text-xs-left" data-backdrop="static" id="dados-obrigatorios" tabindex="-1" role="dialog"      aria-labelledby="myModalLabel1" aria-hidden="true">
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

<!-- MODAL - ADMINISTRADOR EXCLUÍDO COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="treino-sucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Treino cadastrado com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.href = '' + document.getElementById('idTreino').value;">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script>
    function cadastrarEditarTreinoAluno(idTreino) {
        var dados = $('#formCadEditTreinoAluno' + idTreino).serialize();
        dados = dados + "&idTreino=" + idTreino + "&idTreinoAluno=" + document.getElementById('idTreinoAluno').value + 
                "&idAluno=" + document.getElementById('idAluno').value;

        alert(document.getElementById('idTreino').value);
        
        $.ajax({
            url: "<?php echo base_url('TreinosAlunoController/cDefinirTreinoAluno') ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                if (data.success) {
                    $('#treino-sucesso').modal('show');
                } else {
                    alert('error');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>
