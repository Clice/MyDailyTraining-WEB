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
            'idAcademia' => $this->input->post('idAcademia'),
            'nomeAluno' => $this->input->post('nomeAluno'),
            'dataNascimentoAluno' => $this->input->post('nomeAluno'),
            'idadeAluno' => $this->input->post('nomeAluno'),
            'cpfAluno' => $this->input->post('nomeAluno'),
            'rgAluno' => $this->input->post('nomeAluno'),
            'emailAluno' => $this->input->post('nomeAluno'),
            'sexoAluno' => $this->input->post('nomeAluno'),
            'senhaAluno' => $this->input->post('nomeAluno'),
            'telefoneAluno' => $this->input->post('nomeAluno'),
            'enderecoAluno' => $this->input->post('nomeAluno'),
            'estadoAluno' => $this->input->post('nomeAluno'),
            'cidadeAluno' => $this->input->post('nomeAluno'),
            'bairroAluno' => $this->input->post('nomeAluno'),
            'cepAluno' => $this->input->post('nomeAluno'),
            'objetivoAluno' => $this->input->post('nomeAluno'),
            'dataValidadeExame' => $this->input->post('nomeAluno'),
            'nomeResponsavelAluno' => $this->input->post('nomeAluno'),
            'telefoneResponsavelAluno' => $this->input->post('nomeAluno'),
            'statusAluno' => false,
            'cirurgias' => $this->input->post('nomeAluno'),
            'medicamentos' => $this->input->post('nomeAluno'),
            'doencasFamiliaresAluno' => $this->input->post('nomeAluno'),
            'diaPagamentoAluno' => $this->input->post('nomeAluno')
        );

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
