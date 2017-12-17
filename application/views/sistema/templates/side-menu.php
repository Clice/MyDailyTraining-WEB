
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- CONTEÚDO DO MENU LATERAL -->
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <!-- LISTAS - VISUALIZANDO DOS OS CADASTROS REALIZADOS NO SISTEMA -->
            <li class=" nav-item"><a href="#"><i class="icon-table2"></i><span data-i18n="nav.listas.main" class="menu-title">Listas</span></a>
                <ul class="menu-content">
                    <?php if ($this->session->userdata('tipoConta') == 1) { ?>
                        <li><a href="<?php echo base_url('lista-equaltech'); ?>" data-i18n="nav.listas.equaltech" class="menu-item">EqualTech</a>
                        </li>
                        <li><a href="<?php echo base_url('lista-academias'); ?>" data-i18n="nav.listas.academias" class="menu-item">Academias</a>
                        </li>
                    <?php } ?>
                    <li><a href="<?php echo base_url('lista-administradores'); ?>" data-i18n="nav.listas.administradores" class="menu-item">Administradores</a>
                    </li>
                    <?php if ($this->session->userdata('tipoConta') != 1) { ?>
                        <li><a href="<?php echo base_url('lista-funcionarios'); ?>" data-i18n="nav.listas.funcionarios" class="menu-item">Funcionários</a>
                        </li>
                        <li><a href="<?php echo base_url('lista-instrutores'); ?>" data-i18n="nav.listas.instrutores" class="menu-item">Instrutores</a>
                        </li>
                        <li><a href="<?php echo base_url('lista-alunos'); ?>" data-i18n="nav.listas.alunos" class="menu-item">Alunos</a>
                        </li>
                        <li><a href="<?php echo base_url('lista-treinos'); ?>" data-i18n="nav.listas.treinos" class="menu-item">Treinos</a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <!-- CADASTROS - REALIZANDO OS CADASTROS NO SISTEMA -->
            <li class=" nav-item"><a href="#"><i class="icon-paper"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Cadastros</span></a>
                <ul class="menu-content">
                    <?php if ($this->session->userdata('tipoConta') == 1) { ?>
                        <li><a href="<?php echo base_url('cadastrar-editar-academia'); ?>" data-i18n="nav.page_layouts.main" class="menu-item">Academia</a>
                        </li>
                    <?php } ?>
                    <li><a href="<?php echo base_url('cadastrar-editar-administrador'); ?>" data-i18n="nav.page_layouts.main" class="menu-item">Administrador</a>
                    </li>
                    <?php if ($this->session->userdata('tipoConta') != 1) { ?>
                        <li><a href="<?php echo base_url('cadastrar-editar-funcionario'); ?>" data-i18n="nav.page_layouts.main" class="menu-item">Funcionário</a>
                        </li>
                        <li><a href="<?php echo base_url('cadastrar-editar-instrutor'); ?>" data-i18n="nav.page_layouts.main" class="menu-item">Instrutor</a>
                        </li>                    
                        <li><a href="<?php echo base_url('cadastrar-editar-aluno'); ?>" data-i18n="nav.page_layouts.main" class="menu-item">Aluno</a>
                        </li>
                        <li><a href="<?php echo base_url('cadastrar-editar-treino'); ?>" data-i18n="nav.page_layouts.main" class="menu-item">Treino</a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
            <!-- RELATÓRIO - RELATÓRIOS QUE O SISTEMA PODE GERAR -->
            <li class=" nav-item"><a href="<?php echo base_url('relatorio'); ?>"><i class="icon-book3"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">Relatório</span></a>          
        </ul>
    </div>
</div>
