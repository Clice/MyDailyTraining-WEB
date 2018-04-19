
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
                                            <input type="hidden" name="idPlano" id="idPlano" value="<?php
                                            if ($idAcademia != "novo") {
                                                echo $idPlano;
                                            }
                                            ?>">
                                            <input type="hidden" name="idPacote" id="idPacote" value="<?php if ($idAcademia != "novo") echo $idPacote; ?>">
                                            <input type="hidden" name="statusAcademia" id="statusAcademia" value="<?php if ($idAcademia != "novo") echo $statusAcademia; ?>">
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
                                                               placeholder="Digite o nome da academia" name="nomeAcademia" value="<?php if ($idAcademia != "novo") echo $nomeAcademia; ?>">
                                                    </div>
                                                </div>
                                                <!-- CNPJ DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>CNPJ:*</label>
                                                        <input type="text" id="cnpjAcademia" maxlength="18" class="form-control" value="<?php if ($idAcademia != "novo") echo $cnpjAcademia; ?>"
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
                                                               placeholder="Digite o endereço" name="enderecoAcademia" value="<?php if ($idAcademia != "novo") echo $enderecoAcademia; ?>">
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Telefone:*</label>
                                                        <input type="text" id="telefoneUsuario" class="form-control"
                                                               placeholder="Digite o telefone" name="telefoneAcademia" maxlength="15" value="<?php if ($idAcademia != "novo") echo $telefoneAcademia; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- ESTADO DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Estado:*</label>
                                                        <select id="estadoAcademia" name="estadoAcademia" class="form-control">
                                                            <option value="" <?php
                                                            if ($estadoAcademia == '') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Selecione o estado</option>
                                                            <option value="Acre" <?php
                                                            if ($estadoAcademia == 'Acre') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Acre</option>
                                                            <option value="Alagoas" <?php
                                                            if ($estadoAcademia == 'Alagoas') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Alagoas</option>
                                                            <option value="Amapá" <?php
                                                            if ($estadoAcademia == 'Amapá') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Amapá</option>
                                                            <option value="Amazonas" <?php
                                                            if ($estadoAcademia == 'Amazonas') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Amazonas</option>
                                                            <option value="Bahia" <?php
                                                            if ($estadoAcademia == 'Bahia') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Bahia</option>
                                                            <option value="Ceará"<?php
                                                            if ($estadoAcademia == 'Ceará') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Ceará</option>
                                                            <option value="Distrito Federal"<?php
                                                            if ($estadoAcademia == 'Distrito Federal') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Distrito Federal</option>
                                                            <option value="Espírito Santo"<?php
                                                            if ($estadoAcademia == 'Espírito Santo') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Espírito Santo</option>
                                                            <option value="Goiás"<?php
                                                            if ($estadoAcademia == 'Goiás') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Goiás</option>
                                                            <option value="Maranhão"<?php
                                                            if ($estadoAcademia == 'Maranhão') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Maranhão</option>
                                                            <option value="Mato Grosso" <?php
                                                            if ($estadoAcademia == 'Mato Grosso') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Mato Grosso</option>
                                                            <option value="Mato Grosso do Sul" <?php
                                                            if ($estadoAcademia == 'Mato Grosso do Sul') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Mato Grosso do Sul</option>
                                                            <option value="Minas Gerais" <?php
                                                            if ($estadoAcademia == 'Minas Gerais') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Minas Gerais</option>
                                                            <option value="Pará" <?php
                                                            if ($estadoAcademia == 'Pará') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Pará</option>
                                                            <option value="Paraíba" <?php
                                                            if ($estadoAcademia == 'Paraíba') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Paraíba</option>
                                                            <option value="Paraná" <?php
                                                            if ($estadoAcademia == 'Paraná') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Paraná</option>
                                                            <option value="Pernambuco" <?php
                                                            if ($estadoAcademia == 'Pernambuco') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Pernambuco</option>
                                                            <option value="Piauí" <?php
                                                            if ($estadoAcademia == 'Piauí') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Piauí</option>
                                                            <option value="Rio de Janeiro" <?php
                                                            if ($estadoAcademia == 'Rio de Janeiro') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Rio de Janeiro</option>
                                                            <option value="Rio Grande do Norte"<?php
                                                            if ($estadoAcademia == 'Rio Grande do Norte') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Rio Grande do Norte</option>
                                                            <option value="Rio Grande do Sul" <?php
                                                            if ($estadoAcademia == 'Rio Grande do Sul') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Rio Grande do Sul</option>
                                                            <option value="Rondônia" <?php
                                                            if ($estadoAcademia == 'Rondônia') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Rondônia</option>
                                                            <option value="Roraima" <?php
                                                            if ($estadoAcademia == 'Roraima') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Roraima</option>
                                                            <option value="Santa Catarina"<?php
                                                            if ($estadoAcademia == 'Santa Catarina') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Santa Catarina</option>
                                                            <option value="São Paulo" <?php
                                                            if ($estadoAcademia == 'São Paulo') {
                                                                echo 'selected';
                                                            }
                                                            ?>>São Paulo</option>
                                                            <option value="Sergipe" <?php
                                                            if ($estadoAcademia == 'Sergipe') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Sergipe</option>
                                                            <option value="Tocantins" <?php
                                                            if ($estadoAcademia == 'Tocantins') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Tocantins</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- CIDADE DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Cidade:*</label>
                                                        <input type="text" id="cidadeAcademia" class="form-control"
                                                               placeholder="Digite a cidade" name="cidadeAcademia" value="<?php if ($idAcademia != "novo") echo $cidadeAcademia; ?>">
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Bairro:*</label>
                                                        <input type="text" id="bairroAcademia" class="form-control"
                                                               placeholder="Digite o bairro" name="bairroAcademia" value="<?php
                                                               if ($idAcademia != "novo") {
                                                                   echo $bairroAcademia;
                                                               }
                                                               ?>">
                                                    </div>
                                                </div>
                                                <!-- CEP DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>CEP:*</label>
                                                        <input type="text" id="cepAcademia" class="form-control" maxlength="9" data-mask="00000-000"
                                                               placeholder="Digite o CEP" name="cepAcademia" value="<?php if ($idAcademia != "novo") echo $cepAcademia; ?>">
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
                                                               name="nomeResponsavelAcademia" value="<?php if ($idAcademia != "novo") echo $nomeResponsavelAcademia; ?>">
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>E-mail:*</label>
                                                        <input type="e-mail" id="emailAcademia" class="form-control"
                                                               placeholder="Digite o e-mail" name="emailAcademia" value="<?php if ($idAcademia != "novo") echo $emailAcademia; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- MENSALIDADE DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Mensalidade da academia:*</label>
                                                        <input type="text" id="mensalidadeAcademia" class="form-control"
                                                               placeholder="Digite a mensalidade" name="mensalidadeAcademia" value="<?php if ($idAcademia != "novo") echo $mensalidadeAcademia; ?>">
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
                                                                <input type="radio" name="planos" id="planoSimples" value="" <?php if ($idPlano === '1') echo 'checked'; ?>
                                                                       onchange="valorPlanoPacote();" class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Plano Simples</span>
                                                            </label>
                                                            <!-- PLANO MÉDIO -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="planos" id="planoMedio" value="" <?php if ($idPlano === '2') echo 'checked'; ?>
                                                                       class="custom-control-input" onchange="valorPlanoPacote();">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Plano Médio</span>
                                                            </label>
                                                            <!-- PLANO PRO -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="planos" id="planoPro" value="" <?php if ($idPlano === '3') echo 'checked'; ?>
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
                                                                <input type="radio" name="pacotes" id="pacoteA" <?php
                                                                if ($idPacote === '1') {
                                                                    echo 'checked';
                                                                } else {
                                                                    echo 'disabled';
                                                                }
                                                                ?> value="" class="custom-control-input" onchange="valorPlanoPacote();">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Pacote A</span>
                                                            </label>
                                                            <!-- PACOTE B -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="pacotes" id="pacoteB" value="" <?php
                                                                if ($idPacote === '2') {
                                                                    echo 'checked';
                                                                } else {
                                                                    echo 'disabled';
                                                                }
                                                                ?> onchange="valorPlanoPacote();" class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Pacote B</span>
                                                            </label>
                                                            <!--PACOTE C -->
                                                            <label class = "display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="pacotes" id="pacoteC" value="" <?php
                                                                if ($idPacote === '3') {
                                                                    echo 'checked';
                                                                } else {
                                                                    echo 'disabled';
                                                                }
                                                                ?> class="custom-control-input" onchange="valorPlanoPacote();">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Pacote C</span>
                                                            </label>
                                                            <!-- PACOTE D -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="pacotes" id="pacoteD" value="" <?php
                                                                if ($idPacote === '4') {
                                                                    echo 'checked';
                                                                } else {
                                                                    echo 'disabled';
                                                                }
                                                                ?> class="custom-control-input" onchange="valorPlanoPacote();">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Pacote D</span>
                                                            </label>
                                                            <!-- NENHUM -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input <?php if (($idPacote !== '1') && ($idPacote !== '2') && ($idPacote !== '3') && ($idPacote !== '4') && ($idPacote === '5')) echo 'checked'; ?>
                                                                    type="radio" name="pacotes" id="nenhum" value="" class="custom-control-input" onchange="valorPlanoPacote();">
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
                                                        <label id="valorPlano"><?php
                                                            if ($idPlano === '1') {
                                                                $valorPlano = 600;
                                                                $licencasPlano = 150;
                                                                echo 'R$ 600,00';
                                                            } else if ($idPlano === '2') {
                                                                $valorPlano = 840;
                                                                $licencasPlano = 300;
                                                                echo 'R$ 840,00';
                                                            } else if ($idPlano === '3') {
                                                                $valorPlano = 1080;
                                                                $licencasPlano = 600;
                                                                echo 'R$1080,00';
                                                            } else {
                                                                echo 'R$ 0,00';
                                                            }
                                                            ?></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Valor do Pacote:*</label>
                                                        <label id="valorPacote"><?php
                                                            if ($idPacote === '1') {
                                                                $valorPacote = 10;
                                                                $licencasPacote = 50;
                                                                echo 'R$ 10,00';
                                                            } else if ($idPacote === '2') {
                                                                $valorPacote = 17;
                                                                $licencasPacote = 100;
                                                                echo 'R$ 17,00';
                                                            } else if ($idPacote === '3') {
                                                                $valorPacote = 25;
                                                                $licencasPacote = 150;
                                                                echo 'R$ 25,00';
                                                            } else if ($idPacote === '4') {
                                                                $valorPacote = 30;
                                                                $licencasPacote = 200;
                                                                echo 'R$ 30,00';
                                                            } else {
                                                                echo 'R$ 0,00';
                                                            }
                                                            ?></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Total:*</label>
                                                        <label id="valorPlanoPacote"><?php
                                                            if ($valorPlano > 0) {
                                                                echo "R$ " . ($valorPlano + $valorPacote) . ",00";
                                                            } else {
                                                                echo 'R$ 0,00';
                                                            }
                                                            ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- LICENÇAS DA ACADEMIA -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Licenças do Plano:*</label>
                                                        <label id="qtdLicencasPlano">
                                                            <?php
                                                            if ($licencasPlano > 0) {
                                                                echo $licencasPlano . ' licenças';
                                                            } else {
                                                                echo '0 licenças';
                                                            }
                                                            ?></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Licenças do Pacote:*</label>
                                                        <label id="qtdLicencasPacote"><?php
                                                            if ($licencasPacote > 0) {
                                                                echo $licencasPacote . ' licenças';
                                                            } else {
                                                                echo '0 licenças';
                                                            }
                                                            ?></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Total:*</label>
                                                        <label id="qtdPlanoPacoteLicencas"><?php
                                                            if ($licencasPlano > 0) {
                                                                echo ($licencasPlano + $licencasPacote) . ' licenças';
                                                            } else {
                                                                echo '0 licenças';
                                                            }
                                                            ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- MENSALIDADE DA ACADEMIA -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Dia do pagamento:*</label>
                                                        <input type="text" id="diaPagamentoAcademia" class="form-control"
                                                               placeholder="Digite o dia do pagamento" maxlength="2" name="diaPagamentoAcademia" value="<?php if ($idAcademia != "novo") echo $diaPagamentoAcademia; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="float: right;" class="form-actions">
                                                <button type="submit" class="btn btn-success" onclick="verificarDadosAcademia();">
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

<!-- MODAL - DADOS OBRIGATÓRIOS NÃO INFORMADOS -->
<div class="modal fade text-xs-left" data-backdrop="static" id="dados-obrigatorios-academia" tabindex="-1" role="dialog"
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

<!-- MODAL - CNPJ CADASTRADO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="cnpj-cadastrado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> CNPJ já cadastrado.</h4>
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
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i> <?php if ($idAcademia !== "novo") { ?> Dados alterados com sucesso.
                    <?php } else { ?> Dados cadastrados com sucesso. <?php } ?></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="window.location.href = '<?php echo base_url($voltarPagina); ?>'">Fechar</button>
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
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> <?php if ($idAcademia !== "novo") { ?> Erro ao cadastrar os dados.
                    <?php } else { ?> Erro ao alterar os dados. <?php } ?></h4>
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
    function verificarCnpjExiste(cnpjAcademia, idAcademia) {
        var dados = "cnpjAcademia=" + cnpjAcademia;
        $.ajax({
            url: "<?php echo base_url('AcademiaController/cVerificarCNPJ') ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                if (data.existe) {
                    if (data.id === idAcademia) {
                        cadEditAcademia();
                    } else {
                        $('#cnpj-cadastrado').modal('show');
                    }
                } else {
                    cadEditAcademia();
                }
            },
            error: function (request, status, error) {
                $('#falha-internet').modal('show');
            }
        });
    }

    function cadEditAcademia() {
        $.ajax({
            url: "<?php echo base_url('AcademiaController/cCadastrarEditarAcademia') ?>",
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
                $('#falha-internet').modal('show');
            }
        });
    }
</script>
