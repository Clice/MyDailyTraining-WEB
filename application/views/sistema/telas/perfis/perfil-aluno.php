
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
                                    <?php foreach ($perfilAluno as $aluno) { ?>
                                        <div class="content-header row">
                                            <div class="content-header-left col-md-5 mb-1">
                                                <h2 class="content-header-title"><?php echo $aluno->nomeAluno; ?></h2>
                                            </div>

                                            <!-- BOTÕES -->
                                            <div style="float: right;" class="form-actions">
                                                <?php if ($this->session->userdata('tipoConta') == 4) { ?>
                                                    <button type="button" class="btn btn-indigo" onclick="verificarDiasTreinoAluno();">
                                                        <i class="icon-IcoMoon"></i> Definir Treino
                                                    </button>
                                                    <?php if ($aluno->statusAluno != 0) { ?>
                                                        <button type="button" class="btn btn-blue" onclick="window.location.href = '<?php echo base_url('cadastrar-avaliacao-fisica/' . md5($aluno->idAluno)); ?>'">
                                                            <i class="icon-user5"></i> Realizar Avaliação Física
                                                        </button>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                <button type="button" class="btn btn-green" onclick="window.location.href = '<?php echo base_url('imprimir-ficha/' . md5($aluno->idAluno)); ?>'">
                                                    <i class="icon-print"></i> Imprimir Ficha
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <input type="hidden" name="idAluno" id="idAluno" value="<?php echo $aluno->idAluno; ?>">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>
                                            <div class="row">
                                                <!-- CPF DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>CPF: </strong></h4>
                                                        <h4><?php echo $aluno->cpfAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- RG DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>RG: </strong></h4>
                                                        <h4><?php echo $aluno->rgAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DO ALUNO -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h4><strong>E-mail: </strong></h4>
                                                        <h4><?php echo $aluno->emailAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Telefone: </strong></h4>
                                                        <h4><?php echo $aluno->telefoneAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- SEXO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Sexo: </strong></h4>
                                                        <h4><?php echo $aluno->sexoAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- DATA DO NASCIMENTO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Data de Nascimento: </strong></h4>
                                                        <h4><?php echo formatarData($aluno->dataNascimentoAluno); ?></h4>
                                                    </div>
                                                </div>
                                                <!-- IDADE DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Idade: </strong></h4>
                                                        <h4><?php echo $aluno->idadeAluno; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- ENDEREÇO DO ALUNO -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <h4><strong>Endereço: </strong></h4>
                                                        <h4><?php echo $aluno->enderecoAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CEP DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>CEP: </strong></h4>
                                                        <h4><?php echo $aluno->cepAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Bairro: </strong></h4>
                                                        <h4><?php echo $aluno->bairroAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- CIDADE DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Cidade: </strong></h4>
                                                        <h4><?php echo $aluno->cidadeAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- ESTADO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <h4><strong>Estado: </strong></h4>
                                                        <h4><?php echo $aluno->estadoAluno; ?></h4>
                                                    </div>
                                                </div>                                     
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <!-- DIA DA AVALIAÇÃO DO ALUNO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Data da Próxima Avaliação: </strong></h4>
                                                    <h4><?php echo dataProximoMes($aluno->diaValidadeExame); ?></h4>
                                                </div>
                                            </div>
                                            <!-- DIA DO PAGAMENTO DO ALUNO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Dia do Pagamento: </strong></h4>
                                                    <h4><?php echo dataProximoMes($aluno->diaPagamentoAluno); ?></h4>
                                                </div>
                                            </div>
                                            <!-- OBJETIVO DO ALUNO -->
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h4><strong>Objetivo: </strong></h4>
                                                    <h4><?php echo $aluno->objetivoAluno; ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <!-- DIAS DE TREINO DO ALUNO -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h4><strong>Dias de Treino: </strong></h4>
                                                    <h4><?php echo formartarDiasTreino($aluno->diasTreinoAluno); ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <?php
                                            if ($aluno->nomeResponsavelAluno != NULL || $aluno->cirurgias != NULL ||
                                                    $aluno->medicamentos != NULL || $aluno->doencasFamiliares != NULL) {
                                                ?>
                                                <h4 style="margin-left: 14px;"><strong>Observações:</strong></h4>
                                                <br>
                                            <?php } ?>
                                            <?php if (!$aluno->nomeResponsavelAluno == NULL) { ?>
                                                <!-- NOME DO RESPONSÁVEL DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Nome do Responsável:</strong></h4>
                                                        <h4><?php echo $aluno->nomeResponsavelAluno; ?></h4>
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO RESPONSÁVEL DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Telefone do Responsável:</strong></h4>
                                                        <h4><?php echo $aluno->telefoneResponsavelAluno; ?></h4>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="row">
                                            <?php if (!$aluno->cirurgias == NULL) { ?>
                                                <br>
                                                <!-- CIRURGIAS DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Cirurgias: </strong></h4>
                                                        <h4><?php echo $aluno->cirurgias; ?></h4>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if (!$aluno->medicamentos == NULL) { ?>
                                                <!-- MEDICAMENTOS DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Medicamentos: </strong></h4>
                                                        <h4><?php echo $aluno->medicamentos; ?></h4>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php if (!$aluno->doencasFamiliares == NULL) { ?>
                                                <!-- DOENÇAS FAMILIARES DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h4><strong>Doenças Familiares: </strong></h4>
                                                        <h4><?php echo $aluno->doencasFamiliares; ?></h4>
                                                    </div>
                                                </div>                                   
                                            <?php } ?>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div style="float: right;" class="form-actions">
                                                    <button type="button"                               
                                                    <?php if ($aluno->statusAluno == 1) { ?>
                                                                class="btn btn-black"
                                                                onclick="modalDesBloquearAluno(this, <?php echo $aluno->idAluno; ?>, true);"
                                                            <?php } else { ?>
                                                                class="btn btn-blue"
                                                                onclick="modalDesBloquearAluno(this, <?php echo $aluno->idAluno; ?>, false);"
                                                            <?php } ?>
                                                            ><i <?php if ($aluno->statusAluno == 1) { ?>
                                                                class="icon-lock"
                                                            <?php } else { ?>
                                                                class="icon-unlock"
                                                            <?php } ?>></i><?php if ($aluno->statusAluno) { ?> Bloquear <?php } else { ?> Desbloquear <?php } ?>
                                                    </button>
                                                    <button type="button" class="btn btn-warning" onclick="window.location.href = '<?php echo base_url('editar-aluno/' . md5($aluno->idAluno)); ?>'">
                                                        <i class="icon-edit"></i> Editar
                                                    </button>
                                                    <button type="button" class="btn btn-danger" onclick="modalExcluirAluno(<?php echo $aluno->idAluno; ?>);">
                                                        <i class="icon-trash"></i> Excluir
                                                    </button>
                                                    <button type="button" class="btn btn-default" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">
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

            <?php if (count($treinosAluno) > 0) { ?>
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header bg-blue white">
                                    <h4 class="card-title white">Treinos</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
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
                                                                            <th>Nome do Treino</th>
                                                                            <th>Dias da Semana</th>
                                                                            <th style="text-align: center;">Exercícios</th>
                                                                            <?php if ($this->session->userdata('tipoConta') == 4) { ?>
                                                                                <th style="text-align: center;">Opções</th>
                                                                            <?php } ?>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>  
                                                                        <?php foreach ($treinosAluno as $treinoAluno) { ?>
                                                                            <tr>
                                                                                <td><?php echo $treinoAluno->nomeTreino; ?></td>
                                                                                <td><?php
                                                                                    if ($treinoAluno->domingo == true) {
                                                                                        echo "Domingo; ";
                                                                                    }

                                                                                    if ($treinoAluno->segunda == true) {
                                                                                        echo "Segunda; ";
                                                                                    }

                                                                                    if ($treinoAluno->terca == true) {
                                                                                        echo "Terça; ";
                                                                                    }

                                                                                    if ($treinoAluno->quarta == true) {
                                                                                        echo "Quarta; ";
                                                                                    }

                                                                                    if ($treinoAluno->quinta == true) {
                                                                                        echo "Quinta; ";
                                                                                    }

                                                                                    if ($treinoAluno->sexta == true) {
                                                                                        echo "Sexta; ";
                                                                                    }

                                                                                    if ($treinoAluno->sabado == true) {
                                                                                        echo "Sábado; ";
                                                                                    }
                                                                                    ?>
                                                                                </td>  
                                                                                <td>
                                                                                    <?php
                                                                                    for ($i = 0; $i < count($exerciciosTreinos); $i++) {
                                                                                        for ($j = 0; $j < count($exerciciosTreinos[$i]); $j++) {
                                                                                            if ($exerciciosTreinos[$i][$j]['idTreino'] == $treinoAluno->idTreino) {
                                                                                                echo $exerciciosTreinos[$i][$j]['nomeExercicio'] . "; ";
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                    ?>
                                                                                </td>
                                                                                <?php if ($this->session->userdata('tipoConta') == 4) { ?>
                                                                                    <td style="text-align: center;">
                                                                                        <button type="button" class="btn mb-1 btn-success btn-sm" 
                                                                                                onclick="window.location.href = '<?php echo base_url('perfil-treino/' . md5($treinoAluno->idTreino)); ?>'"><i class="icon-eye"></i> Ver Perfil</button>
                                                                                        <button type="button" class="btn mb-1 btn-warning btn-sm" 
                                                                                                onclick="window.location.href = '<?php echo base_url('editar-treino/' . $treinoAluno->idTreino); ?>'"><i class="icon-edit"></i> Editar</button>
                                                                                        <button type="button" class="btn mb-1 btn-danger btn-sm" 
                                                                                                onclick="modalExcluirTreino(<?php echo $treinoAluno->idTreino; ?>);"><i class="icon-trash-o"></i> Excluir</button>
                                                                                    </td>
                                                                                <?php } ?>
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
            <?php } ?>
        </div>
    </div>
</div>

<!-- MODAL - DIAS DE TREINO DO ALUNO COMPLETOS -->
<div class="modal fade text-xs-left" data-backdrop="static" id="erro-dias-completos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Dias de treino do aluno completos.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script>
    function verificarDiasTreinoAluno() {
        var dados = "idAluno=" + document.getElementById('idAluno').value;
        $.ajax({
            url: "<?php echo base_url('TreinoAlunoController/cVerificarDiasTreinosAluno') ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                if (data.success) {
                    window.location.href = '<?php echo base_url('cadastrar-treino/' . $idAluno . '/novo'); ?>';
                } else {
                    $('#erro-dias-completos').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>
