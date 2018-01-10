<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdministradorController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UsuarioModel');
        $this->load->model('AdministradorModel');
    }

    public function index() {
        $dadosAdministrador['nomePagina'] = 'Lista de Administradores';
        $dadosAdministrador['administradoresAtivos'] = $this->AdministradorModel->mListarAdministradoresAtivos();
        $dadosAdministrador['administradoresBloqueados'] = $this->AdministradorModel->mListarAdministradoresBloqueados();

        $this->load->view('sistema/templates/html-header', $dadosAdministrador);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-administradores');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-ADMINISTRADOR.PHP
    public function viewCadastrarEditarAdministrador() {
        // SE UM ID ADMINISTRADOR FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO OU O CADASTRO DE UM ADMINISTRADOR
        if (isset($idAdministrador)) {
            $dadosAdministrador['nomePagina'] = 'Editar Administrador';
            $dadosAdministrador['idAdministrador'] = $idAdministrador;
            $dadosAdministrador['idAcademia'] = $this->session->userdata('idAcademia');
        } else {
            $dadosAdministrador['nomePagina'] = 'Cadastrar Administrador';
            $dadosAdministrador['idAdministrador'] = "novo";
            $dadosAdministrador['idAcademia'] = $this->session->userdata('idAcademia');
            $dadosAdministrador['sexoUsuario'] = '';
        }

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE CADASTRO/EDIÇÃO DO ADMINISTRADOR  
        $this->load->view('sistema/templates/html-header', $dadosAdministrador);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-administrador');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL ADMINISTRADOR.PHP
    public function viewPerfilAdministrador($idAdministrador) {
        $dadosAdministrador['nomePagina'] = 'Perfil Administrador';
        $dadosAdministrador['perfilAdministrador'] = $this->UsuarioModel->mVisualizarPerfilUsuario($idAdministrador);

        $this->load->view('sistema/templates/html-header', $dadosAdministrador);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/perfis/perfil-administrador');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO CONTROLLER PARA CADASTRAR/EDITAR ADMINISTRADOR
    public function cCadastrarEditarAdministrador() {
        // PEGANDO OS VALORES PASSADOS PELO CADASTRAR-EDITAR-ADMINISTRADOR.PHP     
        $dadosAdministrador = array(
            'idUsuario' => $this->input->post('idUsuario'),
            'idAcademia' => $this->input->post('idAcademia'),
            'nomeUsuario' => $this->input->post('nomeUsuario'),
            'loginUsuario' => $this->input->post('loginUsuario'),
            'senhaUsuario' => base64_encode($this->input->post('senhaUsuario')),
            'emailUsuario' => $this->input->post('emailUsuario'),
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
            'tipoConta' => 2,
            'statusConta' => true
        );

        $dadosAdministrador['idadeUsuario'] = calcularIdade($dadosAdministrador['dataNascimentoUsuario']);

        // SE O ID USUARIO FOR NOVO, CADASTRAR UM NOVO ADMINISTRADOR
        if ($dadosAdministrador['idUsuario'] == "novo") {
            if ($this->UsuarioModel->mCadastrarUsuario($dadosAdministrador)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }
        // SE O ID USUARIO JÁ EXISTE, ALTERAR OS DADOS DO ADMINISTRADOR
        else {
            if ($this->UsuarioModel->mEditarUsuario($dadosAdministrador)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA EXCLUIR ADMINISTRADOR
    public function cExcluirAdministrador() {
        $idAdministrador = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mExcluirUsuario($idAdministrador)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA BLOQUEAR ADMINISTRADOR
    public function cBloquearAdministrador() {
        $idAdministrador = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mBloquearUsuario($idAdministrador)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA DESBLOQUEAR ADMINISTRADOR
    public function cDesbloquearAdministrador() {
        $idAdministrador = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mDesbloquearUsuario($idAdministrador)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VISUALIZAR OS DADOS DO ADMINISTRADOR
    public function cVisualizarPerfilAdministrador() {
        $idAdministrador = $this->input->post('idUsuario');

        if ($this->UsuarioModel->mVisualizarPerfilUsuario($idAdministrador)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CPF
    public function cVerificarCPF() {
        $cpfAdministrador = $this->input->post('cpfUsuario');

        $dadosAdministrador = $this->UsuarioModel->mVerificarCPF($cpfAdministrador);

        if (count($dadosAdministrador) === 1) {
            $resposta = array('existe' => true);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O LOGIN
    public function cVerificarLogin() {
        $loginUsuario = $this->input->post('loginUsuario');

        $dadosAdministrador = $this->AdministradorModel->mVerificarLogin($loginUsuario);

        if (count($dadosAdministrador) === 1) {
            $resposta = array('existe' => true);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }

}
