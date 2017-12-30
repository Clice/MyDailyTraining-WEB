<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class InstrutorController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('InstrutorModel');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-INSTRUTOR.PHP
    public function index() {
        $dadosInstrutor['nomePagina'] = 'Lista de Instrutores';
        $dadosInstrutor['instrutoresAtivos'] = $this->InstrutorModel->mListarInstrutoresAtivos();
        $dadosInstrutor['instrutoresBloqueados'] = $this->InstrutorModel->mListarInstrutoresBloqueados();

        $this->load->view('sistema/templates/html-header', $dadosInstrutor);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-instrutores');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function viewCadastrarEditarInstrutor() {
        $dados['nomePagina'] = 'Cadastrar Instrutor';

        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-instrutor');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

// FUNÇÃO CONTROLLER PARA CADASTRAR/EDITAR FUNCIONÁRIO
    public function cCadastrarEditarInstrutor() {

        // PEGANDO OS VALORES PASSADOS PELO CADASTRAR-EDITAR-INSTRUTOR.PHP     
        $dadosInstrutor = array(
            'idAcademia' => $this->input->post('idAcademia'),
            'nomeUsuario' => $this->input->post('nomeUsuario'),
            'loginUsuario' => $this->input->post('loginUsuario'),
            'senhaUsuario' => $this->input->post('senhaUsuario'),
            'emailUsuario' => $this->input->post('emailUsuario'),
            'cpfUsuario' => $this->input->post('cpfUsuario'),
            'rgUsuario' => $this->input->post('rgUsuario'),
            'sexoUsuario' => $this->input->post('sexoUsuario'),
            'dataNascimentoUsuario' => $this->input->post('dataNascimentoUsuario'),
            'idadeUsuario' => $this->input->post('idadeUsuario'),
            'enderecoUsuario' => $this->input->post('enderecoUsuario'),
            'estadoUsuario' => $this->input->post('estadoUsuario'),
            'cidadeUsuario' => $this->input->post('cidadeUsuario'),
            'bairroUsuario' => $this->input->post('bairroUsuario'),
            'cepUsuario' => $this->input->post('cepUsuario'),
            'telefoneUsuario' => $this->input->post('telefoneUsuario'),
            'tipoConta' => 4,
            'statusConta' => true
        );

        // SE O ID USUARIO FOR NOVO, CADASTRAR UM NOVO FUNCIONÁRIO
        if ($dadosInstrutor['idUsuario'] == "novo") {
            if ($this->InstrutorModel->mCadastrarInstrutor($dadosInstrutor)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }
        // SE O ID USUARIO JÁ EXISTE, ALTERAR OS DADOS DO FUNCIONÁRIO
        else {
            if ($this->InstrutorModel->mEditarInstrutor($dadosInstrutor)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA EXCLUIR FUNCIONÁRIO
    public function cExcluirInstrutor() {
        $idInstrutor = $this->input->post('idUsuario');

        if ($this->InstrutorModel->mExcluirInstrutor($idInstrutor)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA BLOQUEAR FUNCIONÁRIO
    public function cBloquearInstrutor() {
        $idInstrutor = $this->input->post('idUsuario');

        if ($this->InstrutorModel->mBloquearInstrutor($idInstrutor)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA DESBLOQUEAR FUNCIONÁRIO
    public function cDesbloquearInstrutor() {
        $idInstrutor = $this->input->post('idUsuario');

        if ($this->InstrutorModel->mDesbloquearInstrutor($idInstrutor)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VISUALIZAR OS DADOS DO INSTRUTOR
    public function cVisualizarPerfilInstrutor() {
        $idInstrutor = $this->input->post('idUsuario');

        if ($this->InstrutorModel->mVisualizarPerfilInstrutor($idInstrutor)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CPF
    public function cVerificarCPF() {
        $cpfInstrutor = $this->input->post('cpfUsuario');

        $dadosInstrutor = $this->InstrutorModel->mVerificarCPF($cpfInstrutor);

        if (count($dadosInstrutor) === 1) {
            $resposta = array('existe' => true);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }
}