<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class InstrutorController extends CI_Controller {

    // CONSTRUTOR DO INSTRUTOR CONTROLLER
    public function __construct() {
        parent::__construct();

        // VERIFICANDO SE TEM ALGUM USUÁRIO LOGADO PARA PERMITIR O ACESSO
        if ($this->session->userdata('logado') == true) {
            $this->load->model('UsuarioModel');
            $this->load->model('InstrutorModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW LISTA-INSTRUTOR.PHP
    public function index() {
        $dadosInstrutor['nomePagina'] = 'Lista de Instrutores';
        $dadosInstrutor['urlPagina'] = 'lista-instrutores';
        $dadosInstrutor['voltarPagina'] = 'lista-instrutores';

        // PEGANDO AS INFORMAÇÕES DO INSTRUTORES ATIVOS E BLOQUEADOS
        $dadosInstrutor['instrutoresAtivos'] = $this->InstrutorModel->mListarInstrutoresAtivos();
        $dadosInstrutor['instrutoresBloqueados'] = $this->InstrutorModel->mListarInstrutoresBloqueados();


        if ($this->session->userdata('tipoConta') == 4) {
            $dadosInstrutor['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA 
        $this->load->view('sistema/templates/html-header', $dadosInstrutor);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-instrutores');
        $this->load->view('sistema/templates/usuario/modals-instrutor');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-usuarios');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-INSTRUTOR.PHP
    public function vCadastrarInstrutor($idInstrutor) {
        $dadosInstrutor['nomePagina'] = "Cadastrar Instrutor";
        $dadosInstrutor['idUsuario'] = "novo";
        $dadosInstrutor['idAcademia'] = $this->session->userdata('idAcademia');
        $dadosInstrutor['sexoUsuario'] = "";
        $dadosInstrutor['crefUsuario'] = "";
        $dadosInstrutor['estadoUsuario'] = "";
        $dadosInstrutor['statusConta'] = true;
        $dadosInstrutor['tipoConta'] = 4;

        $dadosInstrutor['voltarPara'] = 'lista-instrutores';

        if ($this->session->userdata('tipoConta') == 4) {
            $dadosInstrutor['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA 
        $this->load->view('sistema/templates/html-header', $dadosInstrutor);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-cadastro-usuario');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-instrutor');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-cadastros');
        $this->load->view('sistema/templates/html-footer-usuarios');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-INSTRUTOR.PHP
    public function vEditarInstrutor($idInstrutor, $voltarPara) {
        $dadosInstrutor = get_object_vars($this->UsuarioModel->mVisualizarUsuario($idInstrutor)[0]);
        $dadosInstrutor['nomePagina'] = "Editar Instrutor";

        // DEFININDO A URL PARA A QUAL DEVE VOLTAR
        if ($voltarPara == "perfil-instrutor") {
            $dadosInstrutor['voltarPara'] = $voltarPara . '/' . $idInstrutor;
        } else {
            $dadosInstrutor['voltarPara'] = $voltarPara;
        }

        if ($this->session->userdata('tipoConta') == 4) {
            $dadosInstrutor['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA 
        $this->load->view('sistema/templates/html-header', $dadosInstrutor);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-cadastro-usuario');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-instrutor');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-cadastros');
        $this->load->view('sistema/templates/html-footer-usuarios');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW PERFIL-INSTRUTOR.PHP
    public function vPerfilInstrutor($idInstrutor) {
        $dadosInstrutor['nomePagina'] = "Perfil do Instrutor";
        $dadosInstrutor['urlPagina'] = "perfil-instrutor/" . $idInstrutor;
        $dadosInstrutor['voltarPagina'] = "lista-instrutores";

        // PEGANDO AS INFORMAÇÕES DO INSTRUTOR PARA MOSTRAR NO PERFIL
        $dadosInstrutor['perfilInstrutor'] = $this->UsuarioModel->mVisualizarUsuario($idInstrutor);
        $dadosInstrutor['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($idInstrutor);

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosInstrutor);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-instrutor');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/perfis/perfil-instrutor');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-usuarios');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW LISTA-CHAMADOS.PHP
    public function vListaChamados($idInstrutor) {
        $dadosInstrutor['nomePagina'] = "Lista de Chamados";
        $dadosInstrutor['urlPagina'] = "lista-chamados/" . md5($idInstrutor);

        // PEGANDO AS INFORMAÇÕES DO INSTRUTOR PARA OS CHAMADOS
        $dadosInstrutor['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($idInstrutor);

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosInstrutor);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-chamados');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-usuarios');
    }

}
