<!-- CABEÇALHO DA PÁGINA - BARRA DE MENU SUPERIOR -->
<nav style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);" class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <!-- LOGO - TAMANHOS DIFERENTES PARA OS TAMANHOS DIFERENTES DE MENU LATERAL -->
        <div class="navbar-header">            
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a href="<?php echo base_url('pagina-principal'); ?>" class="navbar-brand nav-link centered">
                        <img alt="branding logo" data-expand="<?php echo base_url('assets/imagens/IconNome35px.png'); ?>" 
                             data-collapse="<?php echo base_url('assets/imagens/Icon35px.png'); ?>" class="brand-logo">
                    </a>
                </li>
            </ul>
        </div>
        <!-- BARRA SUPERIOR - MENU SUPERIOR -->
        <div class="navbar-container content container-fluid">
            <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                <!-- BOTÃO TOGGLE PARA O MENU LATERAL -->
                <ul class="nav navbar-nav">
                    <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i></a></li>
                </ul>
                <!-- MENU DO CANTO SUPERIOR DIREITO -->
                <ul class="nav navbar-nav float-xs-right">
                    <!-- SINO DE NOTIFICAÇÃO DOS CHAMADOS -->
                    <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                            <i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                        <!-- CORPO DO SINO DE NOTIFICAÇÃO DOS CHAMADOS -->
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <!-- TÍTULO DO CORPO -->
                            <li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0"><span class="grey darken-2">Chamados</span></h6>
                            </li>
                            <!-- CHAMADOS -->
                            <li class="list-group scrollable-container">
                                <a href="javascript:void(0)" class="list-group-item">
                                    <div class="media">
                                        <div class="media-left valign-middle"><i class="icon-monitor3 icon-bg-circle bg-red bg-darken-1"></i></div>
                                        <div class="media-body">
                                            <h6 class="media-heading black darken-1">'Nome do Usuário' está solicitando atendimento</h6>
                                            <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tempo</time>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- RODAPÉ DA CAIXA DE CHAMADOS - TODOS OS CHAMADOS -->
                            <li class="dropdown-menu-footer"><a href="<?php echo base_url('notificacoes'); ?>" class="dropdown-item text-muted text-xs-center">
                                    Ver todos os chamados</a></li>
                        </ul>
                    </li>

                    <!-- PERFIL DO USUÁRIOS - COM LOGOUT -->
                    <li class="dropdown dropdown-user nav-item">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                            <span class="avatar avatar-online">
                                <img src="<?php echo base_url('assets/imagens/avatar-s-1.png'); ?>" alt="avatar"><i></i></span><span class="user-name"><?php if ($this->session->userdata('tipoConta') == 1) { echo $this->session->userdata('nomeEqualTech'); } else if ($this->session->userdata('tipoConta') > 1) { echo $this->session->userdata('nomeUsuario'); } ?></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?php echo base_url('perfil'); ?>" class="dropdown-item"><i class="icon-head"></i> Perfil</a>
                            <div class="dropdown-divider"></div><a href="<?php echo base_url('sistema/LoginController/cLogoutUsuario'); ?>" class="dropdown-item"><i class="icon-power3"></i> Sair</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>