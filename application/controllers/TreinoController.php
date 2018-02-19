<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TreinoController extends CI_Controller {

    // CONSTRUTOR DO TREINO CONTROLLER
    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('logado') == true) {
            $this->load->model('TreinoModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-TRIENOS.PHP
    public function index() {
        $dadosTreino['nomePagina'] = 'Lista de Treinos';
        $dadosTreino['urlPagina'] = "lista-treinos";
        $dadosTreino['treinos'] = $this->TreinoModel->mListarTreinos();

        $this->load->view('sistema/templates/html-header', $dadosTreino);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-treinos');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-TREINO.PHP
    public function vCadastrarEditarTreino($idTreino) {
        // SE UM ID TRIENO FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO DE DADOS DE UM TREINO
        if ($idTreino != "novo") {
            $dados['nomePagina'] = 'Editar Academia';
        }
        // PARA REALIZAR O CADASTRO DE UM TREINO
        else {
            $dados['nomePagina'] = 'Cadastrar Treino';
            $dados['idTreino'] = $idTreino;
        }

        $dados['exercicios'] = $this->TreinoModel->mVisualizarExercicios();

        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-treino');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
