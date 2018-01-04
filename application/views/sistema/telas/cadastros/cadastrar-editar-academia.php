
<!-- FORM DE CADASTRO DA ACADEMIA -->
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
                                    <!-- TÍTULO DA PÁGINA - CADASTRAR ACADEMIA -->
                                    <div class="content-header row">
                                        <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                            <h2 class="content-header-title"><?php echo $nomePagina ?></h2>
                                        </div>
                                    </div>
                                    <form class="form" id="formCadEditAcademia" name="formCadEditAcademia">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>
                                            <input type="hidden" name="idAcademia" id="idAcademia" value="<?php echo $idAcademia; ?>">
                                            <input type="hidden" name="idPlano" id="idPlano" value="<?php echo $idPlano; ?>">
                                            <input type="hidden" name="idPacote" id="idPacote" value="<?php echo $idPacote; ?>">
                                            <input type="hidden" name="statusAcademia" id="statusAcademia" value="<?php echo $statusAcademia; ?>">
                                            <input type="hidden" name="qtdLicencasUsadas" id="qtdLicencasUsadas" value="<?php echo $qtdLicencasUsadas; ?>">
                                            <input type="hidden" name="valorTotal" id="valorTotal" value="<?php echo $valorTotal; ?>">
                                            <input type="hidden" name="valorPago" id="valorPago" value="<?php echo $valorPago; ?>">                                            
                                            <input type="hidden" name="qtdTotalLicencas" id="qtdTotalLicencas" value="<?php echo $qtdTotalLicencas; ?>">
                                            <input type="hidden" name="qtdParcelas" id="qtdParcelas" value="<?php echo $qtdParcelas; ?>">
                                            <div class="row">
                                                <!-- NOME DA ACADEMIA -->
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label>Nome da Academia:*</label>
                                                        <input type="text" id="nomeAcademia" class="form-control" 
                                                               placeholder="Digite o nome da academia" name="nomeAcademia" value="">
                                                    </div>
                                                </div>
                                                <!-- CNPJ DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>CNPJ:*</label>
                                                        <input type="text" id="cnpjAcademia" maxlength="18" class="form-control" value="" 
                                                               placeholder="Digite o CNPJ" name="cnpjAcademia" onchange="verificarCnpj();">
                                                        <small><span id='msnCNPJ'></span></small>
                                                    </div>                                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- ENDEREÇO DA ACADEMIA -->
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label>Endereço:*</label>
                                                        <input type="text" id="enderecoAcademia" class="form-control" 
                                                               placeholder="Digite o endereço" name="enderecoAcademia" value="">
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Telefone:*</label>
                                                        <input type="text" id="telefoneUsuario" class="form-control" 
                                                               placeholder="Digite o telefone" name="telefoneAcademia" maxlength="15" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- ESTADO DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Estado:*</label>
                                                        <select id="estadoAcademia" name="estadoAcademia" class="form-control">
                                                            <option value="">Selecione o estado</option>
                                                            <option value="Acre">Acre</option>
                                                            <option value="Alagoas">Alagoas</option>
                                                            <option value="Amapá">Amapá</option>
                                                            <option value="Amazonas">Amazonas</option>
                                                            <option value="Bahia">Bahia</option>
                                                            <option value="Ceará">Ceará</option>
                                                            <option value="Distrito Federal">Distrito Federal</option>
                                                            <option value="Espírito Santo">Espírito Santo</option>
                                                            <option value="Goiás">Goiás</option>
                                                            <option value="Maranhão">Maranhão</option>
                                                            <option value="Mato Grosso">Mato Grosso</option>
                                                            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                                            <option value="Minas Gerais">Minas Gerais</option>
                                                            <option value="Pará">Pará</option>
                                                            <option value="Paraíba">Paraíba</option>
                                                            <option value="Paraná">Paraná</option>
                                                            <option value="Pernambuco">Pernambuco</option>
                                                            <option value="Piauí">Piauí</option>
                                                            <option value="Rio de Janeiro">Rio de Janeiro</option>
                                                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                                            <option value="Rondônia">Rondônia</option>
                                                            <option value="Roraima">Roraima</option>
                                                            <option value="Santa Catarina">Santa Catarina</option>
                                                            <option value="São Paulo">São Paulo</option>
                                                            <option value="Sergipe">Sergipe</option>
                                                            <option value="Tocantins">Tocantins</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- CIDADE DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Cidade:*</label>
                                                        <input type="text" id="cidadeAcademia" class="form-control" 
                                                               placeholder="Digite a cidade" name="cidadeAcademia" value="">
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Bairro:*</label>
                                                        <input type="text" id="bairroAcademia" class="form-control" 
                                                               placeholder="Digite o bairro" name="bairroAcademia" value="">
                                                    </div>
                                                </div>
                                                <!-- CEP DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>CEP:*</label>
                                                        <input type="text" id="cepAcademia" class="form-control" 
                                                               placeholder="Digite o CEP" name="cepAcademia" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- NOME DO RESPONSÁVEL -->
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label for="projectinput3">Nome do Responsável:*</label>
                                                        <input type="text" id="nomeResponsavelAcademia" class="form-control"
                                                               placeholder="Digite o nome do responsável da academia" 
                                                               name="nomeResponsavelAcademia" value="">
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>E-mail:*</label>
                                                        <input type="e-mail" id="emailAcademia" class="form-control" 
                                                               placeholder="Digite o e-mail" name="emailAcademia" value="">
                                                    </div>
                                                </div>
                                            </div>                                            
                                            <div class="row">
                                                <!-- MENSALIDADE DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Mensalidade da academia:*</label>
                                                        <input type="text" id="mensalidadeAcademia" class="form-control" 
                                                               placeholder="Digite a mensalidade" name="mensalidadeAcademia" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- PLANO DA ACADEMIA -->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Planos:*</label>
                                                        <div class="input-group">
                                                            <!-- PLANO SIMPLES -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="planos" id="planoSimples" value="" 
                                                                       onchange="valorPlanoPacote();" class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Plano Simples</span>
                                                            </label>
                                                            <!-- PLANO MÉDIO -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="planos" id="planoMedio" value="" 
                                                                       class="custom-control-input" onchange="valorPlanoPacote();">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Plano Médio</span>
                                                            </label>
                                                            <!-- PLANO PRO -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="planos" id="planoPro" value="" 
                                                                       class="custom-control-input" onchange="valorPlanoPacote();">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Plano Pro</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- PACOTE DA ACADEMIA -->
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label>Pacotes:</label>
                                                        <div class="input-group">
                                                            <!-- PACOTE A -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="pacotes" id="pacoteA" disabled="" 
                                                                       value="" class="custom-control-input" onchange="valorPlanoPacote();">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Pacote A</span>
                                                            </label>
                                                            <!-- PACOTE B -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="pacotes" id="pacoteB" value="" disabled="" 
                                                                       onchange="valorPlanoPacote();" class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Pacote B</span>
                                                            </label>
                                                            <!-- PACOTE C -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="pacotes" id="pacoteC" value="" 
                                                                       class="custom-control-input" disabled="" onchange="valorPlanoPacote();">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Pacote C</span>
                                                            </label>
                                                            <!-- PACOTE D -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="pacotes" id="pacoteD" value="" 
                                                                       class="custom-control-input" disabled="" onchange="valorPlanoPacote();">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Pacote D</span>
                                                            </label>
                                                            <!-- NENHUM -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input checked="" type="radio" name="pacotes" id="nenhum" value="" 
                                                                       class="custom-control-input" onchange="valorPlanoPacote();">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Nenhum</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="row">
                                                <!-- PLANO DA ACADEMIA -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Valor do Plano:*</label>
                                                        <label id="valorPlano">R$ 0,00</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Valor do Pacote:*</label>
                                                        <label id="valorPacote">R$ 0,00</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Total:*</label>
                                                        <label id="valorPlanoPacote">R$ 0,00</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- LICENÇAS DA ACADEMIA -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Licenças do Plano:*</label>
                                                        <label id="qtdLicencasPlano">0 licenças</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Licenças do Pacote:*</label>
                                                        <label id="qtdLicencasPacote">0 licenças</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Total:*</label>
                                                        <label id="qtdPlanoPacoteLicencas">0 licenças</label>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <!-- MENSALIDADE DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Dia do pagamento:*</label>
                                                        <input type="text" id="diaPagamentoAcademia" class="form-control" 
                                                               placeholder="Digite o dia do pagamento" maxlength="2" name="diaPagamentoAcademia" value="">
                                                    </div>
                                                </div>
                                            </div>                                      
                                        </div>
                                    </form>
                                    <hr>
                                    <!-- BOTÕES -->
                                    <div style="float: right; margin-bottom: 15px;" class="form-actions">
                                        <button type="button" class="btn btn-secondary" onclick="window.location.href = '<?php echo base_url('lista-academias'); ?>'">
                                            <i class="icon-cross2"></i> Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-success" onclick="verificarDadosAcademia();">
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
                <h4 class="modal-title text-xs-center"><?php if (isset($idAcademia)) { ?> Dados cadastrados com sucesso 
                    <?php } else { ?> Erro ao cadastrar os dados <?php } ?></h4>
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
                <h4 class="modal-title text-xs-center"><?php if (isset($idAcademia)) { ?> Erro ao cadastrar os dados 
                    <?php } else { ?> Erro ao alterar os dados <?php } ?></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function cnpjCadastrado(cnpjAcademia) {
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
