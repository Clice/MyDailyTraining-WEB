<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PrincipalController extends CI_Controller {

    // CONSTRUTOR DO USUÁRIO CONTROLLER
    public function __construct() {
        parent::__construct();
        
        // VERIFICANDO SE TEM ALGUM USUÁRIO LOGADO PARA PERMITIR O ACESSO
        if ($this->session->userdata('logado') == true) {
            $this->load->model('AlunoModel');
            $this->load->model('UsuarioModel');
            $this->load->model('AcademiaModel');
            $this->load->model('InstrutorModel');
            $this->load->model('FuncionarioModel');
            $this->load->model('AdministradorModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PAGINA-PRINCIPAL.PHP
    public function index() {
        $dados['nomePagina'] = 'Página Principal';
        $dados['qtdAcademiasAtivas'] = count($this->AcademiaModel->mQtdAcademiasAtivas(0));
        $dados['qtdAcademiasBloqueadas'] = count($this->AcademiaModel->mQtdAcademiasBloqueadas(0));
        $dados['qtdAdminAtivos'] = count($this->AdministradorModel->mQtdAdminAtivos($this->session->userdata('idAcademia')));
        $dados['qtdAdminBloqueados'] = count($this->AdministradorModel->mQtdAdminBloqueados($this->session->userdata('idAcademia')));
        $dados['qtdFuncAtivos'] = count($this->FuncionarioModel->mQtdFuncAtivos($this->session->userdata('idAcademia')));
        $dados['qtdFuncBloqueados'] = count($this->FuncionarioModel->mQtdFuncBloqueados($this->session->userdata('idAcademia')));
        $dados['qtdInstAtivos'] = count($this->InstrutorModel->mQtdInstAtivos($this->session->userdata('idAcademia')));
        $dados['qtdInstBloqueados'] = count($this->InstrutorModel->mQtdInstBloqueados($this->session->userdata('idAcademia')));
        $dados['qtdAlunosAtivos'] = count($this->AlunoModel->mQtdAlunosAtivos($this->session->userdata('idAcademia')));
        $dados['qtdAlunosBloqueados'] = count($this->AlunoModel->mQtdAlunosBloqueados($this->session->userdata('idAcademia')));

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/pagina-principal');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL.PHP
    public function vMeusDados() {
        $dados['nomePagina'] = 'Meus Dados';

        if ($this->session->userdata('tipoConta') == 1) {
            $dados['urlPagina'] = 'editar-equaltech/' . md5($this->session->userdata('idUsuario'));
        } else if ($this->session->userdata('tipoConta') == 2) {
            $dados['urlPagina'] = 'editar-administrador/' . md5($this->session->userdata('idUsuario')) . '/' . $this->session->userdata('idAcademia');
        } else if ($this->session->userdata('tipoConta') == 3) {
            $dados['urlPagina'] = 'editar-funcionario/' . md5($this->session->userdata('idUsuario'));
        } else if ($this->session->userdata('tipoConta') == 4) {
            $dados['urlPagina'] = 'editar-instrutor/' . md5($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/meus-dados');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW NOTIFICACOES.PHP
    public function vNotificacoes() {
        $dados['nomePagina'] = 'Notificações';

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/notificacoes');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW RELARORIO.PHP
    public function vRelatorio() {
        $dados['nomePagina'] = 'Relatório';

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/relatorio');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
