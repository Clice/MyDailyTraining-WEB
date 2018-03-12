
<!-- DADOS DO ALUNO -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DO PÁGINA - DADOS DO ALUNO ESCOLHIDO -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <!-- TÍTULO DO PÁGINA - NOME DO ALUNO -->
                                    <?php foreach ($perfilTreino as $treino) { ?>
                                        <div class="content-header row">
                                            <div class="content-header-left col-md-12 mb-1">
                                                <h2 class="content-header-title"><?php echo $treino->nomeTreino; ?></h2>
                                            </div>
                                        </div>
                                        <hr>
                                        <input type="hidden" name="idTreino" id="idTreino" value="<?php echo $treino->idTreino; ?>">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="card">
                                                <div class="card-body collapse in">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover mb-0" id="tabelaExercicios">
                                                            <thead>
                                                                <tr>                                                                     
                                                                    <th>Nome do Exercício</th>
                                                                    <th>Grupo Muscular</th>
                                                                    <th style="text-align: center;">Série</th>
                                                                    <th style="text-align: center;">Repetições</th>
                                                                    <th style="text-align: center;">Carga (kg)</th>
                                                                    <th style="text-align: center;">Descanso (s)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($exerciciosTreino as $exercicio) { ?>
                                                                    <tr>
                                                                        <td><?php echo $exercicio->nomeExercicio; ?></td>
                                                                        <td><?php echo $exercicio->grupoMuscular; ?></td>
                                                                        <td style="text-align: center;"><?php echo $exercicio->serieExercicioTreino; ?></td>
                                                                        <td style="text-align: center;"><?php echo $exercicio->repeticoesExercicioTreino; ?></td>
                                                                        <td style="text-align: center;"><?php echo $exercicio->cargaExercicioTreino; ?></td>
                                                                        <td style="text-align: center;"><?php echo $exercicio->descansoExercicioTreino; ?></td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>                                                            
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="float: right;" class="form-actions">
                                                    <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo base_url('perfil-aluno/' . md5($treino->idAluno)); ?>'">
                                                        <i class="icon-chevron-left2"></i> Voltar
                                                    </button>
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
        </div>
    </div>
</div>
