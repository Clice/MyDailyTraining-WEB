<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionarioController extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
        $this->load->model('FuncionarioModel');
    }

    
    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-FUNCIONARIOS.PHP
    public function index() {
        
        $dadosFuncionario['nomePagina'] = 'Lista de Funcionários';
        $dadosFuncionario['funcionariosAtivos'] = $this->FuncionarioModel->mListarFuncionariosAtivos();
        $dadosFuncionario['funcionariosBloqueados'] = $this->FuncionarioModel->mListarFuncionariosBloqueados();
        
        $this->load->view('sistema/templates/html-header', $dadosFuncionario);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-funcionarios');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function viewCadastrarEditarFuncionario() {
        $dados['nomePagina'] = 'Cadastrar Funcionário';
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-funcionario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
