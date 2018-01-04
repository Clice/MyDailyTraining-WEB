<!-- FORM DE CADASTRO DO FUNCIONÁRIO -->
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
                                    <!-- TÍTULO DA PÁGINA - CADASTRAR FUNCIONÁRIO -->
                                    <div class="content-header row">
                                        <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                            <h2 class="content-header-title"><?php echo $nomePagina ?></h2>
                                        </div>
                                    </div>
                                    <form class="form" id="formCadEditFuncionario" name="formCadEditFuncionario">
                                        <div class="form-body">
                                            <h4 class="form-section"></h4>
                                            
                                            <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $idFuncionario; ?>">
                                            <input type="hidden" name="idAcademia" id="idAcademia" value="<?php echo $idAcademia; ?>">
                                            
                                            <div class="row">
                                                <!-- NOME DO FUNCIONÁRIO -->
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <label>Nome do Funcionário:*</label>
                                                        <input type="text" id="nomeUsuario" class="form-control" 
                                                               placeholder="Digite o nome do funcionario" name="nomeUsuario" value="" minlength="5">
                                                    </div>
                                                </div>
                                                <!-- E-MAIL DO FUNCIONÁRIO -->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label>E-mail:*</label>
                                                        <input type="email" id="emailUsuario" minlength="6" class="form-control" value="" 
                                                               placeholder="Digite o e-mail" name="emailUsuario">
                                                    </div>                                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- LOGIN DO FUNCIONÁRIO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Login:*</label>
                                                        <input type="text" id="loginUsuario" minlength="6" class="form-control" value="" 
                                                               placeholder="Digite o login" name="loginUsuario">
                                                    </div>                                                                
                                                </div>
                                                <!-- SENHA DO FUNCIONÁRIO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Senha:*</label>
                                                        <input type="password" id="senhaUsuario" minlength="6" class="form-control" value="" 
                                                               placeholder="Digite a senha" name="senhaUsuario" onchange="verificarTamanhoSenha();">
                                                        <small><span id='msnSenha'></span></small>
                                                    </div>                                                                
                                                </div>
                                                <!-- CONFIRMA SENHA DO FUNCIONÁRIO -->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Confirme a Senha:*</label>
                                                        <input type="password" id="confirmarSenha" minlength="6" class="form-control" value="" 
                                                               placeholder="Digite a senha novamente" name="confirmarSenha" onchange="verificarSenhasIguais();">
                                                        <small><span id='msnSenhasIguais'></span></small>
                                                    </div>                                                                
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- CPF DO FUNCIONÁRIO -->
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>CPF:*</label>
                                                        <input type="text" id="cpfUsuario" maxlength="11" class="form-control" value="" 
                                                               placeholder="Digite o CPF" name="cpfUsuario" onchange="verificarCpf();">
                                                        <small><span id='msnCPF'></span></small>
                                                    </div>                                                                
                                                </div>
                                                <!-- RG DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>RG:*</label>
                                                        <input type="text" id="rgUsuario" maxlength="18" class="form-control" value="" 
                                                               placeholder="Digite o RG" name="rgUsuario">
                                                    </div>                                                                
                                                </div>
                                                <!-- DATA NASCIMENTO DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group has-icon-left">
                                                        <label>Data de Nascimento:*</label>
                                                        <div class="position-relative has-icon-left">
                                                            <input type="date" id="dataNascimentoUsuario" name="dataNascimentoUsuario" 
                                                                   class="form-control" placeholder="Digite a data">
                                                            <div class="form-control-position" style="margin-top: 11px;">
                                                                <i class="icon-calendar5"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- SEXO DO FUNCIONÁRIO -->
                                                <div class="col-md-4"
                                                     <label>Sexo:*</label>
                                                    <div class="input-group" style="margin-top: 13px">
                                                        <!-- FEMININO -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="sexoUsuario" id="sexoFeminino" value="Feminino" onchange="verificarSexoFuncionario();" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Feminino</span>
                                                        </label>
                                                        <!-- MASCULINO -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="sexoUsuario" id="sexoMasculino" value="Masculino" onchange="verificarSexoFuncionario();" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Masculino</span>
                                                        </label>
                                                        <!-- OUTROS -->
                                                        <label class="display-inline-block custom-control custom-radio">
                                                            <input type="radio" name="sexoUsuario" id="sexoOutros" value="Outros" onchange="verificarSexoFuncionario();" class="custom-control-input">
                                                            <span class="custom-control-indicator"></span>
                                                            <span class="custom-control-description ml-0">Outros</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- ENDEREÇO DO FUNCIONÁRIO -->
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label>Endereço:*</label>
                                                        <input type="text" id="enderecoUsuario" class="form-control" 
                                                               placeholder="Digite o endereço" name="enderecoUsuario" value="">
                                                    </div>
                                                </div>
                                                <!-- TELEFONE DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Telefone:*</label>
                                                        <input type="text" id="telefoneUsuario" class="form-control" maxlength="15"
                                                               placeholder="Digite o telefone" name="telefoneUsuario" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- ESTADO DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Estado:*</label>
                                                        <select id="estadoUsuario" name="estadoUsuario" class="form-control">
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
                                                <!-- CIDADE DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Cidade:*</label>
                                                        <input type="text" id="cidadeUsuario" class="form-control" 
                                                               placeholder="Digite a cidade" name="cidadeUsuario" value="">
                                                    </div>
                                                </div>
                                                <!-- BAIRRO DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Bairro:*</label>
                                                        <input type="text" id="bairroUsuario" class="form-control" 
                                                               placeholder="Digite o bairro" name="bairroUsuario" value="">
                                                    </div>
                                                </div>
                                                <!-- CEP DO FUNCIONÁRIO -->
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>CEP:*</label>
                                                        <input type="text" id="cepUsuario" class="form-control" 
                                                               placeholder="Digite o CEP" name="cepUsuario" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <hr>
                                    <!-- BOTÕES -->
                                    <div style="float: right; margin-bottom: 15px;" class="form-actions">
                                        <button type="button" class="btn btn-secondary" onclick="window.location.href = '<?php echo base_url('lista-funcionarios'); ?>'">
                                            <i class="icon-cross2"></i> Cancelar
                                        </button>
                                        <button type="submit" class="btn btn-success" onclick="verificarDadosFuncionario();">
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
<div class="modal fade text-xs-left" data-backdrop="static" id="dados-obrigatorios-funcionario" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><i class="icon-warning"></i> Dados obrigatórios não informados</h4>
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
                <h4 class="modal-title text-xs-center">Senhas diferentes</h4>
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
                <h4 class="modal-title text-xs-center">CPF já cadastrado</h4>
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
                <h4 class="modal-title text-xs-center">Login já cadastrado</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - DADOS CADASTRADOS/ALTERADOS COM SUCESSO -->
<div class="modal fade text-xs-left" data-backdrop="static" id="sucesso-funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><?php if (isset($idFuncionario)) { ?> Dados cadastrados com sucesso 
                    <?php } else { ?> Erro ao cadastrar os dados <?php } ?></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="window.location.href = '<?php echo base_url('lista-funcionarios'); ?>'">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- MODAL - ERRO AO CADASTRAR/ALTERAR OS DADOS -->
<div class="modal fade text-xs-left" data-backdrop="static" id="erro-funcionario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" 
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title text-xs-center"><?php if (isset($idFuncionario)) { ?> Erro ao cadastrar os dados 
                    <?php } else { ?> Erro ao alterar os dados <?php } ?></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function verificarCPF(cpfUsuario, loginUsuario) {
        var dados = "cpfUsuario=" + cpfUsuario;
        $.ajax({
            url: "<?php echo base_url('sistema/FuncionarioController/cVerificarCPF') ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                if (data.existe) {
                    $('#cpf-cadastrado').modal('show');
                } else {
                    verificarLogin(loginUsuario);
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function verificarLogin(loginUsuario) {
        var dados = 'loginUsuario=' + loginUsuario;
        $.ajax({
            url: "<?php echo base_url('sistema/FuncionarioController/cVerificarLogin') ?>",
            type: "POST",
            data: dados,
            dataType: "JSON",
            success: function (data) {
                if (data.existe) {
                    $('#login-cadastrado').modal('show');
                } else {
                    cadEditFuncionario();
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }

    function cadEditFuncionario() {
        $.ajax({
            url: "<?php echo base_url('sistema/FuncionarioController/cCadastrarEditarFuncionario') ?>",
            type: "POST",
            data: $('#formCadEditFuncionario').serialize(),
            dataType: "JSON",
            success: function (data) {
                if (data.success) {
                    $('#sucesso-funcionario').modal('show');
                } else {
                    $('#erro-funcionario').modal('show');
                }
            },
            error: function (request, status, error) {
                alert("Erro: " + request.responseText);
            }
        });
    }
</script>
