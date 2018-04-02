<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionarioController extends CI_Controller {

    // CONSTRUTOR DO FUNCIONARIO CONTROLLER
    public function __construct() {
        parent::__construct();

        // VERIFICANDO SE TEM ALGUM USUÁRIO LOGADO PARA PERMITIR O ACESSO
        if ($this->session->userdata('logado') == true) {
            $this->load->model('UsuarioModel');
            $this->load->model('FuncionarioModel');
            $this->load->model('InstrutorModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW LISTA-FUNCIONARIOS.PHP
    public function index() {
        $dadosFuncionario['nomePagina'] = "Lista de Funcionários";
        $dadosFuncionario['urlPagina'] = "lista-funcionarios";

        // PEGANDO AS INFORMAÇÕES DOS FUNCIONÁRIOS ATIVOS E BLOQUEADOS
        $dadosFuncionario['funcionariosAtivos'] = $this->FuncionarioModel->mListarFuncionariosAtivos();
        $dadosFuncionario['funcionariosBloqueados'] = $this->FuncionarioModel->mListarFuncionariosBloqueados();

        if ($this->session->userdata('tipoConta') == 4) {
            $dadosFuncionario['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosFuncionario);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-funcionarios');
        $this->load->view('sistema/templates/usuario/modals-funcionario');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-FUNCIONARIO.PHP
    public function vCadastrarEditarFuncionario($idFuncionario, $voltarPara) {
        // SE UM ID FUNCIONARIO FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO OU O CADASTRO DE UM FUNCIONARIO        
        if ($idFuncionario != "novo") {
            $dadosFuncionario = get_object_vars($this->UsuarioModel->mVisualizarUsuario($idFuncionario)[0]);
            $dadosFuncionario['nomePagina'] = "Editar Funcionário";
            $dadosFuncionario['crefUsuario'] = "";
        } else {
            $dadosFuncionario['nomePagina'] = "Cadastrar Funcionário";
            $dadosFuncionario['idUsuario'] = "novo";
            $dadosFuncionario['idAcademia'] = $this->session->userdata('idAcademia');
            $dadosFuncionario['sexoUsuario'] = "";
            $dadosFuncionario['crefUsuario'] = "";
            $dadosFuncionario['estadoUsuario'] = "";
            $dadosFuncionario['statusConta'] = true;
            $dadosFuncionario['tipoConta'] = 3;
        }

        // DEFININDO A URL PARA A QUAL DEVE VOLTAR
        if ($voltarPara == "perfil-funcionario") {
            $dadosFuncionario['voltarPara'] = $voltarPara . '/' . $idFuncionario;
        } else {
            $dadosFuncionario['voltarPara'] = $voltarPara;
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosFuncionario);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-cadastro-usuario');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-funcionario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW PERFIL-FUNCIONARIO.PHP
    public function vPerfilFuncionario($idFuncionario) {
        $dadosFuncionario['nomePagina'] = "Perfil do Funcionário";
        $dadosFuncionario['urlPagina'] = "perfil-funcionario";

        //PEGANDO AS INFORMAÇÕES DO USUÁRIO PARA MOSTRAR NO PERFIL
        $dadosFuncionario['perfilFuncionario'] = $this->UsuarioModel->mVisualizarUsuario($idFuncionario);

        if ($this->session->userdata('tipoConta') == 4) {
            $dadosFuncionario['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosFuncionario);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/usuario/modals-funcionario');
        $this->load->view('sistema/templates/usuario/js-usuario');
        $this->load->view('sistema/telas/perfis/perfil-funcionario');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
