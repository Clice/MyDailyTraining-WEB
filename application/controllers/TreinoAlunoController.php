<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TreinoAlunoController extends CI_Controller {

    // CONSTRUTOR DO ALUNO CONTROLLER
    public function __construct() {
        parent::__construct();

        // VERIFICANDO SE TEM ALGUM USUÁRIO LOGADO PARA PERMITIR O ACESSO
        if ($this->session->userdata('logado') == true) {
            $this->load->model('AlunoModel');
            $this->load->model('TreinoModel');
            $this->load->model('ExercicioTreinoModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL-ALUNO.PHP
    public function vPerfilAluno($idAluno) {
        $dadosAluno['nomePagina'] = "Perfil do Aluno";
        $dadosAluno['urlPagina'] = "perfil-aluno";
        $dadosAluno['perfilAluno'] = $this->AlunoModel->mVisualizarPerfilAluno($idAluno);
        $dadosAluno['treinosAluno'] = $this->TreinoModel->mEncontrarTreinosAluno($idAluno);
        $dadosAluno['exerciciosTreino'] = $this->ExercicioTreinoModel->mVisualizarExerciciosTreino($idAluno);
        $dadosAluno['idAluno'] = $dadosAluno['perfilAluno'][0]->idAluno;

        $i = 0;
        foreach ($dadosAluno['treinosAluno'] as $treinosAluno) {
            for ($j = 0; $j < count($this->ExercicioTreinoModel->mVisualizarExerciciosTreino(md5($treinosAluno->idTreino))); $j++) {
                $dadosAluno['exerciciosTreinos'][$i][$j] = get_object_vars($this->ExercicioTreinoModel->mVisualizarExerciciosTreino(md5($treinosAluno->idTreino))[$j]);
            }
            $i++;
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosAluno);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/templates/aluno/modals-aluno');
        $this->load->view('sistema/templates/treino/modals-treino');
        $this->load->view('sistema/templates/treino/js-treino');
        $this->load->view('sistema/templates/aluno/js-aluno');
        $this->load->view('sistema/telas/perfis/perfil-aluno');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CPF
    public function cVerificarDiasTreinosAluno() {
        $idAluno = md5($this->input->post('idAluno'));

        $treinosAluno = $this->TreinoModel->mEncontrarTreinosAluno($idAluno);
        $perfilAluno = $this->AlunoModel->mVisualizarPerfilAluno($idAluno);

        $diasTreino = explode("|", $perfilAluno[0]->diasTreinoAluno);
        
        $count = 0;
        foreach ($treinosAluno as $treinoAluno) {
            for ($i = 0; $i < count($diasTreino); $i++) {
                if (($diasTreino[$i] == "Domingo") && ($treinoAluno->domingo == true)) {
                    $count++;
                }
                if (($diasTreino[$i] == "Segunda") && ($treinoAluno->segunda == true)) {
                    $count++;
                }
                if (($diasTreino[$i] == "Terça") && ($treinoAluno->terca == true)) {
                    $count++;
                }
                if (($diasTreino[$i] == "Quarta") && ($treinoAluno->quarta == true)) {
                    $count++;
                }
                if (($diasTreino[$i] == "Quinta") && ($treinoAluno->quinta == true)) {
                    $count++;
                }
                if (($diasTreino[$i] == "Sexta") && ($treinoAluno->sexta == true)) {
                    $count++;
                }
                if (($diasTreino[$i] == "Sábado") && ($treinoAluno->sabado == true)) {
                    $count++;
                }
            }
        }

        if (count($diasTreino) == $count) {
            $resposta = array('success' => false);
        } else {            
            $resposta = array('success' => true);
        }

        echo json_encode($resposta);
    }

}
