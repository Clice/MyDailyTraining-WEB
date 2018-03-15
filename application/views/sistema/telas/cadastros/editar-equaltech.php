
<!-- FORM DE CADASTRO DO EQUALTECH -->
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
                                    <!-- TÍTULO DA PÁGINA - CADASTRAR EQUALTECH -->
                                    <div class="content-header row">
                                        <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                            <h2 class="content-header-title"><?php echo $nomePagina ?></h2>
                                        </div>
                                    </div>
                                    <form class="form" id="formCadEditUsuario" name="formCadEditUsuario">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>

                                            <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $idUsuario; ?>">
                                            <input type="hidden" name="idAcademia" id="idAcademia" value="<?php echo $idAcademia; ?>">
                                            <input type="hidden" name="crefUsuario" id="crefUsuario" value="<?php echo $crefUsuario; ?>">
                                            <input type="hidden" name="sexoUsuario" id="sexoUsuario" value="<?php echo $sexoUsuario; ?>">
                                            <input type="hidden" name="statusConta" id="statusConta" value="<?php echo $statusConta; ?>">
                                            <input type="hidden" name="tipoConta" id="tipoConta" value="<?php echo $tipoConta; ?>">

                                            <div class="row">
                                                <!-- NOME DO EQUALTECH -->
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label>Nome:*</label>
                                                        <input type="text" id="nomeUsuario" name="nomeUsuario" class="form-control" 
                                                               placeholder="Digite o nome do administrador" minlength="5"
                                                               value="<?php if ($idUsuario != "novo") echo $nomeUsuario; ?>">
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DO EQUALTECH -->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>E-mail:*</label>
                                                        <input type="email" id="emailUsuario" name="emailUsuario" minlength="6" 
                                                               class="form-control" placeholder="Digite o e-mail" 
                                                               value="<?php if ($idUsuario != "novo") echo $emailUsuario; ?>">
                                                    </div>                                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- LOGIN DO EQUALTECH -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Login:*</label>
                                                        <input type="text" id="loginUsuario" name="loginUsuario" minlength="6" class="form-control" 
                                                               placeholder="Digite o login" 
                                                               value="<?php if ($idUsuario != "novo") echo base64_decode($loginUsuario); ?>">
                                                    </div>                                                                
                                                </div>
                                                <!-- SENHA DO EQUALTECH -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Senha:*</label>
                                                        <input type="password" id="senhaUsuario" name="senhaUsuario" minlength="6" class="form-control" 
                                                               placeholder="Digite a senha" onchange="verificarTamanhoSenha();" 
                                                               value="<?php if ($idUsuario != "novo") echo base64_decode($senhaUsuario); ?>">
                                                        <small><span id='msnSenha'></span></small>
                                                    </div>                                                                
                                                </div>
                                                <!-- CONFIRMA SENHA DO EQUALTECH -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Confirme a Senha:*</label>
                                                        <input type="password" id="confirmarSenha" name="confirmarSenha" minlength="6" class="form-control" 
                                                               placeholder="Digite a senha novamente" onchange="verificarSenhasIguais();" 
                                                               value="<?php if ($idUsuario != "novo") echo base64_decode($senhaUsuario); ?>">
                                                        <small><span id='msnSenhasIguais'></span></small>
                                                    </div>                                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- CPF DO EQUALTECH -->
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>CPF:*</label>
                                                        <input type="text" id="cpfUsuario" name="cpfUsuario" maxlength="11" class="form-control" 
                                                               placeholder="Digite o CPF" onchange="verificarCpf();" 
                                                               value="<?php if ($idUsuario != "novo") echo $cpfUsuario; ?>">
                                                        <small><span id='msnCPF'></span></small>
                                                    </div>                                                                
                                                </div>
                                                <!-- RG DO EQUALTECH -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>RG:*</label>
                                                        <input type="text" id="rgUsuario" name="rgUsuario" maxlength="18" class="form-control" 
                                                               placeholder="Digite o RG"
                                                               value="<?php if ($idUsuario != "novo") echo $rgUsuario; ?>">
                                                    </div>                                                                
                                                </div>
                                                <!-- DATA NASCIMENTO DO EQUALTECH -->
                                                <div class="col-md-3">
                                                    <div class="form-group has-icon-left">
                                                        <label>Data de Nascimento:*</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="date" id="dataNascimentoUsuario" name="dataNascimentoUsuario" class="form-control"
                                                                   value="<?php if ($idUsuario != "novo") echo $dataNascimentoUsuario; ?>">
                                                            <div class="form-control-position" style="margin-top: 11px;">
                                                                <i class="icon-calendar5"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- SEXO DO EQUALTECH -->
                                                <div class="col-md-4"
                                                     <label>Sexo:*</label>
                                                    <div class="input-group" style="margin-top: 13px">
                                                        <!-- FEMININO -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" id="sexoFeminino" name="sexoUsuario" value="Feminino" onchange="verificarSexoUsuario();" class="custom-control-input"
                                                                   <?php if ($sexoUsuario == 'Feminino') echo 'checked'; ?>>
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Feminino</span>
                                                        </label>
                                                        <!-- MASCULINO -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" id="sexoMasculino" name="sexoUsuario" value="Masculino" onchange="verificarSexoUsuario();" class="custom-control-input"
                                                                   <?php if ($sexoUsuario == 'Masculino') echo 'checked'; ?>>
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Masculino</span>
                                                        </label>
                                                        <!-- OUTROS -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" id="sexoOutros" name="sexoUsuario" value="Outros" onchange="verificarSexoUsuario();" class="custom-control-input"
                                                                   <?php if ($sexoUsuario == 'Outros') echo 'checked'; ?>>
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Outros</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- ENDEREÇO DO EQUALTECH -->
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label>Endereço:*</label>
                                                        <input type="text" id="enderecoUsuario" name="enderecoUsuario" class="form-control" 
                                                               placeholder="Digite o endereço" value="<?php if ($idUsuario != "novo") echo $enderecoUsuario; ?>">
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO EQUALTECH -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Telefone:*</label>
                                                        <input type="text" id="telefoneUsuario" name="telefoneUsuario" class="form-control" 
                                                               maxlength="15" placeholder="Digite o telefone" value="<?php if ($idUsuario != "novo") echo $telefoneUsuario; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- ESTADO DO EQUALTECH -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Estado:*</label>
                                                        <select id="estadoUsuario" name="estadoUsuario" class="form-control">
                                                            <option value="" <?php
                                                            if ($estadoUsuario == '') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Selecione o estado</option>
                                                            <option value="Acre" <?php
                                                            if ($estadoUsuario == 'Acre') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Acre</option>
                                                            <option value="Alagoas" <?php
                                                            if ($estadoUsuario == 'Alagoas') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Alagoas</option>
                                                            <option value="Amapá" <?php
                                                            if ($estadoUsuario == 'Amapá') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Amapá</option>
                                                            <option value="Amazonas" <?php
                                                            if ($estadoUsuario == 'Amazonas') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Amazonas</option>
                                                            <option value="Bahia" <?php
                                                            if ($estadoUsuario == 'Bahia') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Bahia</option>
                                                            <option value="Ceará"<?php
                                                            if ($estadoUsuario == 'Ceará') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Ceará</option>
                                                            <option value="Distrito Federal"<?php
                                                            if ($estadoUsuario == 'Distrito Federal') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Distrito Federal</option>
                                                            <option value="Espírito Santo"<?php
                                                            if ($estadoUsuario == 'Espírito Santo') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Espírito Santo</option>
                                                            <option value="Goiás"<?php
                                                            if ($estadoUsuario == 'Goiás') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Goiás</option>
                                                            <option value="Maranhão"<?php
                                                            if ($estadoUsuario == 'Maranhão') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Maranhão</option>
                                                            <option value="Mato Grosso" <?php
                                                            if ($estadoUsuario == 'Mato Grosso') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Mato Grosso</option>
                                                            <option value="Mato Grosso do Sul" <?php
                                                            if ($estadoUsuario == 'Mato Grosso do Sul') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Mato Grosso do Sul</option>
                                                            <option value="Minas Gerais" <?php
                                                            if ($estadoUsuario == 'Minas Gerais') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Minas Gerais</option>
                                                            <option value="Pará" <?php
                                                            if ($estadoUsuario == 'Pará') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Pará</option>
                                                            <option value="Paraíba" <?php
                                                            if ($estadoUsuario == 'Paraíba') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Paraíba</option>
                                                            <option value="Paraná" <?php
                                                            if ($estadoUsuario == 'Paraná') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Paraná</option>
                                                            <option value="Pernambuco" <?php
                                                            if ($estadoUsuario == 'Pernambuco') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Pernambuco</option>
                                                            <option value="Piauí" <?php
                                                            if ($estadoUsuario == 'Piauí') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Piauí</option>
                                                            <option value="Rio de Janeiro" <?php
                                                            if ($estadoUsuario == 'Rio de Janeiro') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Rio de Janeiro</option>
                                                            <option value="Rio Grande do Norte"<?php
                                                            if ($estadoUsuario == 'Rio Grande do Norte') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Rio Grande do Norte</option>
                                                            <option value="Rio Grande do Sul" <?php
                                                            if ($estadoUsuario == 'Rio Grande do Sul') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Rio Grande do Sul</option>
                                                            <option value="Rondônia" <?php
                                                            if ($estadoUsuario == 'Rondônia') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Rondônia</option>
                                                            <option value="Roraima" <?php
                                                            if ($estadoUsuario == 'Roraima') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Roraima</option>
                                                            <option value="Santa Catarina"<?php
                                                            if ($estadoUsuario == 'Santa Catarina') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Santa Catarina</option>
                                                            <option value="São Paulo" <?php
                                                            if ($estadoUsuario == 'São Paulo') {
                                                                echo 'selected';
                                                            }
                                                            ?>>São Paulo</option>
                                                            <option value="Sergipe" <?php
                                                            if ($estadoUsuario == 'Sergipe') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Sergipe</option>
                                                            <option value="Tocantins" <?php
                                                            if ($estadoUsuario == 'Tocantins') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Tocantins</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- CIDADE DO EQUALTECH -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Cidade:*</label>
                                                        <input type="text" id="cidadeUsuario" name="cidadeUsuario" class="form-control" placeholder="Digite a cidade" 
                                                               value="<?php if ($idUsuario != "novo") echo $cidadeUsuario; ?>">
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DO EQUALTECH -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Bairro:*</label>
                                                        <input type="text" id="bairroUsuario" name="bairroUsuario" class="form-control" placeholder="Digite o bairro" 
                                                               value="<?php if ($idUsuario != "novo") echo $bairroUsuario; ?>">
                                                    </div>
                                                </div>
                                                <!-- CEP DO EQUALTECH -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>CEP:*</label>
                                                        <input type="text" id="cepUsuario" name="cepUsuario" class="form-control" maxlength="9" placeholder="Digite o CEP" 
                                                               value="<?php if ($idUsuario != "novo") echo $cepUsuario; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                    <!-- BOTÕES -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div style="float: right;" class="form-actions">
                                                <button type="submit" class="btn btn-success" onclick="verificarDadosUsuario();">
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
