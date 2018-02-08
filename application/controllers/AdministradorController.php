<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdministradorController extends CI_Controller {

    // CONSTRUTOR DO ADMINISTRADOR CONTROLLER
    public function __construct() {
        parent::__construct();
        $this->load->model('UsuarioModel');
        $this->load->model('AdministradorModel');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-ADMINISTRADORES.PHP PARA EQUALTECH
    // TODOS OS USUÁRIOS SERÃO MOSTRADOR
    public function index() {
        // PEGANDO AS INFORMAÇÕES NECESSÁRIAS
        $dadosAdministrador['nomePagina'] = "Lista de Administradores";
        $dadosAdministrador['urlPagina'] = "lista-administradores";
        $dadosAdministrador['administradoresAtivos'] = $this->AdministradorModel->mListarAdministradoresAtivos(0);
        $dadosAdministrador['administradoresBloqueados'] = $this->AdministradorModel->mListarAdministradoresBloqueados(0);

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE LISTA DE ADMINISTRADORES 
        $this->load->view('sistema/templates/html-header', $dadosAdministrador);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-administradores');
        $this->load->view('sistema/templates/usuario/modals-administrador');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-ADMINISTRADORES.PHP PARA OS USUÁRIOS
    // SOMENTE OS USUÁRIOS DA ACADEMIA SERÃO MOSTRADOS
    public function viewListaAdministradoresAcademia() {
        // PEGANDO AS INFORMAÇÕES NECESSÁRIAS
        $dadosAdministrador['nomePagina'] = "Lista de Administradores da Academia";
        $dadosAdministrador['urlPagina'] = "lista-administradores-academia";
        $dadosAdministrador['administradoresAtivos'] = $this->AdministradorModel->mListarAdministradoresAtivos($this->session->userdata('idAcademia'));
        $dadosAdministrador['administradoresBloqueados'] = $this->AdministradorModel->mListarAdministradoresBloqueados($this->session->userdata('idAcademia'));

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE LISTA DE ADMINISTRADORES 
        $this->load->view('sistema/templates/html-header', $dadosAdministrador);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-administradores');
        $this->load->view('sistema/templates/usuario/modals-administrador');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-ADMINISTRADOR.PHP
    public function viewCadastrarEditarAdministrador($idAdministrador, $idAcademia) {
        // SE UM ID ADMINISTRADOR FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO OU O CADASTRO DE UM ADMINISTRADOR
        if ($idAdministrador != "novo") {
            $dadosAdministrador = get_object_vars($this->UsuarioModel->mVisualizarUsuario($idAdministrador)[0]);
            $dadosAdministrador['nomePagina'] = "Editar Administrador";
            $dadosAdministrador['crefUsuario'] = "";
        } else {
            $dadosAdministrador['nomePagina'] = "Cadastrar Administrador";
            $dadosAdministrador['idUsuario'] = "novo";
            $dadosAdministrador['idAcademia'] = $idAcademia;
            $dadosAdministrador['sexoUsuario'] = "";
            $dadosAdministrador['crefUsuario'] = "";
            $dadosAdministrador['estadoUsuario'] = "";
            $dadosAdministrador['statusConta'] = true;
            $dadosAdministrador['tipoConta'] = 2;
        }

        if ($this->session->userdata('idAcademia') != NULL) {
            $dadosAdministrador['voltarPagina'] = "lista-administradores-academia";
        } else {
            $dadosAdministrador['voltarPagina'] = "lista-administradores";
        }

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE CADASTRO/EDIÇÃO DO ADMINISTRADOR  
        $this->load->view('sistema/templates/html-header', $dadosAdministrador);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-cadastro-usuario');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-administrador');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL ADMINISTRADOR.PHP
    public function viewPerfilAdministrador($idAdministrador) {
        $dadosAdministrador['nomePagina'] = "Perfil Administrador";
        $dadosAdministrador['urlPagina'] = "perfil-administrador/" . $idAdministrador;
        $dadosAdministrador['perfilAdministrador'] = $this->UsuarioModel->mVisualizarPerfilUsuario($idAdministrador);
        
        if ($this->session->userdata('idAcademia') != NULL) {
            $dadosAdministrador['voltarPagina'] = "lista-administradores-academia";
        } else {
            $dadosAdministrador['voltarPagina'] = "lista-administradores";
        }

        $this->load->view('sistema/templates/html-header', $dadosAdministrador);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-administrador');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/perfis/perfil-administrador');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
