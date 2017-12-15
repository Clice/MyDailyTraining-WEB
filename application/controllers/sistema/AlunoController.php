<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AlunoController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AlunoModel');
    }

    public function index() {
        $dados['nomePagina'] = 'Lista de Alunos';
        $dados['alunoAtivos'] = $this->AlunoModel->listar_alunos_ativos();
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-alunos');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function viewCadastrarEditarAluno() {
        $dados['nomePagina'] = 'Cadastrar Aluno';
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-aluno');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
