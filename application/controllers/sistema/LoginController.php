<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LOGIN
    public function index() {
        $this->load->view('apresentacao/login');
    }

    // FUNÇÃO DE VERIFICAÇÃO DAS INFORMAÇÕES PASSADAS PARA REALIZAR O LOGIN NO SISTEMA
    public function cLogarUsuario() {
        // PEGANDO AS INFORMAÇÕES DE LOGIN E SENHA PASSADAS E COLOCANDO EM UM VETOR
        $dadosLogin = array(
            'loginUsuario' => $this->input->post('loginUsuario'),
            'senhaUsuario' => $this->input->post('senhaUsuario')
        );

        // PASSANDO AS INFORMAÇÕES PARA A FUNÇÃO QUE FARÁ A VERIFICAÇÃO NO BANCO DE DADOS
        $dadosAux = $this->LoginModel->mLogarUsuario($dadosLogin);

        // CONDIÇÕES DAS INFORMAÇÕES PASSADAS PELO USUÁRIO PARA REALIZAR O LOGIN OU NÃO
        // SE HOUVER ALGUM USUÁRIO COM O LOGIN E SENHA PASSADOS
        if (count($dadosAux) === 1) {
            // PASSANDO AS INFORMAÇÕES DO USUÁRIO PARA UM VETOR
            $dadosUsuarioLogado = get_object_vars($dadosAux[0]);

            // SE O STATUS DA CONTA ESTIVER TRUE, NÃO BLOQUEADO
            if ($dadosUsuarioLogado['statusConta'] == 1) {
                $resposta = $this->cVerificarTipoConta($dadosUsuarioLogado);
            }
            // SE A CONTA FO USUÁRIO ESTIVER FALSE, BLOQUEADA
            else {
                $resposta = array('success' => false, 'statusConta' => false);
            }
        }
        // SE NÃO HOUVER NENHUM USUÁRIO COM AS INFORMAÇÕES PASSADAS
        else {
            $resposta = array('success' => false);
        }

        // RETORNANDO AS FUNÇÃO JAVASCRIPT AS INFORMAÇÕES
        echo json_encode($resposta);
    }

    public function cVerificarTipoConta($dadosUsuarioLogado) {
        // SE O TIPO DE CONTA FOR 1, EQUALTECH
        if ($dadosUsuarioLogado['tipoConta'] == 1) {
            $resposta = array('success' => true, 'statusConta' => true, 'tipoConta' => 1);
        }
        // SE O TIPO DE CONTA FOR 2, ADMINISTRADOR
        else if ($dadosUsuarioLogado['tipoConta'] == 2) {
            $resposta = array('success' => true, 'statusConta' => true, 'tipoConta' => 2);
        }
        // SE O TIPO DE CONTA FOR 3, FUNCIONÁRIO
        else if ($dadosUsuarioLogado['tipoConta'] == 3) {
            $resposta = array('success' => true, 'statusConta' => true, 'tipoConta' => 3);
        }
        // SE O TIPO DE CONTA DOR 4, INSTRUTOR
        else if ($dadosUsuarioLogado['tipoConta'] == 4) {
            $resposta = array('success' => true, 'statusConta' => true, 'tipoConta' => 4);
        }
        // SETANDO A SESSÃO DO USUÁRIO
        $this->session->set_userdata($dadosUsuarioLogado);

        // RETORNANDO UM VETOR COM AS INFORMAÇÕES
        return $resposta;
    }

}
