
<!-- CADASTRAR AVALIAÇÃO FÍSICA -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DO PÁGINA -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <!-- TÍTULO DO PÁGINA -->
                                    <div class="content-header row">
                                        <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                            <h2 class="content-header-title"><?php echo $nomePagina; ?></h2>
                                        </div>
                                    </div>
                                    <hr>
                                    <form class="form" id="formCadadastrarAvaliacaoFisicaAluno" name="formCadadastrarAvaliacaoFisicaAluno">
                                        <?php foreach ($dadosAluno as $dadoAluno) { ?>
                                            <input type="hidden" name="idAluno" id="idAluno" value="<?php echo $dadoAluno->idAluno; ?>">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h4><strong>Nome do aluno: <?php echo $dadoAluno->nomeAluno; ?></strong></h4>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h4 style="float: right;"><strong>Data: <?php echo $dataDia; ?></strong></h4>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <br><br>
                                            <div class="row">
                                                <!-- PESO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Peso:*</label>
                                                        <input type="text" id="pesoAluno" name="pesoAluno" class="form-control" 
                                                               placeholder="Digite o valor em kg" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- ESTATURA DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Estatura:*</label>
                                                        <input type="text" id="estaturaAluno" name="estaturaAluno" class="form-control" 
                                                               placeholder="Digite o valor em metros" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- OMBRO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Ombro:*</label>
                                                        <input type="text" id="ombroAluno" name="ombroAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- TORAX INSPIRADO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Torax Inspirado:*</label>
                                                        <input type="text" id="toraxInspiradoAluno" name="toraxInspiradoAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- TORAX INSPIRADO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Torax Relaxado:</label>
                                                        <input type="text" id="toraxRelaxadoAluno" name="toraxRelaxadoAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- BRAÇO ESQUERDO RELAXADO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Braço Esquerdo Relaxado:*</label>
                                                        <input type="text" id="bracoEsquerdoReladoAluno" name="bracoEsquerdoReladoAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- BRAÇO DIREITO RELAXADO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Braço Direito Relaxado:*</label>
                                                        <input type="text" id="bracoDireitoReladoAluno" name="bracoDireitoReladoAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- ANTEBRAÇO ESQUERDO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Antebraço Esquerdo:*</label>
                                                        <input type="text" id="antebracoEsquerdoAluno" name="antebracoEsquerdoAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- ANTEBRAÇO DIREITO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Antebraço Direito:*</label>
                                                        <input type="text" id="antebracoDireitoAluno" name="antebracoDireitoAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- BRAÇO ESQUERDO CONTRAÍDO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Braço Esquerdo Contraído:*</label>
                                                        <input type="text" id="bracoEsquerdoContraidoAluno" name="bracoEsquerdoContraidoAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- BRAÇO DIREITO CONTRAÍDO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Braço Direito Contraído:*</label>
                                                        <input type="text" id="bracoDireitoContraidoAluno" name="bracoDireitoContraidoAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- CINTURA DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Cintura:*</label>
                                                        <input type="text" id="cinturaAluno" name="cinturaAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- ABDÔMEN DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Abdômen:*</label>
                                                        <input type="text" id="abdomenAluno" name="abdomenAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- QUADRIL DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Quadril:*</label>
                                                        <input type="text" id="quadrilAluno" name="quadrilAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- QUADRIL ESQUERDO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Coxa Esquerda:*</label>
                                                        <input type="text" id="coxaEsquerdaAluno" name="coxaEsquerdaAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- QUADRIL DIREITO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Coxa Direita:*</label>
                                                        <input type="text" id="coxaDireitaAluno" name="coxaDireitaAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- PANTURRILHA ESQUERDA DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Panturrilha Esquerda:</label>
                                                        <input type="text" id="panturrilhaEsquerdaAluno" name="panturrilhaEsquerdaAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- PANTURRILHA DIREITA DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Panturrilha Direita:</label>
                                                        <input type="text" id="panturrilhaDireitaAluno" name="panturrilhaDireitaAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- PERNA ESQUERDA DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Perna Esquerda:*</label>
                                                        <input type="text" id="pernaEsquerdaAluno" name="pernaEsquerdaAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- PERNA DIREITA DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Perna Direita:*</label>
                                                        <input type="text" id="pernaDireitaAluno" name="pernaDireitaAluno" class="form-control" 
                                                               placeholder="Digite o valor em cm" minlength="5">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Observações:</label>
                                                        <textarea id="observacoesAluno" name="observacoesAluno" rows="4" class="form-control" maxlengt="200">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </form>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="float: right;" class="form-actions">
                                                <button type="submit" class="btn btn-success" onclick="verificarDadosAvaliacaoFisica();">
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

<!--MODAL - DADOS CADASTRADOS COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="sucesso-avaliacao-fisica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> Dados cadastrados com sucesso.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO CADASTRAR OS DADOS -->
<div class="modal fade text-xs-left" data-backdrop="static" id="erro-avaliacao-fisica" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Erro ao cadastrar os dados.</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.reload();">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function cadAvaliacaoFisicaAluno() {
        $.ajax({
            url: "<?php echo base_url('AvaliacaoFisicaController/cCadastrarAvaliacaoFisica') ?>",
            type: "POST",
            data: $('#formCadadastrarAvaliacaoFisicaAluno').serialize(),
            dataType: "JSON",
            success: function (data) {
                if (data.success) {
                    $('#sucesso-avaliacao-fisica').modal('show');
                } else {
                    $('#erro-avaliacao-fisica').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>
