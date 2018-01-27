
<!-- FORM DE CADASTRO DO ALUNO -->
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
                                    <!-- TÍTULO DA PÁGINA - CADASTRAR ALUNO -->
                                    <div class="content-header row">
                                        <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                            <h2 class="content-header-title"><?php echo $nomePagina ?></h2>
                                        </div>
                                    </div>
                                    <form class="form" id="formCadEditAluno" name="formCadEditAluno">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>

                                            <input type="hidden" name="idAluno" id="idAluno" value="<?php echo $idAluno; ?>">
                                            <input type="hidden" name="idAcademia" id="idAcademia" value="<?php echo $idAcademia; ?>">
                                            <input type="hidden" name="sexoAluno" id="sexoAluno" value="<?php echo $sexoAluno; ?>">
                                            <input type="hidden" name="loginAluno" id="loginAluno" value="<?php echo $loginAluno; ?>">
                                            <input type="hidden" name="senhaAluno" id="senhaAluno" value="<?php echo $senhaAluno; ?>">
                                            <input type="hidden" name="objetivoAluno" id="objetivoAluno" value="<?php echo $objetivoAluno; ?>">
                                            <input type="hidden" name="statusAluno" id="statusAluno" value="<?php echo $statusAluno; ?>">

                                            <div class="row">
                                                <!-- NOME DO ALUNO -->
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label>Nome do Aluno:*</label>
                                                        <input type="text" id="nomeAluno" name="nomeAluno" class="form-control" placeholder="Digite o nome do aluno" minlength="5"
                                                               value="<?php if ($idAluno != "novo") echo $nomeAluno; ?>">
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DO ALUNO -->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>E-mail:*</label>
                                                        <input type="email" id="emailAluno" name="emailAluno" minlength="6" class="form-control" placeholder="Digite o e-mail"
                                                               value="<?php if ($idAluno != "novo") echo $emailAluno; ?>">
                                                    </div>                                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- CPF DO ALUNO -->
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>CPF:*</label>
                                                        <input type="text" id="cpfUsuario" name="cpfUsuario" maxlength="11" class="form-control" placeholder="Digite o CPF" onchange="verificarCpf();"
                                                               value="<?php if ($idAluno != "novo") echo $cpfAluno; ?>">
                                                        <small><span id='msnCPF'></span></small>
                                                    </div>                                                                
                                                </div>
                                                <!-- RG DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>RG:*</label>
                                                        <input type="text" id="rgAluno" name="rgAluno" maxlength="18" class="form-control" placeholder="Digite o RG"
                                                               value="<?php if ($idAluno != "novo") echo $rgAluno; ?>">
                                                    </div>                                                                
                                                </div>
                                                <!-- DATA NASCIMENTO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group has-icon-left">
                                                        <label>Data de Nascimento:*</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="date" id="dataNascimentoAluno" name="dataNascimentoAluno" class="form-control"
                                                                   value="<?php if ($idAluno != "novo") echo $dataNascimentoAluno; ?>">
                                                            <div class="form-control-position" style="margin-top: 11px;">
                                                                <i class="icon-calendar5"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- SEXO DO ALUNO -->
                                                <div class="col-md-4">
                                                    <label>Sexo:*</label>
                                                    <div class="input-group" style="margin-top: 13px">
                                                        <!-- FEMININO -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="sexoAluno" id="sexoFeminino" value="Feminino" onchange="verificarSexoAluno();" class="custom-control-input"
                                                                   <?php if ($sexoAluno == 'Feminino') echo 'checked'; ?>>
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Feminino</span>
                                                        </label>
                                                        <!-- MASCULINO -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="sexoAluno" id="sexoMasculino" value="Masculino" onchange="verificarSexoAluno();" class="custom-control-input"
                                                                   <?php if ($sexoAluno == 'Masculino') echo 'checked'; ?>>
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Masculino</span>
                                                        </label>
                                                        <!-- OUTROS -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="sexoAluno" id="sexoOutros" value="Outros" onchange="verificarSexoAluno();" class="custom-control-input"
                                                                   <?php if ($sexoAluno == 'Outros') echo 'checked'; ?>>
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Outros</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- ENDEREÇO DO ALUNO -->
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label>Endereço:*</label>
                                                        <input type="text" id="enderecoAluno" name="enderecoAluno" class="form-control" placeholder="Digite o endereço"
                                                               value="<?php if ($idAluno != "novo") echo $enderecoAluno; ?>">
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Telefone:*</label>
                                                        <input type="text" id="telefoneUsuario" name="telefoneUsuario" class="form-control" maxlength="15" placeholder="Digite o telefone"
                                                               value="<?php if ($idAluno != "novo") echo $telefoneAluno; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- ESTADO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Estado:*</label>
                                                        <select id="estadoAluno" name="estadoAluno" class="form-control">
                                                            <option value="" <?php
                                                            if ($estadoAluno == '') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Selecione o estado</option>
                                                            <option value="Acre" <?php
                                                            if ($estadoAluno == 'Acre') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Acre</option>
                                                            <option value="Alagoas" <?php
                                                            if ($estadoAluno == 'Alagoas') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Alagoas</option>
                                                            <option value="Amapá" <?php
                                                            if ($estadoAluno == 'Amapá') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Amapá</option>
                                                            <option value="Amazonas" <?php
                                                            if ($estadoAluno == 'Amazonas') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Amazonas</option>
                                                            <option value="Bahia" <?php
                                                            if ($estadoAluno == 'Bahia') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Bahia</option>
                                                            <option value="Ceará"<?php
                                                            if ($estadoAluno == 'Ceará') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Ceará</option>
                                                            <option value="Distrito Federal"<?php
                                                            if ($estadoAluno == 'Distrito Federal') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Distrito Federal</option>
                                                            <option value="Espírito Santo"<?php
                                                            if ($estadoAluno == 'Espírito Santo') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Espírito Santo</option>
                                                            <option value="Goiás"<?php
                                                            if ($estadoAluno == 'Goiás') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Goiás</option>
                                                            <option value="Maranhão"<?php
                                                            if ($estadoAluno == 'Maranhão') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Maranhão</option>
                                                            <option value="Mato Grosso" <?php
                                                            if ($estadoAluno == 'Mato Grosso') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Mato Grosso</option>
                                                            <option value="Mato Grosso do Sul" <?php
                                                            if ($estadoAluno == 'Mato Grosso do Sul') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Mato Grosso do Sul</option>
                                                            <option value="Minas Gerais" <?php
                                                            if ($estadoAluno == 'Minas Gerais') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Minas Gerais</option>
                                                            <option value="Pará" <?php
                                                            if ($estadoAluno == 'Pará') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Pará</option>
                                                            <option value="Paraíba" <?php
                                                            if ($estadoAluno == 'Paraíba') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Paraíba</option>
                                                            <option value="Paraná" <?php
                                                            if ($estadoAluno == 'Paraná') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Paraná</option>
                                                            <option value="Pernambuco" <?php
                                                            if ($estadoAluno == 'Pernambuco') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Pernambuco</option>
                                                            <option value="Piauí" <?php
                                                            if ($estadoAluno == 'Piauí') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Piauí</option>
                                                            <option value="Rio de Janeiro" <?php
                                                            if ($estadoAluno == 'Rio de Janeiro') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Rio de Janeiro</option>
                                                            <option value="Rio Grande do Norte"<?php
                                                            if ($estadoAluno == 'Rio Grande do Norte') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Rio Grande do Norte</option>
                                                            <option value="Rio Grande do Sul" <?php
                                                            if ($estadoAluno == 'Rio Grande do Sul') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Rio Grande do Sul</option>
                                                            <option value="Rondônia" <?php
                                                            if ($estadoAluno == 'Rondônia') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Rondônia</option>
                                                            <option value="Roraima" <?php
                                                            if ($estadoAluno == 'Roraima') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Roraima</option>
                                                            <option value="Santa Catarina"<?php
                                                            if ($estadoAluno == 'Santa Catarina') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Santa Catarina</option>
                                                            <option value="São Paulo" <?php
                                                            if ($estadoAluno == 'São Paulo') {
                                                                echo 'selected';
                                                            }
                                                            ?>>São Paulo</option>
                                                            <option value="Sergipe" <?php
                                                            if ($estadoAluno == 'Sergipe') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Sergipe</option>
                                                            <option value="Tocantins" <?php
                                                            if ($estadoAluno == 'Tocantins') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Tocantins</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- CIDADE DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Cidade:*</label>
                                                        <input type="text" id="cidadeAluno" name="cidadeAluno" class="form-control" placeholder="Digite a cidade"
                                                               value="<?php if ($idAluno != "novo") echo $cidadeAluno; ?>">
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Bairro:*</label>
                                                        <input type="text" id="bairroAluno" name="bairroAluno" class="form-control" placeholder="Digite o bairro"
                                                               value="<?php if ($idAluno != "novo") echo $bairroAluno; ?>">
                                                    </div>
                                                </div>
                                                <!-- CEP DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>CEP:*</label>
                                                        <input type="text" id="cepAluno" name="cepAluno" class="form-control" maxlength="9" placeholder="Digite o CEP"
                                                               value="<?php if ($idAluno != "novo") echo $cepAluno; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- DATA VALIDADE DO EXÂME DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group has-icon-left">
                                                        <label>Data da Avaliação do Aluno:*</label>
                                                        <div class="position-relative has-icon-left">
                                                            <select id="diaValidadeExame" name="diaValidadeExame" class="form-control">
                                                                <option value="" <?php
                                                                if ($diaValidadeExame == '') {
                                                                    echo 'selected';
                                                                }
                                                                ?>>Selecione o dia</option>
                                                                <option value="5" <?php
                                                                if ($diaValidadeExame == '5') {
                                                                    echo 'selected';
                                                                }
                                                                ?>>5</option>
                                                                <option value="10" <?php
                                                                if ($diaValidadeExame == '10') {
                                                                    echo 'selected';
                                                                }
                                                                ?>>10</option>
                                                                <option value="15" <?php
                                                                if ($diaValidadeExame == '15') {
                                                                    echo 'selected';
                                                                }
                                                                ?>>15</option>
                                                                <option value="20" <?php
                                                                if ($diaValidadeExame == '20') {
                                                                    echo 'selected';
                                                                }
                                                                ?>>20</option>
                                                                <option value="25" <?php
                                                                if ($diaValidadeExame == '25') {
                                                                    echo 'selected';
                                                                }
                                                                ?>>25</option>
                                                            </select>
                                                            <div class="form-control-position" style="margin-top: 11px;">
                                                                <i class="icon-calendar5"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--DIA DO PAGAMENTO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group has-icon-left">
                                                        <label>Dia do Pagamento:*</label>
                                                        <div class="position-relative has-icon-left">
                                                            <select id="diaPagamentoAluno" name="diaPagamentoAluno" class="form-control">
                                                                <option value="" <?php if ($diaPagamentoAluno == '') echo 'selected'; ?>>Selecione o dia</option>
                                                                <option value="5" <?php if ($diaPagamentoAluno == '5') echo 'selected'; ?>>5</option>
                                                                <option value="10" <?php if ($diaPagamentoAluno == '10') echo 'selected'; ?>>10</option>
                                                                <option value="15" <?php if ($diaPagamentoAluno == '15') echo 'selected'; ?>>15</option>
                                                                <option value="20" <?php if ($diaPagamentoAluno == '20') echo 'selected'; ?>>20</option>
                                                                <option value="25" <?php if ($diaPagamentoAluno == '25') echo 'selected'; ?>>25</option>
                                                            </select>
                                                            <div class="form-control-position" style="margin-top: 11px;">
                                                                <i class="icon-calendar5"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- DIAS DE TREINO DO ALUNO -->
                                                <div class="col-md-12">
                                                    <label>Dias de Treino do Aluno:*</label>
                                                    <div class="input-group" style="margin-top: 13px">
                                                        <div class="form-group col-md-10">
                                                            <!-- DOMINGO -->
                                                            <label class="display-inline-block custom-control custom-checkbox">
                                                                <input type="checkbox" name="diasTreinoAluno[]" id="domingo" value="Domingo" class="custom-control-input"
                                                                       <?php if (strstr($diasTreinoAluno, "Domingo")) echo 'checked' ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Domingo</span>
                                                            </label>
                                                            <!-- SEGUNDA -->
                                                            <label class="display-inline-block custom-control custom-checkbox">
                                                                <input type="checkbox" name="diasTreinoAluno[]" id="segunda" value="Segunda" class="custom-control-input"
                                                                       <?php if (strstr($diasTreinoAluno, "Segunda")) echo 'checked'; ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Segunda</span>
                                                            </label>
                                                            <!-- TERÇA -->
                                                            <label class="display-inline-block custom-control custom-checkbox">
                                                                <input type="checkbox" name="diasTreinoAluno[]" id="terça" value="Terça" class="custom-control-input"
                                                                       <?php if (strstr($diasTreinoAluno, "Terça")) echo 'checked'; ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Terça</span>
                                                            </label>
                                                            <!-- QUARTA -->
                                                            <label class="display-inline-block custom-control custom-checkbox">
                                                                <input type="checkbox" name="diasTreinoAluno[]" id="quarta" value="Quarta" class="custom-control-input"
                                                                       <?php if (strstr($diasTreinoAluno, "Quarta")) echo 'checked'; ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Quarta</span>
                                                            </label>
                                                            <!-- QUINTA -->
                                                            <label class="display-inline-block custom-control custom-checkbox">
                                                                <input type="checkbox" name="diasTreinoAluno[]" id="quinta" value="Quinta" class="custom-control-input"
                                                                       <?php if (strstr($diasTreinoAluno, "Quinta")) echo 'checked'; ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Quinta</span>
                                                            </label>
                                                            <!-- SEXTA -->
                                                            <label class="display-inline-block custom-control custom-checkbox">
                                                                <input type="checkbox" name="diasTreinoAluno[]" id="sexta" value="Sexta" class="custom-control-input"
                                                                       <?php if (strstr($diasTreinoAluno, "Sexta")) echo 'checked'; ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Sexta</span>
                                                            </label>
                                                            <!-- SÁBADO -->
                                                            <label class="display-inline-block custom-control custom-checkbox">
                                                                <input type="checkbox" name="diasTreinoAluno[]" id="sabado" value="Sábado" class="custom-control-input"
                                                                       <?php if (strstr($diasTreinoAluno, "Sábado")) echo 'checked'; ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Sábado</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <!-- OBJETIVO DO ALUNO -->
                                                <div class="col-md-12">
                                                    <label>Objetivo do Aluno:*</label>
                                                    <div class="input-group" style="margin-top: 13px">
                                                        <div class="form-group col-md-8">
                                                            <!-- HIPERTROFIA -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="objetivoAluno" id="hipertrofia" value="Hipertrofia" class="custom-control-input"
                                                                       onchange="verificarObjetivoAluno();" <?php if ($objetivoAluno == "Hipertrofia") echo 'checked' ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Hipertrofia</span>
                                                            </label>
                                                            <!-- FORÇA -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type= "radio" name="objetivoAluno" id="forca" value="Força" class="custom-control-input"
                                                                       onchange="verificarObjetivoAluno();" <?php if ($objetivoAluno == "Força") echo 'checked'; ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Força</span>
                                                            </label>
                                                            <!-- QUALI. DE VIDA -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="objetivoAluno" id="qualiDeVida" value="Quali. de Vida" class="custom-control-input"
                                                                       onchange="verificarObjetivoAluno();" <?php if ($objetivoAluno == "Quali. de Vida") echo 'checked'; ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Quali. de Vida</span>
                                                            </label>
                                                            <!-- EMAGRECIMENTO -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="objetivoAluno" id="emagrecimento" value="Emagrecimento" class="custom-control-input"
                                                                       onchange="verificarObjetivoAluno();" <?php if ($objetivoAluno == "Emagrecimento") echo 'checked'; ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Emagrecimento</span>
                                                            </label>
                                                            <!-- RES. AERÓBICA -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="objetivoAluno" id="resAerobica" value="Res. Aeróbica" class="custom-control-input"
                                                                       onchange="verificarObjetivoAluno();" <?php if ($objetivoAluno == "Res. Aeróbica") echo 'checked'; ?>>
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Res. Aeróbica</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <!-- NOME DO RESPONSÁVEL DO ALUNO -->
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Nome do Responsável:</label>
                                                        <input type="text" id="nomeResponsavelAluno" name="nomeResponsavelAluno" class="form-control" placeholder="Digite o nome do responsável" 
                                                               value="<?php if ($idAluno != "novo") if ($nomeResponsavelAluno != NULL) echo $nomeResponsavelAluno; ?>">
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO RESPONSÁVEL DO ALUNO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Telefone do Responsável:</label>
                                                        <input type="text" id="telefoneResponsavelAluno" name="telefoneResponsavelAluno" class="form-control" maxlength="15"
                                                               placeholder="Digite o telefone do responsável" value="<?php if ($idAluno != "novo") if ($telefoneResponsavelAluno != NULL) echo $telefoneResponsavelAluno; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <label><b>Observações</b></label>
                                            <div class="row">
                                                <!-- CIRURGIAS DO ALUNO -->
                                                <div class="form-group col-md-6">
                                                    <label>Cirurgias:</label>
                                                    <textarea id="cirurgiasAluno" name="cirurgiasAluno" class="form-control" maxlength="200" placeholder="Descreva as cirurgias que o aluno já foi submetido"  
                                                              ><?php if ($idAluno != "novo") if ($cirurgias != NULL) echo $cirurgias; ?></textarea>
                                                </div>
                                                <!-- MEDICAMENTOS DO ALUNO -->
                                                <div class="form-group col-md-6">
                                                    <label>Medicamentos:</label>
                                                    <textarea id="medicamentosAluno" name="medicamentosAluno" class="form-control" maxlength="200"
                                                              placeholder="Descreva os medicamentos usados pelo aluno"><?php if ($idAluno != "novo") if ($medicamentos != NULL) echo $medicamentos; ?></textarea>
                                                </div>
                                                <!-- DOENÇAS FAMILIARES DO ALUNO -->
                                                <div class="form-group col-md-12">
                                                    <label>Doenças Familiares:</label>
                                                    <textarea id="doencasFamiliaresAluno" name="doencasFamiliaresAluno" class="form-control" maxlengt="200" 
                                                              placeholder="Descreva as doenças familiares do aluno"><?php if ($idAluno != "novo") if ($doencasFamiliaresAluno != NULL) echo $doencasFamiliaresAluno; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                    <!-- BOTÕES -->
                                    <div style="float: right; margin-bottom: 15px;" class="form-actions">
                                        <button type="button" class="btn btn-secondary" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">
                                            <i class="icon-cross2"></i> Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-success" onclick="verificarDadosAluno();">
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

<!--MODAL - DADOS OBRIGATÓRIOS NÃO INFORMADOS -->
<div class="modal fade text-xs-left" data-backdrop="static" id="dados-obrigatorios-aluno" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-warning2 warning"></i> Dados obrigatórios não informados</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL - SENHAS DIFERENTES -->
<div class="modal fade text-xs-left" data-backdrop="static" id="senhas-diferentes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Senhas diferentes</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL - CPF CADASTRADO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="cpf-cadastrado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> CPF já cadastrado</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL - LOGIN CADASTRADO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="login-cadastrado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i> Login já cadastrado</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL - DADOS CADASTRADOS/ALTERADOS COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="sucesso-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i>
                    <?php if (isset($idAluno)) { ?> Dados cadastrados com sucesso 
                    <?php } else { ?> Dados alterados com sucesso  <?php } ?></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="window.location.href = '<?php echo base_url('lista-alunos'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO CADASTRAR/ALTERAR OS DADOS -->
<div class="modal fade text-xs-left" data-backdrop="static" id="erro-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-remove danger"></i>
                    <?php if (isset($idAluno)) { ?> Erro ao cadastrar os dados 
                    <?php } else { ?> Erro ao alterar os dados <?php } ?></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function verificarCPF(cpfUsuario) {
        var dados = "cpfUsuario=" + cpfUsuario;
        $.ajax({
            url: "<?php echo base_url('AlunoController/cVerificarCPF') ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                if (data.existe) {
                    $('#cpf-cadastrado').modal('show');
                } else {
                    cadEditAluno();
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function cadEditAluno() {
        $.ajax({
            url: "<?php echo base_url('AlunoController/cCadastrarEditarAluno') ?>",
            type: "POST",
            data: $('#formCadEditAluno').serialize(),
            dataType: "JSON",
            success: function (data) {
                if (data.success) {
                    $('#sucesso-aluno').modal('show');
                } else {
                    $('#erro-aluno').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>