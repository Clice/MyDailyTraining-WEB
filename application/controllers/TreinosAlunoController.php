<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TreinosAlunoController extends CI_Controller {

    // CONSTRUTOR DO ALUNO CONTROLLER
    public function __construct() {
        parent::__construct();

        if ($this->session->userdata('logado') == true) {
            $this->load->model('AlunoModel');
            $this->load->model('TreinoModel');
            $this->load->model('TreinosAlunoModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-ALUNOS.PHP
    public function vDefinirTreinoAluno($idAluno, $idTreino) {
        $dadosAluno['nomePagina'] = "Definir Treino do Aluno";
        $dadosAluno['nomePagina2'] = "Definir Treino do(a) ";
        $dadosAluno['urlPagina'] = "definir-treino-aluno";
        $dadosAluno['treinos'] = $this->TreinoModel->mListarTreinos();
        $dadosAluno['perfilAluno'] = $this->AlunoModel->mVisualizarPerfilAluno(md5($idAluno));
        $dadosAluno['diasTreinoAluno'] = explode("|", $dadosAluno['perfilAluno'][0]->diasTreinoAluno);
        $dadosAluno['diasTreinoAluno2'] = $dadosAluno['perfilAluno'][0]->diasTreinoAluno;
        $dadosAluno['idAluno'] = $idAluno;

        if ($idTreino != "novo") {
            $aux = explode("%7C", $idTreino);
            $dadosAluno['idTreinoAluno'] = $aux[0];
            $dadosAluno['idsTreino'] = "";

            for ($i = 1; $i < count($aux); $i++) {
                $dadosAluno['idsTreino'] += "|" + $aux[$i];
            }
        } else {
            $dadosAluno['idTreinoAluno'] = "novo";
            $dadosAluno['idsTreino'] = "novo";
        }

        $i = 0;
        foreach ($dadosAluno['treinos'] as $treino) {
            for ($j = 0; $j < count($this->TreinoModel->mVisualizarExerciciosTreino(md5($treino->idTreino))); $j++) {
                $dadosAluno['exerciciosTreinos'][$i][$j] = get_object_vars($this->TreinoModel->mVisualizarExerciciosTreino(md5($treino->idTreino))[$j]);
            }
            $i++;
        }

        $this->load->view('sistema/templates/html-header', $dadosAluno);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/definir-treino-aluno');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function cDefinirTreinoAluno() {
        $dadosTreinoAluno = array(
            'idTreino' => $this->input->post('idTreino'),
            'idAluno' => $this->input->post('idAluno'),
            'diasTreinoAluno' => $this->input->post('diasTreinoAluno')
        );

        $dadosTreinoAluno['diasTreinoAluno'] = implode("|", $dadosTreinoAluno['diasTreinoAluno']);

        if ($this->TreinosAlunoModel->mDefinirTreinoAluno($dadosTreinoAluno)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

}
