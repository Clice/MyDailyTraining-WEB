<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdministradorController extends CI_Controller {

    // CONSTRUTOR DO ADMINISTRADOR CONTROLLER
    public function __construct() {
        parent::__construct();

        // VERIFICANDO SE TEM ALGUM USUÁRIO LOGADO PARA PERMITIR O ACESSO
        if ($this->session->userdata('logado') == true) {
            $this->load->model('UsuarioModel');
            $this->load->model('AdministradorModel');
            $this->load->model('InstrutorModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW LISTA-ADMINISTRADORES.PHP PARA EQUALTECH
    // TODOS OS USUÁRIOS SERÃO MOSTRADOR
    public function index() {
        // PEGANDO AS INFORMAÇÕES NECESSÁRIAS
        $dadosAdministrador['nomePagina'] = "Lista de Administradores";
        $dadosAdministrador['voltarPagina'] = "lista-administradores";
        $dadosAdministrador['voltarPara'] = "lista-administradores";
        $dadosAdministrador['urlPagina'] = "lista-administradores";

        // PEGANDO OS DADOS DOS ADMINISTRADORES ATIVOS E BLOQUEADOS
        $dadosAdministrador['administradoresAtivos'] = $this->AdministradorModel->mListarAdministradoresAtivos(0);
        $dadosAdministrador['administradoresBloqueados'] = $this->AdministradorModel->mListarAdministradoresBloqueados(0);

        // CARREGANDO AS VIEWS DA PÁGINA 
        $this->load->view('sistema/templates/html-header', $dadosAdministrador);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-administradores');
        $this->load->view('sistema/templates/usuario/modals-administrador');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-usuarios');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW LISTA-ADMINISTRADORES.PHP PARA OS USUÁRIOS
    // SOMENTE OS USUÁRIOS DA ACADEMIA SERÃO MOSTRADOS
    public function vListaAdministradoresAcademia() {
        // PEGANDO AS INFORMAÇÕES NECESSÁRIAS
        $dadosAdministrador['nomePagina'] = "Lista de Administradores da Academia";
        $dadosAdministrador['voltarPagina'] = "lista-administradores-academia";
        $dadosAdministrador['voltarPara'] = "lista-administradores-academia";
        $dadosAdministrador['urlPagina'] = "lista-administradores-academia";

        // PEGANDO OS DADOS DOS ADMINISTRADORES ATIVOS E NÃO ATIVOS
        $dadosAdministrador['administradoresAtivos'] = $this->AdministradorModel->mListarAdministradoresAtivos($this->session->userdata('idAcademia'));
        $dadosAdministrador['administradoresBloqueados'] = $this->AdministradorModel->mListarAdministradoresBloqueados($this->session->userdata('idAcademia'));

        if ($this->session->userdata('tipoConta') == 4) {
            $dadosAdministrador['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosAdministrador);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-administradores');
        $this->load->view('sistema/templates/usuario/modals-administrador');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-usuarios');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-ADMINISTRADOR.PHP
    public function vCadastrarEditarAdministrador($idAdministrador, $idAcademia, $voltarPara) {
        // SE UM ID ADMINISTRADOR FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO OU O CADASTRO DE UM ADMINISTRADOR
        if ($idAdministrador != "novo") {
            // PEGANDO OS DADOS DO ADMINISTRADOR PARA EDITAR
            $dadosAdministrador = get_object_vars($this->UsuarioModel->mVisualizarUsuario($idAdministrador)[0]);
            $dadosAdministrador['nomePagina'] = "Editar Administrador";
            $dadosAdministrador['crefUsuario'] = "";
        } else {
            $dadosAdministrador['nomePagina'] = "Cadastrar Administrador";
            $dadosAdministrador['idUsuario'] = "novo";
            $dadosAdministrador['idAcademia'] = $idAcademia;
            $dadosAdministrador['sexoUsuario'] = "";
            $dadosAdministrador['crefUsuario'] = "";
            $dadosAdministrador['estadoUsuario'] = "";
            $dadosAdministrador['statusConta'] = true;
            $dadosAdministrador['tipoConta'] = 2;
        }

        // DEFININDO A URL PARA A QUAL DEVE VOLTAR
        if ($voltarPara == "perfil-administrador") {
            $dadosAdministrador['voltarPara'] = $voltarPara . '/' . $idAdministrador;
        } else if ($voltarPara == "perfil-academia") {
            $dadosAdministrador['voltarPara'] = $voltarPara . '/' . md5($idAcademia);
        } else {
            $dadosAdministrador['voltarPara'] = $voltarPara;
        }

        // CARREGANDO AS VIEWS DA PÁGINA 
        $this->load->view('sistema/templates/html-header', $dadosAdministrador);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-cadastro-usuario');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-administrador');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-cadastros');
        $this->load->view('sistema/templates/html-footer-usuarios');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW PERFIL ADMINISTRADOR.PHP
    public function vPerfilAdministrador($idAdministrador) {
        $dadosAdministrador['nomePagina'] = "Perfil Administrador";
        $dadosAdministrador['urlPagina'] = "perfil-administrador/" . $idAdministrador;
        $dadosAdministrador['perfilAdministrador'] = $this->UsuarioModel->mVisualizarUsuario($idAdministrador);

        if ($this->session->userdata('tipoConta') == 4) {
            $dadosAdministrador['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // DEFININDO A URL PARA A QUAL DEVE VOLTAR
        if ($this->session->userdata('tipoConta') > 1) {
            $dadosAdministrador['voltarPagina'] = "lista-administradores-academia";
        } else {
            $dadosAdministrador['voltarPagina'] = "lista-administradores";
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosAdministrador);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-administrador');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/perfis/perfil-administrador');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-usuarios');
    }

}
