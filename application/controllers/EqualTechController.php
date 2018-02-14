<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EqualTechController extends CI_Controller {

    // CONSTRUTOR DO EQUALTECH CONTROLLER
    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('logado') == true) {
            $this->load->model('UsuarioModel');
            $this->load->model('EqualTechModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-EQUALTECH.PHP
    public function index() {
        $dados['nomePagina'] = 'Lista de EqualTech';
        $dados['equaltechs'] = $this->EqualTechModel->mListarEqualTechs();

        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-equaltech');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW EDITAR-EQUALTECH.PHP
    public function vEditarEqualTech($idEqualTech) {
        // PARA REALIZAR A EDIÇÃO DE UM EQUALTECH
        if ($idEqualTech != "novo") {
            $dadosEqualTech = get_object_vars($this->UsuarioModel->mVisualizarUsuario($idEqualTech)[0]);
            $dadosEqualTech['nomePagina'] = 'Editar EqualTech';
            $dadosEqualTech['crefUsuario'] = "";
            $dadosEqualTech['statusConta'] = false;
            $dadosEqualTech['urlPagina'] = "meus-dados";
        }

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE EDIÇÃO DO EQUALTECH
        $this->load->view('sistema/templates/html-header', $dadosEqualTech);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-cadastro-usuario');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/cadastros/editar-equaltech');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL-EQUALTECH.PHP
    public function vPerfilEqualTech($idEqualTech) {
        $dados['nomePagina'] = 'Perfil EqualTech';
        $dados['perfilEqualTech'] = $this->UsuarioModel->mVisualizarUsuario($idEqualTech);

        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/perfis/perfil-equaltech');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
