
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
                                            <input type="hidden" name="tipoConta" id="tipoConta" value="<?php echo $tipoConta; ?>">

                                            <div class="row">
                                                <!-- NOME DO ALUNO -->
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label>Nome do Aluno:*</label>
                                                        <input type="text" id="nomeAluno" class="form-control" 
                                                               placeholder="Digite o nome do aluno" name="nomeAluno" value="" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DO ALUNO -->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>E-mail:*</label>
                                                        <input type="email" id="emailAluno" minlength="6" class="form-control" value="" 
                                                               placeholder="Digite o e-mail" name="emailAluno">
                                                    </div>                                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- CPF DO ALUNO -->
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>CPF:*</label>
                                                        <input type="text" id="cpfUsuario" maxlength="11" class="form-control" value="" 
                                                               placeholder="Digite o CPF" name="cpfUsuario" onchange="verificarCpf();">
                                                        <small><span id='msnCPF'></span></small>
                                                    </div>                                                                
                                                </div>
                                                <!-- RG DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>RG:*</label>
                                                        <input type="text" id="rgAluno" maxlength="18" class="form-control" value="" 
                                                               placeholder="Digite o RG" name="rgAluno">
                                                    </div>                                                                
                                                </div>
                                                <!-- DATA NASCIMENTO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group has-icon-left">
                                                        <label>Data de Nascimento:*</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="date" id="dataNascimentoAluno" name="dataNascimentoAluno" 
                                                                   class="form-control" placeholder="Digite a data">
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
                                                            <input type="radio" name="sexoAluno" id="sexoFeminino" value="Feminino" onchange="verificarSexoAluno();" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Feminino</span>
                                                        </label>
                                                        <!-- MASCULINO -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="sexoAluno" id="sexoMasculino" value="Masculino" onchange="verificarSexoAluno();" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Masculino</span>
                                                        </label>
                                                        <!-- OUTROS -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="sexoAluno" id="sexoOutros" value="Outros" onchange="verificarSexoAluno();" class="custom-control-input">
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
                                                        <input type="text" id="enderecoAluno" class="form-control" 
                                                               placeholder="Digite o endereço" name="enderecoAluno" value="">
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Telefone:*</label>
                                                        <input type="text" id="telefoneUsuario" class="form-control" maxlength="15"
                                                               placeholder="Digite o telefone" name="telefoneUsuario" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- ESTADO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Estado:*</label>
                                                        <select id="estadoAluno" name="estadoAluno" class="form-control">
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
                                                <!-- CIDADE DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Cidade:*</label>
                                                        <input type="text" id="cidadeAluno" class="form-control" 
                                                               placeholder="Digite a cidade" name="cidadeAluno" value="">
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Bairro:*</label>
                                                        <input type="text" id="bairroAluno" class="form-control" 
                                                               placeholder="Digite o bairro" name="bairroAluno" value="">
                                                    </div>
                                                </div>
                                                <!-- CEP DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>CEP:*</label>
                                                        <input type="text" id="cepAluno" class="form-control" maxlength="9"
                                                               placeholder="Digite o CEP" name="cepAluno" value="">
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
                                                                <option value="">Selecione o dia</option>
                                                                <option value="5">5</option>
                                                                <option value="10">10</option>
                                                                <option value="15">15</option>
                                                                <option value="20">20</option>
                                                                <option value="25">25</option>
                                                            </select>
                                                            <div class="form-control-position" style="margin-top: 11px;">
                                                                <i class="icon-calendar5"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- DIA DO PAGAMENTO DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group has-icon-left">
                                                        <label>Dia do Pagamento:*</label>
                                                        <div class="position-relative has-icon-left">
                                                            <select id="diaPagamentoAluno" name="diaPagamentoAluno" class="form-control">
                                                                <option value="">Selecione o dia</option>
                                                                <option value="5">5</option>
                                                                <option value="10">10</option>
                                                                <option value="15">15</option>
                                                                <option value="20">20</option>
                                                                <option value="25">25</option>
                                                            </select>

                                                            <div class="form-control-position" style="margin-top: 11px;">
                                                                <i class="icon-calendar5"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- OBJETIVO DO ALUNO -->
                                                <div class="col-md-12">
                                                    <label>Objetivo do Aluno:*</label>
                                                    <div class="input-group" style="margin-top: 13px">
                                                        <div class="form-group col-md-8">
                                                            <!-- HIPERTROFIA -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="objetivoAluno" id="hipertrofia" value="Hipertrofia" 
                                                                       onchange="verificarObjetivoAluno();" class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Hipertrofia</span>
                                                            </label>
                                                            <!-- FORÇA -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="objetivoAluno" id="forca" value="Força"
                                                                       onchange="verificarObjetivoAluno();" class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Força</span>
                                                            </label>
                                                            <!-- QUALI. DE VIDA -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="objetivoAluno" id="qualiDeVida" value="Quali. de Vida" 
                                                                       onchange="verificarObjetivoAluno();" class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Quali. de Vida</span>
                                                            </label>
                                                            <!-- EMAGRECIMENTO -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="objetivoAluno" id="emagrecimento" value="Emagrecimento" 
                                                                       onchange="verificarObjetivoAluno();" class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Emagrecimento</span>
                                                            </label>
                                                            <!-- RES. AERÓBICA -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="objetivoAluno" id="resAerobica" value="Res. Aeróbica" 
                                                                       onchange="verificarObjetivoAluno();" class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Res. Aeróbica</span>
                                                            </label>
                                                            <!-- OUTROS -->
                                                            <label class="display-inline-block custom-control custom-radio">
                                                                <input type="radio" name="objetivoAluno" id="outros" value="Outros" 
                                                                       onchange="verificarObjetivoAluno();" class="custom-control-input">
                                                                <span class="custom-control-indicator"></span>
                                                                <span class="custom-control-description ml-0">Outros</span>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <textarea type="" id="outrosObjetivoAluno" class="form-control" maxlength="200"
                                                                      placeholder="Digite outro objetivo do aluno" name="objetivoAluno" value="" disabled="" >
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label>Responsável:</label>
                                                    <div class="input-group" style="margin-top: 13px">
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="responsavel" id="responsavelSim" value="Sim" 
                                                                   onchange="responsaveisHabilitar();" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Sim</span>
                                                        </label>
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="responsavel" id="responsavelNao" value="Nao" 
                                                                   onchange="responsaveisHabilitar();" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Não</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <!-- NOME DO RESPONSÁVEL DO ALUNO -->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>Nome do Responsável:</label>
                                                        <input type="text" id="nomeResponsavelAluno" class="form-control" 
                                                               placeholder="Digite o nome do responsável" name="nomeResponsavelAluno" value="" disabled="" >
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO RESPONSÁVEL DO ALUNO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Telefone do Responsável:</label>
                                                        <input type="text" id="telefoneResponsavelAluno" class="form-control" maxlength="15"
                                                               placeholder="Digite o telefone do responsável" name="telefoneResponsavelAluno" value="" disabled="" >
                                                    </div>
                                                </div>

                                            </div>
                                            <br>
                                            <label><b>Observações</b></label>
                                            <div class="row">
                                                <br>
                                                <div class="col-md-2">
                                                    <label>Cirurgias:</label>
                                                    <div class="input-group" style="margin-top: 13px">
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="cirurgias" id="cirurgiasSim" value="Sim" onchange="cirurgiasHabilitar();" 
                                                                   class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Sim</span>
                                                        </label>
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="cirurgias" id="cirurgiasNao" value="Nao" onchange="cirurgiasHabilitar();" 
                                                                   class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Não</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-10">
                                                    <label>Descrição:</label>
                                                    <textarea id="cirurgiasAluno" class="form-control" maxlength="200"
                                                              placeholder="Descreva as cirurgias que o aluno já foi submetido" name="cirurgiasAluno" value="" 
                                                              disabled="" ></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <br>
                                                <div class="col-md-2">
                                                    <label>Medicamentos:</label>
                                                    <div class="input-group" style="margin-top: 13px">
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="medicamentos" id="medicamentosSim" value="Sim" 
                                                                   onchange="medicamentosHabilitar();" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Sim</span>
                                                        </label>
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="medicamentos" id="medicamentosNao" value="Nao" 
                                                                   onchange="medicamentosHabilitar();" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Não</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-10">
                                                    <label>Descrição:</label>
                                                    <textarea type="" id="medicamentosAluno" class="form-control" maxlength="200"
                                                              placeholder="Descreva os medicamentos usados pelo aluno" name="medicamentosAluno" 
                                                              value="" disabled="" ></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <br>
                                                <div class="col-md-2">
                                                    <label>Doenças Familiares:</label>
                                                    <div class="input-group" style="margin-top: 13px">
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="doencasFamiliares" id="doencasFamiliaresSim" value="Sim" 
                                                                   onchange="doencasFamiliaresHabilitar();" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Sim</span>
                                                        </label>
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="doencasFamiliares" id="doencasFamiliaresNao" value="Nao" 
                                                                   onchange="doencasFamiliaresHabilitar();" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Não</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-10">
                                                    <label>Descrição:</label>
                                                    <textarea type="" id="doencasFamiliaresAluno" class="form-control" maxlength="200"
                                                              placeholder="Descreva as doenças familiares do aluno" name="doencasFamiliaresAluno" 
                                                              value="" disabled="" ></textarea>
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

<!-- MODAL - DADOS OBRIGATÓRIOS NÃO INFORMADOS -->
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

<!-- MODAL - SENHAS DIFERENTES -->
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

<!-- MODAL - CPF CADASTRADO -->
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

<!-- MODAL - LOGIN CADASTRADO -->
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

<!-- MODAL - DADOS CADASTRADOS/ALTERADOS COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="sucesso-aluno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-check-circle success"></i>
                    <?php if (isset($idAluno)) { ?> Dados cadastrados com sucesso 
                    <?php } else { ?> Erro ao cadastrar os dados <?php } ?></h4>
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