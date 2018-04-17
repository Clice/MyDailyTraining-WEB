<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

    <!-- CABEÇALHO DA PÁGINA - BARRA DE MENU SUPERIOR -->
    <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow" style="box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);" >
        <div class="navbar-wrapper">
            <!-- LOGO - TAMANHOS DIFERENTES PARA OS TAMANHOS DIFERENTES DE MENU LATERAL -->
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li class="nav-item mobile-menu hidden-md-up float-xs-left">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a>
                    </li>
                    <li class="nav-item"><a href="<?php echo base_url('pagina-principal'); ?>" class="navbar-brand nav-link">
                            <img alt="branding logo" data-expand="<?php echo base_url('assets/imagens/IconNome35px.png'); ?>" 
                                 data-collapse="<?php echo base_url('assets/imagens/Icon35px.png'); ?>" class="brand-logo">
                        </a>
                    </li>
                    <li class="nav-item hidden-md-up float-xs-right">
                        <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container">
                            <i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
                </ul>
            </div>
            <!-- BARRA SUPERIOR - MENU SUPERIOR -->
            <div class="navbar-container content container-fluid">
                <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                    <!-- BOTÃO TOGGLE PARA O MENU LATERAL -->
                    <ul class="nav navbar-nav">
                        <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs">
                                <i class="icon-menu5"></i></a></li>
                    </ul>
                    <!-- MENU DO CANTO SUPERIOR DIREITO -->
                    <ul class="nav navbar-nav float-xs-right">
                        <?php if ($this->session->userdata('tipoConta') == 4) { ?>
                            <!-- SINO DE NOTIFICAÇÃO DOS CHAMADOS -->
                            <li class="dropdown dropdown-notification nav-item">
                                <a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                                    <i class="ficon icon-bell4"></i>
                                    <?php
                                    $qtdNotificacoes = 0;

                                    foreach ($chamadosInstrutor as $chamadoInstrutor) {
                                        $chamadoInstrutor->nomeAluno;
                                        ++$qtdNotificacoes;
                                    }
                                    ?>
                                    <span class="tag tag-pill tag-default tag-danger tag-default tag-up">
                                        <?php echo $qtdNotificacoes; ?></span>
                                </a>
                                <!-- CORPO DO SINO DE NOTIFICAÇÃO DOS CHAMADOS -->
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <!-- TÍTULO DO CORPO -->
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0"><span class="grey darken-2">Chamados</span></h6>
                                    </li>
                                    <!-- CHAMADOS -->
                                    <?php foreach ($chamadosInstrutor as $chamadoInstrutor) { ?>
                                        <li class="list-group scrollable-container">
                                            <a href="javascript:void(0)" class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left valign-middle"><i class="icon-user5 icon-bg-circle bg-red bg-darken-1"></i></div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading black darken-1">
                                                            <?php echo $chamadoInstrutor->nomeAluno; ?> está solicitando atendimento</h6>
                                                        <time class="media-meta text-muted">
                                                            <?php echo $chamadoInstrutor->horarioChamado; ?></time>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    <!-- RODAPÉ DA CAIXA DE CHAMADOS - TODOS OS CHAMADOS -->
                                    <li class="dropdown-menu-footer"><a href="<?php echo base_url('lista-chamados/' . md5($this->session->userdata('idUsuario'))); ?>" class="dropdown-item text-muted text-xs-center">
                                            Ver todos os chamados</a></li>
                                </ul>
                            </li>
                        <?php } ?>

                        <!-- PERFIL DO USUÁRIOS - COM LOGOUT -->
                        <li class="dropdown dropdown-user nav-item">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                                <span class="avatar avatar-online">
                                    <?php if ($this->session->userdata('sexoUsuario') == "Masculino") { ?>
                                        <img src="<?php echo base_url('assets/imagens/user_male.png'); ?>" alt="avatar"><i></i>
                                    <?php } else if ($this->session->userdata('sexoUsuario') == "Feminino") { ?>
                                        <img src="<?php echo base_url('assets/imagens/user_female.png'); ?>" alt="avatar"><i></i>
                                    <?php } else if ($this->session->userdata('sexoUsuario') == "Outro") { ?>
                                        <img src="<?php echo base_url('assets/imagens/ic_user.png'); ?>" alt="avatar"><i></i>
                                    <?php } ?>
                                </span>
                                <span class="user-name"><?php echo $this->session->userdata('nomeUsuario'); ?></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="<?php echo base_url('meus-dados'); ?>" class="dropdown-item"><i class="icon-head"></i> Meus Dados</a>
                                <div class="dropdown-divider"></div><a href="<?php echo base_url('InicialController/cLogoutUsuario'); ?>" class="dropdown-item"><i class="icon-power3"></i> Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>