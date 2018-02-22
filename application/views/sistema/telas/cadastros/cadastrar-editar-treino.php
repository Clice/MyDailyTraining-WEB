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


            <input type="hidden" id="idTreino" name="idTreino" value="<?php echo $idTreino; ?>">

            <!-- DOMINGO -->
            <section id="card-actions">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card disabled">
                            <div class="card-header bg-blue">
                                <h4 class="card-title white">Domingo</h4>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <div style="float: right; margin-bottom: 15px;" class="form-actions">
                                        <a href="<?php echo base_url('lista-exercicios-treino/' . $idTreino); ?>">
                                            <button type="submit" class="btn btn-primary btn-block" id="btAdicionarTreinoDomingo" name="btAdicionarTreinoDomingo">
                                                <i class="icon-plus4"></i> Adicionar
                                            </button>
                                        </a>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0" id="tabelaExerciciosDomingoTreino">
                                                <thead>
                                                    <tr>
                                                        <th>Exercício</th>
                                                        <th>Série</th>
                                                        <th>Repetições</th>
                                                        <th>Carga</th>
                                                        <th style="text-align: center;">Opções</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if ($exerciciosAdicionadosDomingoTreino == NULL) { ?>
                                                        <tr>
                                                            <td class="text-center" colspan="5">Nenhum produto adicionado ao plano</td>
                                                        </tr>
                                                        <?php
                                                    } else {
                                                        foreach ($exerciciosAdicionadosDomingoTreino as $exercicioAdicionadoDomingoTreino) {
                                                            ?>   
                                                            <tr>
                                                                <td><?php echo $exercicioAdicionadoDomingoTreino->nomeUsuario; ?></td>
                                                                <td><?php echo $exercicioAdicionadoDomingoTreino->telefoneUsuario; ?></td>
                                                                <td><?php echo $exercicioAdicionadoDomingoTreino->enderecoUsuario; ?></td>
                                                                <td style="text-align: center;">
                                                                    <button type="button" class="btn mb-1 btn-danger btn-sm" 
                                                                            onclick="window.location.href = '<?php echo base_url('perfil-equaltech/' . md5($exercicioAdicionadoDomingoTreino->idUsuario)); ?>'">
                                                                        <i class="icon-eye"></i> Remover</button>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    }
                                                    ?> 
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
        </section>            

        <!-- SEGUNDA FEIRA -->
        <section id="card-actions">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card disabled">
                        <div class="card-header bg-red">
                            <h4 class="card-title white">Segunda-Feira</h4>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <div style="float: right; margin-bottom: 15px;" class="form-actions">
                                    <button type="submit" class="btn btn-primary" id="btAdicionarTreinoSexta" name="btAdicionarTreinoSexta">
                                        <i class="icon-plus4"></i> Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TERÇA FEIRA -->
        <section id="card-actions">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card disabled">
                        <div class="card-header bg-yellow">
                            <h4 class="card-title white">Terça-Feira</h4>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <div style="float: right; margin-bottom: 15px;" class="form-actions">
                                    <button type="submit" class="btn btn-primary" id="btAdicionarTreinoSexta" name="btAdicionarTreinoSexta">
                                        <i class="icon-plus4"></i> Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- QUARTA FEIRA -->
        <section id="card-actions">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card disabled">
                        <div class="card-header bg-teal">
                            <h4 class="card-title white">Quarta-Feira</h4>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <div style="float: right; margin-bottom: 15px;" class="form-actions">
                                    <button type="submit" class="btn btn-primary" id="btAdicionarTreinoSexta" name="btAdicionarTreinoSexta">
                                        <i class="icon-plus4"></i> Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- QUINTA FEIRA -->
        <section id="card-actions">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card disabled">
                        <div class="card-header bg-orange">
                            <h4 class="card-title white">Quinta-Feira</h4>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <div style="float: right; margin-bottom: 15px;" class="form-actions">
                                    <button type="submit" class="btn btn-primary" id="btAdicionarTreinoSexta" name="btAdicionarTreinoSexta">
                                        <i class="icon-plus4"></i> Adicionar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEXTA FEIRA -->
        <section id="card-actions">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card disabled">
                        <div class="card-header bg-green">
                            <h4 class="card-title white">Sexta-Feira</h4>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <div style="float: right; margin-bottom: 15px;" class="form-actions">
                                    <button type="submit" class="btn btn-primary" id="btAdicionarTreinoSexta" name="btAdicionarTreinoSexta">
                                        <i class="icon-plus4"></i> Adicionar
                                    </button>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SÁBADO -->
        <section id="card-actions">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="card disabled">
                        <div class="card-header bg-purple">
                            <h4 class="card-title white">Sábado</h4>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <div style="float: right; margin-bottom: 15px;" class="form-actions">
                                    <button type="submit" class="btn btn-primary" id="btAdicionarTreinoSexta" name="btAdicionarTreinoSexta">
                                        <i class="icon-plus4"></i> Adicionar
                                    </button>
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











<!-- FORM DE CADASTRO DO TREINO -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DA PÁGINA - CAMPOS DE PREENCHIMENTO -->


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
