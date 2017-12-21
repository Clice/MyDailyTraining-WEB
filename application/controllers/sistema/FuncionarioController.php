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
        $dadosFuncionario['nomePagina'] = 'Cadastrar Funcionário';
        $this->load->view('sistema/templates/html-header', $dadosFuncionario);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-funcionario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO CONTROLLER PARA CADASTRAR/EDITAR FUNCIONÁRIO
    public function cCadastrarEditarFuncionario() {

        // PEGANDO OS VALORES PASSADOS PELO CADASTRAR-EDITAR-FUNCIONARIO.PHP     
        $dadosFuncionario = array(
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
            'tipoConta' => 3,
            'statusConta' => true
        );

        // SE O ID USUARIO FOR NOVO, CADASTRAR UM NOVO FUNCIONÁRIO
        if ($dadosFuncionario['idUsuario'] == "novo") {
            if ($this->FuncionarioModel->mCadastrarFuncionario($dadosFuncionario)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }
        // SE O ID USUARIO JÁ EXISTE, ALTERAR OS DADOS DO FUNCIONÁRIO
        else {
            if ($this->FuncionarioModel->mEditarFuncionario($dadosFuncionario)) {
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

        if ($this->FuncionarioModel->mExcluirFuncionario($idFuncionario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA BLOQUEAR FUNCIONÁRIO
    public function cBloquearFuncionario() {
        $idFuncionario = $this->input->post('idUsuario');

        if ($this->FuncionarioModel->mBloquearFuncionario($idFuncionario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA DESBLOQUEAR FUNCIONÁRIO
    public function cDesbloquearFuncionario() {
        $idFuncionario = $this->input->post('idUsuario');

        if ($this->FuncionarioModel->mDesbloquearFuncionario($idFuncionario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VISUALIZAR OS DADOS DO FUNCIONÁRIO
    public function cVisualizarPerfilFuncionario() {
        $idFuncionario = $this->input->post('idUsuario');

        if ($this->FuncionarioModel->mVisualizarPerfilFuncionario($idFuncionario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CPF
    public function cVerificarCPF() {
        $cpfFuncionario = $this->input->post('cpfUsuario');

        $dadosFuncionario = $this->FuncionarioModel->mVerificarCPF($cpfFuncionario);

        if (count($dadosFuncionario) === 1) {
            $resposta = array('existe' => true);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }
}