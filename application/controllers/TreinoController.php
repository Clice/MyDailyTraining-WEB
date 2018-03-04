<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TreinoController extends CI_Controller {

    // CONSTRUTOR DO TREINO CONTROLLER
    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('logado') == true) {
            $this->load->model('TreinoModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-TRIENOS.PHP
    public function index() {
        $dadosTreino['nomePagina'] = 'Lista de Treinos';
        $dadosTreino['urlPagina'] = "lista-treinos";
        $dadosTreino['treinos'] = $this->TreinoModel->mListarTreinos();

        $this->load->view('sistema/templates/html-header', $dadosTreino);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-treinos');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/treino/modals-treino');
        $this->load->view('sistema/templates/treino/js-treino');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-TREINO.PHP
    public function vCadastrarEditarTreino($idTreino) {
        // SE UM ID TRIENO FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO DE DADOS DE UM TREINO
        if ($idTreino != "novo") {
            $dadosTreino['nomePagina'] = 'Editar Academia';
        }
        // PARA REALIZAR O CADASTRO DE UM TREINO
        else {
            $dadosTreino['nomePagina'] = 'Cadastrar Treino';
            $dadosTreino['idTreino'] = $idTreino;
            $dadosTreino['statusTreino'] = false;
        }

        $dadosTreino['exercicios'] = $this->TreinoModel->mVisualizarExercicios();

        $this->load->view('sistema/templates/html-header', $dadosTreino);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-treino');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-EXERCICIOS-TREINO.PHP
    public function vCadastrarEditarExerciciosTreino($idTreino, $exercicios) {
        $arrayExercicios = explode("%7C", $exercicios);
        $dados['idTreino'] = $arrayExercicios[0];

        // SE UM ID TRIENO FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO DE DADOS DE UM TREINO
        $dadosExerciciosTreino = $this->TreinoModel->mVisualizarExerciciosTreino($idTreino);
        if (count($dadosExerciciosTreino) > 0) {
            for ($i = 0; $i < count($dadosExerciciosTreino); $i++) {
                $dados['exerciciosTreino'][$i] = get_object_vars($dadosExerciciosTreino[$i]);
            }

            for ($j = 1; $j < count($arrayExercicios); $j++) {
                $dados['exercicios'][$j] = get_object_vars($this->TreinoModel->mVisualizarExerciciosSelecionados($arrayExercicios[$j])[0]);
                $dados['exercicios'][$j]['idExercicioTreino'] = "novo";
                $dados['exercicios'][$j]['serieExercicioTreino'] = "";
                $dados['exercicios'][$j]['cargaExercicioTreino'] = "";
                $dados['exercicios'][$j]['tempoExercicioTreino'] = "";
                $dados['exercicios'][$j]['descansoExercicioTreino'] = "";
                $dados['exercicios'][$j]['repeticoesExercicioTreino'] = "";
                $dados['exercicios'][$j]['velocidadeExercicioTreino'] = "";
            }

            for ($i = 0; $i < count($dadosExerciciosTreino); $i++) {
                for ($j = 1; $j < count($arrayExercicios); $j++) {
                    if ($dados['exerciciosTreino'][$i]['idExercicio'] == $arrayExercicios[$j]) {
                        $dados['exercicios'][$j] = $dados['exerciciosTreino'][$i];
                    }
                }
            }
        } else {
            for ($i = 1; $i < count($arrayExercicios); $i++) {
                $dados['exercicios'][$i] = get_object_vars($this->TreinoModel->mVisualizarExerciciosSelecionados($arrayExercicios[$i])[0]);
                $dados['exercicios'][$i]['idExercicioTreino'] = "novo";
                $dados['exercicios'][$i]['serieExercicioTreino'] = "";
                $dados['exercicios'][$i]['cargaExercicioTreino'] = "";
                $dados['exercicios'][$i]['tempoExercicioTreino'] = "";
                $dados['exercicios'][$i]['descansoExercicioTreino'] = "";
                $dados['exercicios'][$i]['repeticoesExercicioTreino'] = "";
                $dados['exercicios'][$i]['velocidadeExercicioTreino'] = "";
            }
        }

        $dados['nomePagina'] = 'Lista de Exercícios do Treino';
        $dados['statusTreino'] = true;

        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-exercicios-treino');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO CONTROLLER PARA CADASTRAR/EDITAR TREINO
    public function cCadastrarEditarTreino() {
        $dadosTreino = array(
            'idTreino' => $this->input->post('idTreino'),
            'idUsuario' => $this->session->userdata('idUsuario'),
            'idAcademia' => $this->session->userdata('idAcademia'),
            'nomeTreino' => $this->input->post('nomeTreino'),
            'statusTreino' => $this->input->post('statusTreino')
        );

        date_default_timezone_set('America/Fortaleza');
        $dadosTreino['dataTreino'] = date('Y-m-d');
        $dadosTreino['horaTreino'] = date('H:i:s');

        if ($dadosTreino['idTreino'] == "novo") {
            if ($this->TreinoModel->mCadastrarTreino($dadosTreino)) {
                $dados['exercicios'] = $this->input->post('exerciciosSelecionados');
                $dados['treino'] = get_object_vars($this->TreinoModel->mEncontrarTreino($dadosTreino)[0]);
                $dados['idTreino'] = $dados['treino']['idTreino'];
                $resposta = array('success' => true, 'idTreino' => md5($dados['idTreino']), 'idTreinoN' => $dados['idTreino']);
            } else {
                $resposta = array('success' => false);
            }
        } else {
            if ($this->TreinoModel->mEditarTreino($dadosTreino)) {
                $dados['treino'] = get_object_vars($this->TreinoModel->mEncontrarTreino($dadosTreino)[0]);
                $dados['idTreino'] = $dados['treino']['idTreino'];
            } else {
                $resposta = array('success' => false);
            }
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA EDITAR O TREINO APÓS O CADASTRO DOS EXERCÍCIOS
    public function cEditarTreino() {
        $dadosTreino = array(
            'idTreino' => $this->input->post('idTreino'),
            'observacoesTreino' => $this->input->post('observacoesTreino'),
            'statusTreino' => $this->input->post('statusTreino')
        );

        if ($this->TreinoModel->mEditarTreino($dadosTreino)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    public function cCadastrarEditarExercicioTreino() {
        $dadosExercicioTreino = array(
            'idExercicioTreino' => $this->input->post('idExercicioTreino'),
            'idExercicio' => $this->input->post('idExercicio'),
            'idTreino' => $this->input->post('idTreino'),
            'serieExercicioTreino' => $this->input->post('serieExercicioTreino'),
            'cargaExercicioTreino' => $this->input->post('cargaExercicioTreino'),
            'tempoExercicioTreino' => $this->input->post('tempoExercicioTreino'),
            'descansoExercicioTreino' => $this->input->post('descansoExercicioTreino'),
            'repeticoesExercicioTreino' => $this->input->post('repeticoesExercicioTreino'),
            'velocidadeExercicioTreino' => $this->input->post('velocidadeExercicioTreino')
        );

        // SE O ID DO EXERCICIO TREINO É NOVO
        if ($dadosExercicioTreino['idExercicioTreino'] == "novo") {
            if ($this->TreinoModel->mCadastrarExercicioTreino($dadosExercicioTreino)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }
        // SE O ID DO EXERCÍCIO TREINO FOR DIFERENTE DE NOVO
        else {
            if ($this->TreinoModel->mEditarTreino($dadosExercicioTreino)) {
                $dados['treino'] = get_object_vars($this->TreinoModel->mEncontrarTreino($dadosExercicioTreino)[0]);
                $dados['idTreino'] = $dados['treino']['idTreino'];
            } else {
                $resposta = array('success' => false);
            }
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA EXCLUIR TREINO
    public function cExcluirTreino() {
        $idTreino = $this->input->post('idTreino');

        if ($this->TreinoModel->mExcluirExerciciosTreino($idTreino)) {
            if ($this->TreinoModel->mExcluirTreino($idTreino)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

}
