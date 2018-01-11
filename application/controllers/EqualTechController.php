<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EqualTechController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UsuarioModel');
        $this->load->model('EqualTechModel');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LOGIN-EQUALTECH.PHP
    public function index() {
        $this->load->view('apresentacao/login-equaltech');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW EDITAR-EQUALTECH.PHP
    public function viewEditarEqualTech($idEqualTech) {
        // PARA REALIZAR A EDIÇÃO DE UM EQUALTECH
        if (isset($idEqualTech)) {
            $dadosEqualTech['nomePagina'] = 'Editar EqualTech';
            $dadosEqualTech['idEqualTech'] = $idEqualTech;
        }

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE EDIÇÃO DO EQUALTECH
        $this->load->view('sistema/templates/html-header', $dadosEqualTech);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/editar-equaltech');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL-EQUALTECH.PHP
    public function viewPerfilEqualTech($idEqualTech) {
        $dados['nomePagina'] = 'Perfil EqualTech';
        $dados['perfilEqualTech'] = $this->EqualTechModel->mVisualizarPerfilEqualTech($idEqualTech);

        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/perfis/perfil-equaltech');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW RECUPERAR-SENHA.PHP
    public function viewRecuperarSenha() {
        $this->load->view('apresentacao/recuperar-senha');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-EQUALTECH.PHP
    public function viewListaEqualTech() {
        $dados['nomePagina'] = 'Lista de EqualTech';
        $dados['equaltechs'] = $this->EqualTechModel->mListarEqualTechs();

        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-equaltech');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE VERIFICAÇÃO DAS INFORMAÇÕES PASSADAS PARA REALIZAR O LOGIN NO SISTEMA
    public function cLogarEqualTech() {
        // PEGANDO AS INFORMAÇÕES DE LOGIN E SENHA PASSADAS E COLOCANDO EM UM VETOR
        $dadosLogin = array(
            'loginUsuario' => $this->input->post('loginUsuario'),
            'senhaUsuario' => $this->input->post('senhaUsuario')
        );

        // PASSANDO AS INFORMAÇÕES PARA A FUNÇÃO QUE FARÁ A VERIFICAÇÃO NO BANCO DE DADOS
        $dadosEqualTech = $this->EqualTechModel->mLogarEqualTech($dadosLogin);

        // CONDIÇÕES DAS INFORMAÇÕES PASSADAS PELO USUÁRIO PARA REALIZAR O LOGIN OU NÃO
        // SE HOUVER ALGUM USUÁRIO COM O LOGIN E SENHA PASSADOS NA TABELA EQUALTECH
        if (count($dadosEqualTech) >= 1) {
            // PASSANDO AS INFORMAÇÕES DO USUÁRIO PARA UM VETOR
            $dadosUsuarioLogado = get_object_vars($dadosEqualTech[0]);
            $this->session->set_userdata($dadosUsuarioLogado);
            $resposta = array('success' => true);
        }
        // SE NÃO HOUVER NENHUM USUÁRIO COM AS INFORMAÇÕES PASSADAS
        else {
            $resposta = array('success' => false);
        }

        // RETORNANDO AS FUNÇÃO JAVASCRIPT AS INFORMAÇÕES
        echo json_encode($resposta);
    }

    public function cProcurarCPF() {
        $cpfUsuario = $this->input->post('cpfUsuario');

        if ($this->UsuarioModel->mProcurarCPF($cpfUsuario)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

}
