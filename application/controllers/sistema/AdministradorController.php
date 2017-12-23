<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdministradorController extends CI_Controller {

    public function __construct() {
        parent::__construct();
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
        $dadosAdministrador['nomePagina'] = 'Cadastrar Administrador';

        // SE UM ID ADMINISTRADOR FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO OU O CADASTRO DE UM ADMINISTRADOR
        if (isset($idAdministrador)) {
            $dadosAdministrador['idAdministrador'] = $idAdministrador;
            $dadosAdministrador['idAcademia'] = $this->session->userdata('idAcademia');
        } else {
            $dadosAdministrador['idAdministrador'] = "novo";
            $dadosAdministrador['idAcademia'] = $this->session->userdata('idAcademia');
        }

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE CADASTRO/EDIÇÃO DO ADMINISTRADOR  
        $this->load->view('sistema/templates/html-header', $dadosAdministrador);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-administrador');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO CONTROLLER PARA CADASTRAR/EDITAR ADMINISTRADOR
    public function cCadastrarEditarAdministrador() {

        // PEGANDO OS VALORES PASSADOS PELO CADASTRAR-EDITAR-ADMINISTRADOR.PHP     
        $dadosAdministrador = array(
            'idAdministrador' => $this->input->post('idAdministrador'),
            'idAcademia' => $this->input->post('idAcademia'),
            'nomeUsuario' => $this->input->post('nomeAdministrador'),
            'loginUsuario' => $this->input->post('loginAdministrador'),
            'senhaUsuario' => $this->input->post('senhaAdministrador'),
            'emailUsuario' => $this->input->post('emailAdministrador'),
            'cpfUsuario' => $this->input->post('cpfUsuario'),
            'rgUsuario' => $this->input->post('rgAdministrador'),
            'crefUsuario' => NULL,
            'sexoUsuario' => $this->input->post('sexoAdministrador'),
            'dataNascimentoUsuario' => $this->input->post('dataNascimentoAdministrador'),
            'idadeUsuario' => date('d-m-Y') - 'dataNascimentoAdministrador',
            'enderecoUsuario' => $this->input->post('enderecoAdministrador'),
            'estadoUsuario' => $this->input->post('estadoAdministrador'),
            'cidadeUsuario' => $this->input->post('cidadeAdministrador'),
            'bairroUsuario' => $this->input->post('bairroAdministrador'),
            'cepUsuario' => $this->input->post('cepAdministrador'),
            'telefoneUsuario' => $this->input->post('telefoneUsuario'),
            'tipoConta' => 2,
            'statusConta' => true
        );

        // SE O ID USUARIO FOR NOVO, CADASTRAR UM NOVO ADMINISTRADOR
        if ($dadosAdministrador['idAdministrador'] == "novo") {
            if ($this->AdministradorModel->mCadastrarAdministrador($dadosAdministrador)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }
        // SE O ID USUARIO JÁ EXISTE, ALTERAR OS DADOS DO ADMINISTRADOR
        else {
            if ($this->AdministradorModel->mEditarAdministrador($dadosAdministrador)) {
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

        if ($this->AdministradorModel->mExcluirAdministrador($idAdministrador)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA BLOQUEAR ADMINISTRADOR
    public function cBloquearAdministrador() {
        $idAdministrador = $this->input->post('idUsuario');

        if ($this->AdministradorModel->mBloquearAdministrador($idAdministrador)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA DESBLOQUEAR ADMINISTRADOR
    public function cDesbloquearAdministrador() {
        $idAdministrador = $this->input->post('idUsuario');

        if ($this->AdministradorModel->mDesbloquearAdministrador($idAdministrador)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VISUALIZAR OS DADOS DO ADMINISTRADOR
    public function cVisualizarPerfilAdministrador() {
        $idAdministrador = $this->input->post('idUsuario');

        if ($this->AdministradorModel->mVisualizarPerfilAdministrador($idAdministrador)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CPF
    public function cVerificarCPF() {
        $cpfAdministrador = $this->input->post('cpfUsuario');

        $dadosAdministrador = $this->AdministradorModel->mVerificarCPF($cpfAdministrador);

        if (count($dadosAdministrador) === 1) {
            $resposta = array('existe' => true);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }

}
