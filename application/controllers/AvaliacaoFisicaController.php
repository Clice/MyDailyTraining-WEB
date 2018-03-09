<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AvaliacaoFisicaController extends CI_Controller {

    // CONSTRUTOR DO AVALIACAO FISICA CONTROLLER
    public function __construct() {
        parent::__construct();

        // VERIFICANDO SE TEM ALGUM USUÁRIO LOGADO PARA PERMITIR O ACESSO
        if ($this->session->userdata('logado') == true) {
            $this->load->model('AvaliacaoFisicaModel');
            $this->load->model('AlunoModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

    // FUNÇÃO PARA CARREGAMENTO DA VIEW CADASTRAR-AVALIAÇÃO-FÍSICA.PHP
    public function vCadastrarAvaliacaoFisica($idAluno) {
        $dadosAluno['nomePagina'] = "Cadastrar Avaliação Física do Aluno";
        $dadosAluno['dataDia'] = formatarData(date('Y-m-d'));
        $dadosAluno['idUsuario'] = $this->session->userdata('idUsuario');

        // PEGANDO OS DADOS DO ALUNO PARA A AVALIAÇÃO FÍSICA
        $dadosAluno['dadosAluno'] = $this->AlunoModel->mVisualizarPerfilAluno($idAluno);

        // CARREGANDO AS VIEWS DA PÁGINA
        $this->load->view('sistema/templates/html-header', $dadosAluno);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-avaliacao-fisica');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO CONTROLLER PARA CADASTRAR A AVALIAÇÃO FÍSICA
    public function cCadastrarAvaliacaoFisica() {
        // PEGANDO OS VALORES PASSADOS PELO CADASTRAR-EDITAR-ALUNO.PHP     
        $dadosAvaliacao = array(
            'idAluno' => $this->input->post('idAluno'),
            'idUsuario' => $this->input->post('idUsuario'),
            'dataAvaliacaoFisica' => date('Y-m-d'),
            'pesoAluno' => str_replace(",", ".", $this->input->post('pesoAluno')),
            'estaturaAluno' => str_replace(",", ".", $this->input->post('estaturaAluno')),
            'ombroAluno' => str_replace(",", ".", $this->input->post('ombroAluno')),
            'toraxInspiradoAluno' => str_replace(",", ".", $this->input->post('toraxInspiradoAluno')),
            'toraxRelaxadoAluno' => str_replace(",", ".", $this->input->post('toraxRelaxadoAluno')),
            'bracoRelaxadoEsqAluno' => str_replace(",", ".", $this->input->post('bracoEsquerdoReladoAluno')),
            'bracoRelaxadoDirAluno' => str_replace(",", ".", $this->input->post('bracoDireitoReladoAluno')),
            'antebracoEsqAluno' => str_replace(",", ".", $this->input->post('antebracoEsquerdoAluno')),
            'antebracoDirAluno' => str_replace(",", ".", $this->input->post('antebracoDireitoAluno')),
            'bracoContraidoEsqAluno' => str_replace(",", ".", $this->input->post('bracoEsquerdoContraidoAluno')),
            'bracoContraidoDirAluno' => str_replace(",", ".", $this->input->post('bracoDireitoContraidoAluno')),
            'cinturaAluno' => str_replace(",", ".", $this->input->post('cinturaAluno')),
            'abdomenAluno' => str_replace(",", ".", $this->input->post('abdomenAluno')),
            'quadrilAluno' => str_replace(",", ".", $this->input->post('quadrilAluno')),
            'coxaEsqAluno' => str_replace(",", ".", $this->input->post('coxaEsquerdoAluno')),
            'coxaDirAluno' => str_replace(",", ".", $this->input->post('coxaDireitaAluno')),
            'panturrilhaEsqAluno' => str_replace(",", ".", $this->input->post('panturrilhaEsquerdaAluno')),
            'panturrilhaDirAluno' => str_replace(",", ".", $this->input->post('panturrilhaDireitaAluno')),
            'pernaEsqAluno' => str_replace(",", ".", $this->input->post('pernaEsquerdaAluno')),
            'pernaDirAluno' => str_replace(",", ".", $this->input->post('pernaDireitaAluno')),
            'observacoes' => $this->input->post('observacoesAluno')
        );

        $peso = $dadosAvaliacao['pesoAluno'];
        $altura = $dadosAvaliacao['estaturaAluno'];

        $imcAluno = $peso / ($altura * $altura);
        $dadosAvaliacao['imcAluno'] = $imcAluno;

        if ($this->AvaliacaoFisicaModel->mCadastrarAvaliacaoFisicaAluno($dadosAvaliacao)) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

}
