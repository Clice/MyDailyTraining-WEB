
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- CONTEÚDO DO MENU LATERAL -->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <!-- LISTAS - VISUALIZANDO INFORMAÇÕES -->
            <li class=" nav-item"><a href="#"><i class="icon-table2"></i>
                    <span data-i18n="nav.listas.main" class="menu-title">Listas</span></a>
                <ul class="menu-content">        
                    <?php if ($this->session->userdata('tipoConta') == 1) { ?>
                        <li><a href="<?php echo base_url('lista-equaltech'); ?>" data-i18n="nav.listas.equaltech" class="menu-item">EqualTech</a>
                        </li>
                        <li><a href="<?php echo base_url('lista-academias'); ?>" data-i18n="nav.listas.academias" class="menu-item">Academias</a>
                        </li>                 
                        <li><a href="<?php echo base_url('lista-administradores'); ?>" data-i18n="nav.listas.administradores" class="menu-item">Administradores</a>
                        </li> 
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('lista-administradores-academia'); ?>" data-i18n="nav.listas.administradores" class="menu-item">Administradores</a>
                        </li> 
                        <li><a href="<?php echo base_url('lista-funcionarios'); ?>" data-i18n="nav.listas.funcionarios" class="menu-item">Funcionários</a>
                        </li>
                        <li><a href="<?php echo base_url('lista-instrutores'); ?>" data-i18n="nav.listas.instrutores" class="menu-item">Instrutores</a>
                        </li>
                        <li><a href="<?php echo base_url('lista-alunos'); ?>" data-i18n="nav.listas.alunos" class="menu-item">Alunos</a>
                        </li>                      
                    <?php } ?>
                </ul>
            </li>
            <!-- CADASTROS - PARA REALIZAR CADASTROS NO SISTEMA -->
            <li class=" nav-item"><a href="#"><i class="icon-paper"></i>
                    <span data-i18n="nav.cadastros.main" class="menu-title">Cadastros</span></a>
                <ul class="menu-content">
                    <?php if ($this->session->userdata('tipoConta') == 1) { ?>
                        <li><a href="<?php echo base_url('cadastrar-academia/novo'); ?>" data-i18n="nav.cadastros.academia" class="menu-item">Academia</a>
                        </li>
                    <?php } else if ($this->session->userdata('tipoConta') == 2) { ?>  
                        <li><a href="<?php echo base_url('cadastrar-administrador/novo/' . $this->session->userdata('idAcademia') . '/lista-administradores'); ?>" data-i18n="nav.cadastros.administradores" class="menu-item">Administrador</a>
                        </li>      
                        <li><a href="<?php echo base_url('cadastrar-funcionario/novo'); ?>" data-i18n="nav.cadastros.funcionario" class="menu-item">Funcionário</a>
                        </li>
                        <li><a href="<?php echo base_url('cadastrar-instrutor/novo'); ?>" data-i18n="nav.cadastros.instrtor" class="menu-item">Instrutor</a>
                        </li> 
                        <li><a href="<?php echo base_url('cadastrar-aluno/novo'); ?>" data-i18n="nav.cadastros.aluno" class="menu-item">Aluno</a>
                        </li>
                    <?php } else { ?>
                        <li><a href="<?php echo base_url('cadastrar-aluno/novo'); ?>" data-i18n="nav.cadastros.aluno" class="menu-item">Aluno</a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <?php if ($this->session->userdata('tipoConta') == 2) { ?>
                <!-- RELATÓRIO - RELATÓRIOS QUE O SISTEMA PODE GERAR -->
                <li class=" nav-item">
                    <a href="<?php echo base_url('relatorio'); ?>"><i class="icon-book3"></i>
                        <span data-i18n="nav.other-pages.relatorio" class="menu-title">Relatório</span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
