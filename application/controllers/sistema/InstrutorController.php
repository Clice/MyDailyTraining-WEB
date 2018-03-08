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
        $this->load->view('sistema/templates/js');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function viewCadastrarEditarInstrutor() {
        $dadosInstrutor['nomePagina'] = 'Cadastrar Instrutor';

        // SE UM ID ADMINISTRADOR FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO OU O CADASTRO DE UM ADMINISTRADOR
        if (isset($idInstrutor)) {
            $dadosInstrutor['idInstrutor'] = $idInstrutor;
            $dadosInstrutor['idAcademia'] = $this->session->userdata('idAcademia');
            // $dadosAdministrador['sexoUsuario'] = $this->session->userdata('idAcademia');
        } else {
            $dadosInstrutor['idInstrutor'] = "novo";
            $dadosInstrutor['idAcademia'] = $this->session->userdata('idAcademia');
            $dadosInstrutor['sexoUsuario'] = '';
        }

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE CADASTRO/EDIÇÃO DO INSTRUTOR  
        $this->load->view('sistema/templates/html-header', $dadosInstrutor);
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
            'idUsuario' => $this->input->post('idUsuario'),
            'idAcademia' => $this->input->post('idAcademia'),
            'nomeUsuario' => $this->input->post('nomeUsuario'),
            'loginUsuario' => $this->input->post('loginUsuario'),
            'senhaUsuario' => $this->input->post('senhaUsuario'),
            'emailUsuario' => $this->input->post('emailUsuario'),
            'crefUsuario' => $this->input->post('crefUsuario'),
            'cpfUsuario' => $this->input->post('cpfUsuario'),
            'rgUsuario' => $this->input->post('rgUsuario'),
            'sexoUsuario' => $this->input->post('sexoUsuario'),
            'dataNascimentoUsuario' => $this->input->post('dataNascimentoUsuario'),
            'idadeUsuario' => date('Y-m-d') - 'dataNascimentoUsuario',
            'enderecoUsuario' => $this->input->post('enderecoUsuario'),
            'estadoUsuario' => $this->input->post('estadoUsuario'),
            'cidadeUsuario' => $this->input->post('cidadeUsuario'),
            'bairroUsuario' => $this->input->post('bairroUsuario'),
            'cepUsuario' => $this->input->post('cepUsuario'),
            'telefoneUsuario' => $this->input->post('telefoneUsuario'),
            'tipoConta' => 4,
            'statusConta' => true
        );

        $dadosInstrutor['idadeUsuario'] = calcularIdade($dadosInstrutor['dataNascimentoUsuario']);
        
        // SE O ID USUARIO FOR NOVO, CADASTRAR UM NOVO INSTRUTOR
        if ($dadosInstrutor['idUsuario'] == "novo") {
            if ($this->UsuarioModel->mCadastrarUsuario($dadosInstrutor)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }
        // SE O ID USUARIO JÁ EXISTE, ALTERAR OS DADOS DO INSTRUTOR
        else {
            if ($this->UsuarioModel->mEditarUsuario($dadosInstrutor)) {
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

        if ($this->UsuarioModel->mExcluirUsuario($idInstrutor)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA BLOQUEAR FUNCIONÁRIO
    public function cBloquearInstrutor() {
        $idInstrutor = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mBloquearUsuario($idInstrutor)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA DESBLOQUEAR FUNCIONÁRIO
    public function cDesbloquearInstrutor() {
        $idInstrutor = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mDesbloquearUsuario($idInstrutor)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VISUALIZAR OS DADOS DO INSTRUTOR
    public function cVisualizarPerfilInstrutor() {
        $idInstrutor = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mVisualizarPerfilUsuario($idInstrutor)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CPF
    public function cVerificarCPF() {
        $cpfInstrutor = $this->input->post('cpfUsuario');

        $dadosInstrutor = $this->UsuarioModel->mVerificarCPF($cpfInstrutor);

        if (count($dadosInstrutor) === 1) {
            $resposta = array('existe' => true);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O LOGIN
    public function cVerificarLogin() {
        $loginUsuario = $this->input->post('loginUsuario');

        $dadosInstrutor = $this->UsuarioModel->mVerificarLogin($loginUsuario);

        if (count($dadosInstrutor) === 1) {
            $resposta = array('existe' => true);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }
}