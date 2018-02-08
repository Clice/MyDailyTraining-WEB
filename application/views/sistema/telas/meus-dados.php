
<!-- DODOS DO FUNCIONÁRIO -->
<div class="app-content content container-fluid">
    <div class="content-wrapper">      
        <!-- CONTEÚDO DO PÁGINA - DODOS DO FUNCIONÁRIO ESCOLHIDO -->
        <div class="content-body">
            <section id="basic-form-layouts">
                <div class="row match-height">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <!-- TÍTULO DO PÁGINA - NOME DO FUNCIONÁRIO -->
                                    <div class="content-header row">
                                        <div class="content-header-left col-md-6 col-xs-12 mb-1">
                                            <h2 class="content-header-title"><?php echo $this->session->userdata('nomeUsuario'); ?></h2>
                                        </div>
                                    </div>
                                    <hr>
                                    <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $this->session->userdata('idUsuario'); ?>">
                                    <div class="form-body">
                                        <h4 class="form-section"></h4>
                                        <div class="row">
                                            <!-- CPF DO FUNCIONÁRIO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>CPF: </strong></h4>
                                                    <h4><?php echo $this->session->userdata('cpfUsuario'); ?></h4>
                                                </div>
                                            </div>
                                            <!-- RG DO FUNCIONÁRIO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>RG: </strong></h4>
                                                    <h4><?php echo $this->session->userdata('rgUsuario'); ?></h4>
                                                </div>
                                            </div>
                                            <!-- E-MAIL DO FUNCIONÁRIO -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h4><strong>E-mail: </strong></h4>
                                                    <h4><?php echo $this->session->userdata('emailUsuario'); ?></h4>
                                                </div>
                                            </div>
                                            <!-- TELEFONE DO FUNCIONÁRIO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Telefone: </strong></h4>
                                                    <h4><?php echo $this->session->userdata('telefoneUsuario'); ?></h4>
                                                </div>
                                            </div>
                                            <!-- SEXO DO FUNCIONÁRIO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Sexo: </strong></h4>
                                                    <h4><?php echo $this->session->userdata('sexoUsuario'); ?></h4>
                                                </div>
                                            </div>
                                            <!-- DATA DO NASCIMENTO DO FUNCIONÁRIO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Data de Nascimento: </strong></h4>
                                                    <h4><?php echo formatarData($this->session->userdata('dataNascimentoUsuario')); ?></h4>
                                                </div>
                                            </div>
                                            <!-- IDADE DO FUNCIONÁRIO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Idade: </strong></h4>
                                                    <h4><?php echo $this->session->userdata('idadeUsuario'); ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <!-- ENDEREÇO DO FUNCIONÁRIO -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h4><strong>Endereço: </strong></h4>
                                                    <h4><?php echo $this->session->userdata('enderecoUsuario'); ?></h4>
                                                </div>
                                            </div>
                                            <!-- CEP DO FUNCIONÁRIO -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h4><strong>CEP: </strong></h4>
                                                    <h4><?php echo $this->session->userdata('cepUsuario'); ?></h4>
                                                </div>
                                            </div>
                                            <!-- BAIRRO DO FUNCIONÁRIO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Bairro: </strong></h4>
                                                    <h4><?php echo $this->session->userdata('bairroUsuario'); ?></h4>
                                                </div>
                                            </div>
                                            <!-- CIDADE DO FUNCIONÁRIO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Cidade: </strong></h4>
                                                    <h4><?php echo $this->session->userdata('cidadeUsuario'); ?></h4>
                                                </div>
                                            </div>
                                            <!-- ESTADO DO FUNCIONÁRIO -->
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h4><strong>Estado: </strong></h4>
                                                    <h4><?php echo $this->session->userdata('estadoUsuario'); ?></h4>
                                                </div>
                                            </div>                                     
                                        </div>
                                    </div>
                                    <hr style="margin-top: 4%;">
                                    <!-- BOTÕES -->
                                    <div style="float: right;" class="form-actions">
                                        <button type="button" class="btn btn-warning" 
                                                onclick="window.location.href = '<?php echo base_url($urlPagina); ?>'">
                                            <i class="icon-edit"></i> Editar
                                        </button>
                                        <?php if (($this->session->userdata('idAcademia') > 0) && ($this->session->userdata('tipoConta') == 2)) { ?>
                                            <button type="button" class="btn btn-success" 
                                                    onclick="window.location.href = '<?php echo base_url('perfil-academia/' . md5($this->session->userdata('idAcademia'))); ?>';">
                                                <i class="icon-eye"></i> Perfil Academia
                                            </button>
                                        <?php } ?>
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
