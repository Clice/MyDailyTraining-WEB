<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TreinoController extends CI_Controller {

    // CONSTRUTOR DO TREINO CONTROLLER
    public function __construct() {
        parent::__construct();

        // VERIFICANDO SE TEM ALGUM USUÁRIO LOGADO PARA PERMITIR O ACESSO
        if ($this->session->userdata('logado') == true) {
            $this->load->model('AlunoModel');
            $this->load->model('TreinoModel');
            $this->load->model('ExercicioTreinoModel');
            $this->load->model('InstrutorModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW CADASTRAR-TREINO.PHP
    public function vCadastrarTreino($idAluno, $idTreino) {
        $dadosTreino['perfilAluno'] = $this->AlunoModel->mVisualizarPerfilAluno(md5($idAluno));
        $dadosTreino['diasTreinoAluno'] = explode("|", $dadosTreino['perfilAluno'][0]->diasTreinoAluno);

        if ($this->cVerificarDiasTreino($idAluno, $dadosTreino['diasTreinoAluno']) != "") {
            $dadosTreino['diasTreinoAluno'] = $this->cVerificarDiasTreino($idAluno, $dadosTreino['diasTreinoAluno']);
        }

        $dadosTreino['nomePagina'] = 'Cadastrar Treino';
        $dadosTreino['idTreino'] = $idTreino;
        $dadosTreino['statusTreino'] = false;
        $dadosTreino['idAluno'] = $idAluno;
        $dadosTreino['exercicios'] = $this->ExercicioTreinoModel->mVisualizarExercicios();

        if ($this->session->userdata('tipoConta') == 4) {
            $dadosTreino['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosTreino);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-treino');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-treinos');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW EDITAR-TREINO.PHP
    public function vEditarTreino($idAluno, $idTreino) {
        $dadosTreino['perfilAluno'] = $this->AlunoModel->mVisualizarPerfilAluno(md5($idAluno));
        $diasTreinoAluno = explode("|", $dadosTreino['perfilAluno'][0]->diasTreinoAluno);
        $dadosTreino['treino'] = $this->TreinoModel->mVisualizarTreino($idTreino);
        $dias = $this->TreinoModel->mDiasAlunoTreino(md5($idAluno));

        $diasAux = $this->cDiasTreino($dias);
        $diasTreino = $this->cDiasTreino($dadosTreino['treino']);

        $aux = array_diff($diasTreinoAluno, $diasAux);

        $dadosTreino['exerciciosTreino'] = $this->ExercicioTreinoModel->mVisualizarExerciciosTreino($idTreino);
        $dadosTreino['idTreino'] = $dadosTreino['treino'][0]->idTreino;
        $dadosTreino['statusTreino'] = $dadosTreino['treino'][0]->statusTreino;
        $dadosTreino['nomePagina'] = 'Editar Treino';
        $dadosTreino['idExercicio'] = "";

        for ($i = 0; $i < count($diasTreino); $i++) {
            $dadosTreino['diasTreinoAluno'][] = $diasTreino[$i];
        }

        foreach ($aux as $valor) {
            $dadosTreino['diasTreinoAluno'][] = $valor;
        }

        for ($i = 0; $i < count($dadosTreino['exerciciosTreino']); $i++) {
            $dadosTreino['idExercicio'] = $dadosTreino['idExercicio'] . "|" . $dadosTreino['exerciciosTreino'][$i]->idExercicio;
        }

        $dadosTreino['idAluno'] = $idAluno;
        $dadosTreino['exercicios'] = $this->ExercicioTreinoModel->mVisualizarExercicios();

        if ($this->session->userdata('tipoConta') == 4) {
            $dadosTreino['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosTreino);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/editar-treino');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-treinos');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-EXERCICIOS-TREINO.PHP
    public function vCadastrarEditarExerciciosTreino($idAluno, $idTreino, $exercicios) {
        $arrayExercicios = explode("%7C", $exercicios);
        $dados['idTreino'] = $arrayExercicios[0];
        $dados['idAluno'] = $idAluno;
        $dados['urlPagina'] = $idAluno . '/' . $idTreino . '/' . $exercicios;

        // SE UM ID TRIENO FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO DE DADOS DE UM TREINO
        $dadosExerciciosTreino = $this->ExercicioTreinoModel->mVisualizarExerciciosTreino($idTreino);
        if (count($dadosExerciciosTreino) > 0) {
            for ($i = 0; $i < count($dadosExerciciosTreino); $i++) {
                $dados['exerciciosTreino'][$i] = get_object_vars($dadosExerciciosTreino[$i]);
            }

            for ($j = 1; $j < count($arrayExercicios); $j++) {
                $dados['exercicios'][$j] = get_object_vars($this->ExercicioTreinoModel->mVisualizarExerciciosSelecionados($arrayExercicios[$j])[0]);
                $dados['exercicios'][$j]['idExercicioTreino'] = "novo";
                $dados['exercicios'][$j]['serieExercicioTreino'] = "";
                $dados['exercicios'][$j]['cargaExercicioTreino'] = "";
                $dados['exercicios'][$j]['descansoExercicioTreino'] = "";
                $dados['exercicios'][$j]['repeticoesExercicioTreino'] = "";
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
                $dados['exercicios'][$i] = get_object_vars($this->ExercicioTreinoModel->mVisualizarExerciciosSelecionados($arrayExercicios[$i])[0]);
                $dados['exercicios'][$i]['idExercicioTreino'] = "novo";
                $dados['exercicios'][$i]['serieExercicioTreino'] = "";
                $dados['exercicios'][$i]['cargaExercicioTreino'] = "";
                $dados['exercicios'][$i]['descansoExercicioTreino'] = "";
                $dados['exercicios'][$i]['repeticoesExercicioTreino'] = "";
            }
        }

        $dados['nomePagina'] = 'Lista de Exercícios do Treino';
        $dados['statusTreino'] = true;

        if ($this->session->userdata('tipoConta') == 4) {
            $dados['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-exercicios-treino');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-treinos');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PERFIL-TREINO.PHP
    public function vPerfilTreino($idTreino) {
        $dados['nomePagina'] = 'Perfil Treino';

        $dados['perfilTreino'] = $this->TreinoModel->mVisualizarTreino($idTreino);
        $dados['exerciciosTreino'] = $this->ExercicioTreinoModel->mVisualizarExerciciosTreino($idTreino);

        if ($this->session->userdata('tipoConta') == 4) {
            $dados['chamadosInstrutor'] = $this->InstrutorModel->mListarChamadosInstrutores($this->session->userdata('idUsuario'));
        }

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/perfis/perfil-treino');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
        $this->load->view('sistema/templates/html-footer-treinos');
    }

    // FUNÇÃO CONTROLLER PARA CADASTRAR/EDITAR TREINO
    public function cCadastrarEditarTreino() {
        $dadosTreino = array(
            'idTreino' => $this->input->post('idTreino'),
            'idAluno' => $this->input->post('idAluno'),
            'idAcademia' => $this->session->userdata('idAcademia'),
            'nomeTreino' => $this->input->post('nomeTreino'),
            'statusTreino' => $this->input->post('statusTreino'),
            'domingo' => false,
            'segunda' => false,
            'terca' => false,
            'quarta' => false,
            'quinta' => false,
            'sexta' => false,
            'sabado' => false
        );

        $diasTreinoAluno = $this->input->post('diasTreinoAluno');

        for ($i = 0; $i < count($diasTreinoAluno); $i++) {
            if ($diasTreinoAluno[$i] == "Domingo") {
                $dadosTreino['domingo'] = true;
            }

            if ($diasTreinoAluno[$i] == "Segunda") {
                $dadosTreino['segunda'] = true;
            }

            if ($diasTreinoAluno[$i] == "Terça") {
                $dadosTreino['terca'] = true;
            }

            if ($diasTreinoAluno[$i] == "Quarta") {
                $dadosTreino['quarta'] = true;
            }

            if ($diasTreinoAluno[$i] == "Quinta") {
                $dadosTreino['quinta'] = true;
            }

            if ($diasTreinoAluno[$i] == "Sexta") {
                $dadosTreino['sexta'] = true;
            }

            if ($diasTreinoAluno[$i] == "Sábado") {
                $dadosTreino['sabado'] = true;
            }
        }

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
                $resposta = array('success' => true, 'idTreino' => md5($dados['idTreino']), 'idTreinoN' => $dados['idTreino']);
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
            'statusTreino' => $this->input->post('statusTreino')
        );

        if ($this->TreinoModel->mEditarTreino($dadosTreino)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA CADASTRAR/EDITAR OS EXERCICIOS DO TREINO
    public function cCadastrarEditarExercicioTreino() {
        $dadosExercicioTreino = array(
            'idExercicioTreino' => $this->input->post('idExercicioTreino'),
            'idExercicio' => $this->input->post('idExercicio'),
            'idTreino' => $this->input->post('idTreino'),
            'serieExercicioTreino' => $this->input->post('serieExercicioTreino'),
            'cargaExercicioTreino' => $this->input->post('cargaExercicioTreino'),
            'descansoExercicioTreino' => $this->input->post('descansoExercicioTreino'),
            'repeticoesExercicioTreino' => $this->input->post('repeticoesExercicioTreino')
        );

        // SE O ID DO EXERCICIO TREINO É NOVO
        if ($dadosExercicioTreino['idExercicioTreino'] == "novo") {
            if ($this->ExercicioTreinoModel->mCadastrarExercicioTreino($dadosExercicioTreino)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }
        // SE O ID DO EXERCÍCIO TREINO FOR DIFERENTE DE NOVO
        else {
            if ($this->ExercicioTreinoModel->mEditarExercicioTreino($dadosExercicioTreino)) {
                $resposta = array('success' => true);
            } else {
                $resposta = array('success' => false);
            }
        }

        echo json_encode($resposta);
    }

    // FUNÇÃO CONTROLLER PARA EXCLUIR TREINO
    public function cExcluirTreino() {
        $idTreino = $this->input->post('idTreino');

        if ($this->ExercicioTreinoModel->mExcluirExerciciosTreino($idTreino)) {
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

    // FUNÇÃO CONTROLLER PARA VERIFICAR DIAS DE TREINO
    public function cVerificarDiasTreino($idAluno, $diasTreinoAluno) {
        if (count($this->TreinoModel->mDiasAlunoTreino(md5($idAluno))) > 0) {
            for ($i = 0; $i < count($this->TreinoModel->mDiasAlunoTreino(md5($idAluno))); $i++) {
                $dadosTreino['diasAluno'][$i] = get_object_vars($this->TreinoModel->mDiasAlunoTreino(md5($idAluno))[$i]);
            }

            $aux = "";
            $count = 0;

            // LAÇO PARA PEGAR TODOS OS DIAS DA SEMANA QUE O ALUNO JÁ ESTÁ COM
            // UM TREINO CADASTRADO
            for ($j = 0; $j < count($dadosTreino['diasAluno']); $j++) {
                if ($dadosTreino['diasAluno'][$j]['domingo'] == true) {
                    $aux = $aux . "|Domingo";
                    $count++;
                }

                if ($dadosTreino['diasAluno'][$j]['segunda'] == true) {
                    $aux = $aux . "|Segunda";
                    $count++;
                }

                if ($dadosTreino['diasAluno'][$j]['terca'] == true) {
                    $aux = $aux . "|Terça";
                    $count++;
                }

                if ($dadosTreino['diasAluno'][$j]['quarta'] == true) {
                    $aux = $aux . "|Quarta";
                    $count++;
                }

                if ($dadosTreino['diasAluno'][$j]['quinta'] == true) {
                    $aux = $aux . "|Quinta";
                    $count++;
                }

                if ($dadosTreino['diasAluno'][$j]['sexta'] == true) {
                    $aux = $aux . "|Sexta";
                    $count++;
                }

                if ($dadosTreino['diasAluno'][$j]['sabado'] == true) {
                    $aux = $aux . "|Sábado";
                    $count++;
                }
            }

            $dias = explode("|", $aux);
            $indice = "";

            // PEGANDO OS INDICES DO VETOR CUJO DIA JÁ ESTÁ CADASTRADO
            for ($i = 1; $i < count($dias); $i++) {
                for ($j = 0; $j < count($diasTreinoAluno); $j++) {
                    if ($dias[$i] == $diasTreinoAluno[$j]) {
                        $indice = $indice . "|" . $j;
                    }
                }
            }

            $indices = explode("|", $indice);

            // APAGANDO DO VETOR OS DIAS QUE JÁ FORAM CADASTRADOS
            for ($k = 1; $k < count($indices); $k++) {
                $aux2 = $indices[$k];
                unset($diasTreinoAluno[$aux2]);
            }

            $i = 0;
            foreach ($diasTreinoAluno as $diasAux) {
                $dadosTreino['aux'][$i] = $diasAux;
                $i++;
            }
        } else {
            $dadosTreino['aux'] = "";
        }

        return $dadosTreino['aux'];
    }

    public function cDiasTreino($dias) {
        $diasAux = array();

        for ($i = 0; $i < count($dias); $i++) {
            if ($dias[$i]->domingo == true) {
                $diasAux[] = "Domingo";
            }

            if ($dias[$i]->segunda == true) {
                $diasAux[] = "Segunda";
            }

            if ($dias[$i]->terca == true) {
                $diasAux[] = "Terça";
            }

            if ($dias[$i]->quarta == true) {
                $diasAux[] = "Quarta";
            }

            if ($dias[$i]->quinta == true) {
                $diasAux[] = "Quinta";
            }

            if ($dias[$i]->sexta == true) {
                $diasAux[] = "Sexta";
            }

            if ($dias[$i]->sabado == true) {
                $diasAux[] = "Sábado";
            }
        }

        return $diasAux;
    }

}
