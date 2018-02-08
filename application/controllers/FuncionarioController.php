<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionarioController extends CI_Controller {

    // CONSTRUTOR DO FUNCIONARIO CONTROLLER
    public function __construct() {
        parent::__construct();
        $this->load->model('UsuarioModel');
        $this->load->model('FuncionarioModel');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-FUNCIONARIOS.PHP
    public function index() {
        $dadosFuncionario['nomePagina'] = "Lista de Funcionários";
        $dadosFuncionario['urlPagina'] = "lista-funcionarios";
        $dadosFuncionario['funcionariosAtivos'] = $this->FuncionarioModel->mListarFuncionariosAtivos();
        $dadosFuncionario['funcionariosBloqueados'] = $this->FuncionarioModel->mListarFuncionariosBloqueados();

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE LISTA DE FUNCIONÁRIOS 
        $this->load->view('sistema/templates/html-header', $dadosFuncionario);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-funcionarios');
        $this->load->view('sistema/templates/usuario/modals-funcionario');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-FUNCIONARIO.PHP
    public function viewCadastrarEditarFuncionario($idFuncionario) {
        // SE UM ID FUNCIONARIO FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO OU O CADASTRO DE UM FUNCIONARIO        
        if ($idFuncionario != "novo") {
            $dadosFuncionario = get_object_vars($this->UsuarioModel->mVisualizarPerfilUsuario($idFuncionario)[0]);
            $dadosFuncionario['nomePagina'] = "Editar Funcionário";
            $dadosFuncionario['crefUsuario'] = "";
        } else {
            $dadosFuncionario['nomePagina'] = "Cadastrar Funcionário";
            $dadosFuncionario['idUsuario'] = "novo";
            $dadosFuncionario['idAcademia'] = $this->session->userdata('idAcademia');
            $dadosFuncionario['sexoUsuario'] = "";
            $dadosFuncionario['crefUsuario'] = "";
            $dadosFuncionario['estadoUsuario'] = "";
            $dadosFuncionario['statusConta'] = true;
            $dadosFuncionario['tipoConta'] = 3;
        }
        
        $dadosFuncionario['urlPagina'] = "lista-funcionarios";

        $this->load->view('sistema/templates/html-header', $dadosFuncionario);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-cadastro-usuario');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-funcionario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL-FUNCIONARIO.PHP
    public function viewPerfilFuncionario($idFuncionario) {
        $dadosFuncionario['nomePagina'] = "Perfil do Funcionário";
        $dadosFuncionario['urlPagina'] = "perfil-funcionario";
        $dadosFuncionario['perfilFuncionario'] = $this->UsuarioModel->mVisualizarPerfilUsuario($idFuncionario);

        $this->load->view('sistema/templates/html-header', $dadosFuncionario);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-funcionario');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/perfis/perfil-funcionario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
