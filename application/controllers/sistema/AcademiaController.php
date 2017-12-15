<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AcademiaController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AcademiaModel');
        // $this->categorias = $this->modelcategorias->listarCategorias();
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LISTA-ACADEMIAS.PHP
    public function index() {
        $dados['nomePagina'] = 'Lista de Academias';
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-academias');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW CADASTRAR-EDITAR-ACADEMIA.PHP
    public function viewCadastrarEditarAcademia() {
        $dados['nomePagina'] = 'Cadastrar Academia';

        // SE UM ID ACADEMIA FOI PASSADO OU NÃO
        // PARA REALIZAR A EDIÇÃO OU O CADASTRO DE UMA ACADEMIA
        if (isset($idAcademia)) {
            $dados['idAcademia'] = $idAcademia;
        } else {
            $dados['idAcademia'] = "novo";
        }

        // CARREGANDO AS VIEWS PARA FORMAR A TELA DE CADASTRO/EDIÇÃO DA ACADEMIA
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-academia');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function viewRelatorio() {
        $dados['nomePagina'] = 'Relatório';
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/relatorio');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function cCadastrarEditarAcademia() {  
        // echo "<script>alert('Entrou controller.');</script>";     
        $this->load->library('form_validation');

        // PEGANDO DADOS DA ACADEMIA
        $this->form_validation->set_rules('nomeAcademia', 'Nome da Academia', 'required');
        $this->form_validation->set_rules('enderecoAcademia', 'Endereço da Academia', 'required');

        // 
        if ($this->form_validation->run() == false) {
            redirect(base_url('cadastrar-editar-academia'));
        } else {
            // PEGANDO TODAS AS INFORMAÇÕES PASSADAS
            $dadosAcademia = array(
                'idAcademia' => $this->input->post('idAcademia'),
                'idPlano' => 1,
                'idPacote' => 1,
                'nomeAcademia' => $this->input->post('nomeAcademia'),
                'cnpjAcademia' => $this->input->post('cnpjAcademia'),
                'enderecoAcademia' => $this->input->post('enderecoAcademia'),
                'estadoAcademia' => $this->input->post('estadoAcademia'),
                'cidadeAcademia' => $this->input->post('cidadeAcademia'),
                'bairroAcademia' => $this->input->post('bairroAcademia'),
                'cepAcademia' => $this->input->post('cepAcademia'),
                'telefoneAcademia' => $this->input->post('telefoneAcademia'),
                'nomeResponsavelAcademia' => $this->input->post('nomeResponsavelAcademia'),
                'emailAcademia' => $this->input->post('emailAcademia'),
                'mensalidadeAcademia' => 50,
                'statusAcademia' => false,
                'qtdTotalLicencas' => 150,
                'qtdLicencasUsadas' => 0,
                'valorTotal' => 600,
                'valorPago' => 0,
                'qtdParcelas' => 12,
                'diaPagamentoAcademia' => 14
            );
            
            if ($dadosAcademia['idAcademia'] == "novo") {
                if ($this->AcademiaModel->mCadastrarAcademia($dadosAcademia)) {
                    $resposta = array('success' => true);
                    // echo "<script>alert('Cadastro realizado com sucesso');</script>";
                    // redirect(base_url('lista-academias'));
                } else {
                    $resposta = array('success' => false);
                    // redirect(base_url('cadastrar-editar-academia'));
                }
            } else {
                if ($this->AcademiaModel->mEditarAcademia($dadosAcademia)) {
                    $resposta = array('success' => true);
                    // echo "<script>alert('Alteração realizada com sucesso');</script>";
                    // redirect(base_url('lista-academias'));
                } else {
                    $resposta = array('success' => false);
                    // redirect(base_url('cadastrar-editar-academia'));
                }
            }
            echo json_encode($resposta);
        }                
    }

}

/*
$dadosAcademia = array(
            'idAcademia' => $this->input->post('idAcademia'),
            'idPlano' => $this->input->post('idPlano'),
            'idPacote' => $this->input->post('idPacote'),
            'nomeAcademia' => $this->input->post('nomeAcademia'),
            'cnpjAcademia' => $this->input->post('cnpjAcademia'),
            'enderecoAcademia' => $this->input->post('enderecoAcademia'),
            'estadoAcademia' => $this->input->post('estadoAcademia'),
            'cidadeAcademia' => $this->input->post('cidadeAcademia'),
            'bairroAcademia' => $this->input->post('bairroAcademia'),
            'cepAcademia' => $this->input->post('cepAcademia'),
            'telefoneAcademia' => $this->input->post('telefoneAcademia'),
            'nomeResponsavelAcademia' => $this->input->post('nomeResponsavelAcademia'),
            'emailAcademia' => $this->input->post('emailAcademia'),
            'mensalidadeAcademia' => $this->input->post('mensalidadeAcademia'),
            'statusAcademia' => $this->input->post('statusAcademia'),
            'qtdTotalLicencas' => $this->input->post('qtdTotalLicencas'),
            'qtdLicencasUsadas' => $this->input->post('qtdLicencasUsadas'),
            'valorTotal' => $this->input->post('valorTotal'),
            'valorPago' => $this->input->post('valorPago'),
            'qtdParcelas' => $this->input->post('qtdParcelas'),
            'diaPagamentoAcademia' => $this->input->post('diaPagamentoAcademia')
        );
*/