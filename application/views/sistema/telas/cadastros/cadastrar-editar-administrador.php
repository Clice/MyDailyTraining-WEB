
<!-- FORM DE CADASTRO DA ACADEMIA -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">
        <!-- TÍTULO DA PÁGINA - CADASTRAR ACADEMIA -->
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-xs-12 mb-1">
                <h2 class="content-header-title">Cadastrar Academia</h2>
            </div>
        </div>
        <!-- CONTEÚDO DA PÁGINA - CAMPOS DE PREENCHIMENTO -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block">   
                                    <?php
                                    echo validation_errors('<div class="alert alert-danger">', '</div>');
                                    echo form_open('sistema/AcademiaController/cCadastrarEditarAcademia');
                                    ?>
                                    <!-- <form class="form" id="formCadEditAcademia" name="formCadEditAcademia"> -->
                                    <div class="form-body">
                                        <h4 class="form-section"></h4>
                                        <input type="hidden" name="idAcademia" id="idAcademia" value="<?php echo $idAcademia; ?>">
                                        <div class="row">
                                            <!-- NOME DA ACADEMIA -->
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label>Nome da Academia:*</label>
                                                    <input type="text" id="nomeAcademia" class="form-control" 
                                                           placeholder="Digite o nome da academia" name="nomeAcademia">
                                                </div>
                                            </div>
                                            <!-- CNPJ DA ACADEMIA -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>CNPJ:*</label>
                                                    <input type="text" id="cnpjAcademia" class="form-control" 
                                                           placeholder="Digite o CNPJ" name="cnpjAcademia">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- ENDEREÇO DA ACADEMIA -->
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label>Endereço:*</label>
                                                    <input type="text" id="enderecoAcademia" class="form-control" 
                                                           placeholder="Digite o endereço" name="enderecoAcademia">
                                                </div>
                                            </div>
                                            <!-- TELEFONE DA ACADEMIA -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Telefone:*</label>
                                                    <input type="text" id="telefoneAcademia" class="form-control" 
                                                           placeholder="Digite o telefone" name="telefoneAcademia">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- ESTADO DA ACADEMIA -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Estado:*</label>
                                                    <select id="estadoAcademia" name="estadoAcademia" class="form-control">
                                                        <option value="" selected="" disabled="">Selecione o estado</option>
                                                        <option value="">Acre</option>
                                                        <option value="">Alagoas</option>
                                                        <option value="">Amapá</option>
                                                        <option value="">Amazonas</option>
                                                        <option value="">Bahia</option>
                                                        <option value="">Ceará</option>
                                                        <option value="">Distrito Federal</option>
                                                        <option value="">Espírito Santo</option>
                                                        <option value="">Coiás</option>
                                                        <option value="">Maranhão</option>
                                                        <option value="">Mato Groso</option>
                                                        <option value="">Mato Grosso do Sul</option>
                                                        <option value="">Minas Gerais</option>
                                                        <option value="">Pará</option>
                                                        <option value="">Paraíba</option>
                                                        <option value="">Paraná</option>
                                                        <option value="">Pernambuco</option>
                                                        <option value="">Piauí</option>
                                                        <option value="">Rio de Janeiro</option>
                                                        <option value="">Rio Grande do Norte</option>
                                                        <option value="">Rio Grande do Sul</option>
                                                        <option value="">Rondônia</option>
                                                        <option value="">Roraima</option>
                                                        <option value="">Santa Catarina</option>
                                                        <option value="">São Paulo</option>
                                                        <option value="">Sergipe</option>
                                                        <option value="">Tocatins</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- CIDADE DA ACADEMIA -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Cidade:*</label>
                                                    <input type="text" id="cidadeAcademia" class="form-control" 
                                                           placeholder="Digite a cidade" name="cidadeAcademia">
                                                </div>
                                            </div>
                                            <!-- BAIRRO DA ACADEMIA -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Bairro:*</label>
                                                    <input type="text" id="bairroAcademia" class="form-control" 
                                                           placeholder="Digite o bairro" name="bairroAcademia">
                                                </div>
                                            </div>
                                            <!-- CEP DA ACADEMIA -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>CEP:*</label>
                                                    <input type="text" id="cepAcademia" class="form-control" 
                                                           placeholder="Digite o CEP" name="cepAcademia">
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
                                                           name="nomeResponsavelAcademia">
                                                </div>
                                            </div>
                                            <!-- E-MAIL DA ACADEMIA -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>E-mail:*</label>
                                                    <input type="e-mail" id="emailAcademia" class="form-control" 
                                                           placeholder="Digite o e-mail" name="emailAcademia">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- PLANO DA ACADEMIA -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Planos:*</label>
                                                    <div class="input-group">
                                                        <!-- PLANO SIMPLES -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input checked="" type="radio" name="nomePlano" id="nomePlano" value="<?php echo 1; ?>" 
                                                                   class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Plano Simples</span>
                                                        </label>
                                                        <!-- PLANO MÉDIO -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="nomePlano" id="nomePlano" value="<?php echo 2; ?>" 
                                                                   class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Plano Médio</span>
                                                        </label>
                                                        <!-- PLANO PRO -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="nomePlano" id="nomePlano" value="<?php echo 3; ?>" 
                                                                   class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Plano Pro</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- PACOTE DA ACADEMIA -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Pacotes:</label>
                                                    <div class="input-group">
                                                        <!-- PACOTE A -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input checked="" type="radio" name="nomePacote" id="nomePacote" 
                                                                   value="<?php echo 1; ?>" 
                                                                   class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Pacote A</span>
                                                        </label>
                                                        <!-- PACOTE B -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="nomePacote" id="nomePacote" value="<?php echo 2; ?>" 
                                                                   class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Pacote B</span>
                                                        </label>
                                                        <!-- PACOTE C -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="nomePacote" id="nomePacote" value="<?php echo 3; ?>" 
                                                                   class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Pacote C</span>
                                                        </label>
                                                        <!-- PACOTE D -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="nomePacote" id="nomePacote" value="<?php echo 4; ?>" 
                                                                   class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Pacote D</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                            
                                    </div>
                                    <!-- BOTÕES -->
                                    <div class="form-actions right">
                                        <button type="button" class="btn btn-secondary">
                                            <i class="icon-cross2"></i> Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-success">
                                            <i class="icon-check2"></i> Salvar
                                        </button>
                                    </div>
                                    <!-- </form> -->
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>
        </div>
    </div>
</div>

<div class="modal fade text-xs-left" data-backdrop="static" id="bloqueado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-xs-center">Usuário bloqueado! Por favor contate o(s) administrador(es) para mais informações</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="
                        redirect(base_url("lista-academias"));" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
