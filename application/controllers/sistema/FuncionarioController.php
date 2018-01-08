<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionarioController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('FuncionarioModel');
        $this->load->model('UsuarioModel');
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
        $dadosFuncionario['nomePagina'] = 'Cadastrar Funcionário';
        
        // SE UM ID ADMINISTRADOR FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO OU O CADASTRO DE UM ADMINISTRADOR
        if (isset($idFuncionario)) {
            $dadosFuncionario['idFuncionario'] = $idFuncionario;
            $dadosFuncionario['idAcademia'] = $this->session->userdata('idAcademia');
        } else {
            $dadosFuncionario['idFuncionario'] = "novo";
            $dadosFuncionario['idAcademia'] = $this->session->userdata('idAcademia');
            $dadosFuncionario['sexoUsuario'] = '';
        }
        
        $this->load->view('sistema/templates/html-header', $dadosFuncionario);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-funcionario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }
    
    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL-FUNCIONARIO.PHP
    public function viewPerfilFuncionario($idFuncionario) {
        $dadosFuncionario['nomePagina'] = 'Perfil do Funcionário';
        $dadosFuncionario['perfilFuncionario'] = $this->UsuarioModel->mVisualizarPerfilUsuario($idFuncionario);

        $this->load->view('sistema/templates/html-header', $dadosFuncionario);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/perfis/perfil-funcionario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO CONTROLLER PARA CADASTRAR/EDITAR FUNCIONÁRIO
    public function cCadastrarEditarFuncionario() {        
        // PEGANDO OS VALORES PASSADOS PELO CADASTRAR-EDITAR-FUNCIONARIO.PHP     
        $dadosFuncionario = array(
            'idUsuario' => $this->input->post('idUsuario'),
            'idAcademia' => $this->input->post('idAcademia'),
            'nomeUsuario' => $this->input->post('nomeUsuario'),
            'loginUsuario' => base64_encode($this->input->post('loginUsuario')),
            'senhaUsuario' => base64_encode($this->input->post('senhaUsuario')),
            'emailUsuario' => $this->input->post('emailUsuario'),
            'crefUsuario' => $this->input->post('crefUsuario'),
            'cpfUsuario' => $this->input->post('cpfUsuario'),
            'rgUsuario' => $this->input->post('rgUsuario'),
            'sexoUsuario' => $this->input->post('sexoUsuario'),
            'dataNascimentoUsuario' => $this->input->post('dataNascimentoUsuario'),
            'enderecoUsuario' => $this->input->post('enderecoUsuario'),
            'estadoUsuario' => $this->input->post('estadoUsuario'),
            'cidadeUsuario' => $this->input->post('cidadeUsuario'),
            'bairroUsuario' => $this->input->post('bairroUsuario'),
            'cepUsuario' => $this->input->post('cepUsuario'),
            'telefoneUsuario' => $this->input->post('telefoneUsuario'),
            'tipoConta' => 3,
            'statusConta' => true
        );
        
        $dadosFuncionario['idadeUsuario'] = calcularIdade($dadosFuncionario['dataNascimentoUsuario']);

        // SE O ID USUARIO FOR NOVO, CADASTRAR UM NOVO FUNCIONÁRIO
        if ($dadosFuncionario['idUsuario'] == "novo") {
            if ($this->UsuarioModel->mCadastrarUsuario($dadosFuncionario)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }
        // SE O ID USUARIO JÁ EXISTE, ALTERAR OS DADOS DO FUNCIONÁRIO
        else {
            if ($this->UsuarioModel->mEditarUsuario($dadosFuncionario)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA EXCLUIR FUNCIONÁRIO
    public function cExcluirFuncionario() {
        $idFuncionario = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mExcluirUsuario($idFuncionario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA BLOQUEAR FUNCIONÁRIO
    public function cBloquearFuncionario() {
        $idFuncionario = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mBloquearUsuario($idFuncionario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA DESBLOQUEAR FUNCIONÁRIO
    public function cDesbloquearFuncionario() {
        $idFuncionario = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mDesbloquearUsuario($idFuncionario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VISUALIZAR OS DADOS DO FUNCIONÁRIO
    public function cVisualizarPerfilFuncionario() {
        $idFuncionario = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mVisualizarPerfilUsuario($idFuncionario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CPF
    public function cVerificarCPF() {
        $cpfFuncionario = $this->input->post('cpfUsuario');

        $dadosFuncionario = $this->UsuarioModel->mVerificarCPF($cpfFuncionario);

        if (count($dadosFuncionario) === 1) {
            $resposta = array('existe' => true);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }
    
    // FUNÇÃO CONTROLLER PARA VERIFICAR O LOGIN
    public function cVerificarLogin() {
        $loginUsuario = $this->input->post('loginUsuario');

        $dadosFuncionario = $this->UsuarioModel->mVerificarLogin($loginUsuario);

        if (count($dadosFuncionario) === 1) {
            $resposta = array('existe' => true);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }

}