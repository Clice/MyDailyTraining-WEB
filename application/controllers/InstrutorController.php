<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class InstrutorController extends CI_Controller {

    // CONSTRUTOR DO INSTRUTOR CONTROLLER
    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('logado') == true) {
            $this->load->model('UsuarioModel');
            $this->load->model('InstrutorModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-INSTRUTOR.PHP
    public function index() {
        $dadosInstrutor['nomePagina'] = 'Lista de Instrutores';
        $dadosInstrutor['urlPagina'] = 'lista-instrutores';
        $dadosInstrutor['instrutoresAtivos'] = $this->InstrutorModel->mListarInstrutoresAtivos();
        $dadosInstrutor['instrutoresBloqueados'] = $this->InstrutorModel->mListarInstrutoresBloqueados();

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE LISTA DE INSTRUTORES 
        $this->load->view('sistema/templates/html-header', $dadosInstrutor);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-instrutores');
        $this->load->view('sistema/templates/usuario/modals-instrutor');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-INSTRUTOR.PHP
    public function vCadastrarEditarInstrutor($idInstrutor) {
        // SE UM ID INSTRUTOR FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO OU O CADASTRO DE UM INSTRUTOR
        if ($idInstrutor != "novo") {
            $dadosInstrutor = get_object_vars($this->UsuarioModel->mVisualizarUsuario($idInstrutor)[0]);
            $dadosInstrutor['nomePagina'] = "Editar Instrutor";
        } else {
            $dadosInstrutor['nomePagina'] = "Cadastrar Instrutor";
            $dadosInstrutor['idUsuario'] = "novo";
            $dadosInstrutor['idAcademia'] = $this->session->userdata('idAcademia');
            $dadosInstrutor['sexoUsuario'] = "";
            $dadosInstrutor['crefUsuario'] = "";
            $dadosInstrutor['estadoUsuario'] = "";
            $dadosInstrutor['statusConta'] = true;
            $dadosInstrutor['tipoConta'] = 4;
        }

        $dadosInstrutor['urlPagina'] = 'lista-instrutores';

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE CADASTRO/EDIÇÃO DO INSTRUTOR  
        $this->load->view('sistema/templates/html-header', $dadosInstrutor);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-cadastro-usuario');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-instrutor');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL-INSTRUTOR.PHP
    public function vPerfilInstrutor($idInstrutor) {
        $dadosInstrutor['nomePagina'] = "Perfil do Instrutor";
        $dadosInstrutor['urlPagina'] = "perfil-instrutor/" . $idInstrutor;
        $dadosInstrutor['perfilInstrutor'] = $this->UsuarioModel->mVisualizarUsuario($idInstrutor);

        $this->load->view('sistema/templates/html-header', $dadosInstrutor);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-instrutor');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/perfis/perfil-instrutor');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
