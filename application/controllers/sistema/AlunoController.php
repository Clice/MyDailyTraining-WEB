<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AlunoController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AlunoModel');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-ALUNOS.PHP
    public function index() {
        $dadosAluno['nomePagina'] = 'Lista de Alunos';
        $dadosAluno['alunosAtivos'] = $this->AlunoModel->mListarAlunosAtivos();
        $dadosAluno['alunosBloqueados'] = $this->AlunoModel->mListarAlunosBloqueados();

        $this->load->view('sistema/templates/html-header', $dadosAluno);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-alunos');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function viewCadastrarEditarAluno() {
        $dadosAluno['nomePagina'] = 'Cadastrar Aluno';

        // SE UM ID ADMINISTRADOR FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO OU O CADASTRO DE UM ADMINISTRADOR
        if (isset($idAluno)) {
            $dadosAluno['idAluno'] = $idAluno;
            $dadosAluno['idAcademia'] = $this->session->userdata('idAcademia');
            // $dadosAdministrador['sexoUsuario'] = $this->session->userdata('idAcademia');
        } else {
            $dadosAluno['idAluno'] = "novo";
            $dadosAluno['idAcademia'] = $this->session->userdata('idAcademia');
            $dadosAluno['sexoUsuario'] = '';
        }

        $this->load->view('sistema/templates/html-header', $dadosAluno);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-aluno');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO CONTROLLER PARA CADASTRAR/EDITAR ALUNO
    public function cCadastrarEditarAluno() {
        // PEGANDO OS VALORES PASSADOS PELO CADASTRAR-EDITAR-ALUNO.PHP     
        $dadosAluno = array(
            'idAluno' => $this->input->post('idUsuario'),
            'idAcademia' => $this->input->post('idAcademia'),
            'nomeAluno' => $this->input->post('nomeUsuario'),
            'dataNascimentoAluno' => $this->input->post('dataNascimentoUsuario'),
            'cpfAluno' => $this->input->post('cpfUsuario'),
            'rgAluno' => $this->input->post('rgUsuario'),
            'emailAluno' => $this->input->post('emailUsuario'),
            'sexoAluno' => $this->input->post('sexoUsuario'),
            'senhaAluno' => $this->input->post('cpfUsuario'),
            'telefoneAluno' => $this->input->post('telefoneUsuario'),
            'enderecoAluno' => $this->input->post('enderecoUsuario'),
            'estadoAluno' => $this->input->post('estadoUsuario'),
            'cidadeAluno' => $this->input->post('cidadeUsuario'),
            'bairroAluno' => $this->input->post('bairroUsuario'),
            'cepAluno' => $this->input->post('cepUsuario'),
            'objetivoAluno' => $this->input->post('objetivoAluno'),
            'dataValidadeExame' => $this->input->post('dataValidadeExame'),
            'nomeResponsavelAluno' => $this->input->post('nomeResponsavelUsuario'),
            'telefoneResponsavelAluno' => $this->input->post('telefoneResponsavelUsuario'),
            'statusAluno' => false,
            'cirurgias' => $this->input->post('cirurgiasUsuario'),
            'medicamentos' => $this->input->post('medicamentosUsuario'),
            'doencasFamiliaresAluno' => $this->input->post('doencasFamiliaresUsuario'),
            'diaPagamentoAluno' => $this->input->post('diaPagamentoAluno')
        );
        
        $dadosAluno['idadeAluno'] = calcularIdade($dadosAluno['dataNascimentoAluno']);

        // SE O IDALUNO FOR NOVO, CADASTRAR UM NOVO ALUNO
        if ($dadosAluno['idAluno'] == "novo") {
            if ($this->AlunoModel->mCadastrarAluno($dadosAluno)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }
        // SE O IDALUNO JÁ EXISTE, ALTERAR OS DADOS DO ALUNO
        else {
            if ($this->AlunoModel->mEditarAluno($dadosAluno)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA EXCLUIR ALUNO
    public function cExcluirAluno() {
        $idAluno = $this->input->post('idAluno');

        if ($this->AlunoModel->mExcluirAluno($idAluno)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA BLOQUEAR ALUNO
    public function cBloquearAluno() {
        $idAluno = $this->input->post('idAluno');

        if ($this->AlunoModel->mBloquearAluno($idAluno)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA DESBLOQUEAR ALUNO
    public function cDesbloquearAluno() {
        $idAluno = $this->input->post('idAluno');

        if ($this->AlunoModel->mDesbloquearAluno($idAluno)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VISUALIZAR OS DADOS DO ALUNO
    public function cVisualizarPerfilAluno() {
        $idAluno = $this->input->post('idAluno');

        if ($this->AlunoModel->mVisualizarPerfilAluno($idAluno)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CPF
    public function cVerificarCPF() {
        $cpfAluno = $this->input->post('cpfAluno');

        $dadosAluno = $this->AlunoModel->mVerificarCPF($cpfAluno);

        if (count($dadosAluno) === 1) {
            $resposta = array('existe' => true);
        } else {
            $resposta = array('existe' => false);
        }

        echo json_encode($resposta);
    }
}
