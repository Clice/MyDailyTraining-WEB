<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ExercicioTreinoController extends CI_Controller {

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

    // FUNÇÃO CONTROLLER PARA VERIFICAR O CPF
    public function cVisualizarExercicio() {
        $idTreino = $this->input->post('idTreino');
        $idExercicio = $this->input->post('idExercicio');

        if ($this->ExercicioTreinoModel->mVisualizarExerciciosSelecionados($idExercicio)) {
            $dadosExercicio = $this->ExercicioTreinoModel->mVisualizarExerciciosSelecionados($idExercicio);

            if (count($this->ExercicioTreinoModel->mVisualizarExercicioTreino($idTreino, $idExercicio)) > 0) {
                $dadosExercicioTreino = $this->ExercicioTreinoModel->mVisualizarExercicioTreino($idTreino, $idExercicio);
                $resposta = array(
                    'success' => true,
                    'idExercicioTreino' => true,
                    'nomeExercicio' => $dadosExercicio[0]->nomeExercicio,
                    'serieExercicioTreino' => $dadosExercicioTreino[0]->serieExercicioTreino,
                    'repeticoesExercicioTreino' => $dadosExercicioTreino[0]->repeticoesExercicioTreino,
                    'cargaExercicioTreino' => $dadosExercicioTreino[0]->cargaExercicioTreino,
                    'descansoExercicioTreino' => $dadosExercicioTreino[0]->descansoExercicioTreino
                );
            } else {
                $resposta = array(
                    'success' => true,
                    'idExercicioTreino' => false,
                    'nomeExercicio' => $dadosExercicio[0]->nomeExercicio
                );
            }
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

}
