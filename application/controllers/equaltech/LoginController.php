<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LOGIN.PHP
    public function index() {
        $dados['nomePagina'] = 'Lista de EqualTech';
        $this->load->view('equaltech/login', $dados);
    }
    
    public function cRecuperarSenha() {
        $dados['nomePagina'] = 'Recuperar Senha';
        $this->load->view('sistema/telas/recuperar-senha', $dados);
    } 

    // FUNÇÃO DE VERIFICAÇÃO DAS INFORMAÇÕES PASSADAS PARA REALIZAR O LOGIN NO SISTEMA
    public function cLogarUsuario() {
        // PEGANDO AS INFORMAÇÕES DE LOGIN E SENHA PASSADAS E COLOCANDO EM UM VETOR
        $dadosLogin = array(
            'loginUsuario' => $this->input->post('loginUsuario'),
            'senhaUsuario' => $this->input->post('senhaUsuario')
        );

        // PASSANDO AS INFORMAÇÕES PARA A FUNÇÃO QUE FARÁ A VERIFICAÇÃO NO BANCO DE DADOS
        $dadosUsuario = $this->LoginModel->mLogarUsuario($dadosLogin);
        $dadosEqualTech = $this->LoginModel->mLogarEqualTech($dadosLogin);

        // CONDIÇÕES DAS INFORMAÇÕES PASSADAS PELO USUÁRIO PARA REALIZAR O LOGIN OU NÃO
        // SE HOUVER ALGUM USUÁRIO COM O LOGIN E SENHA PASSADOS NA TABELA EQUALTECH
        if (count($dadosEqualTech) === 1) {
            // PASSANDO AS INFORMAÇÕES DO USUÁRIO PARA UM VETOR
            $dadosUsuarioLogado = get_object_vars($dadosEqualTech[0]);
            $this->session->set_userdata($dadosUsuarioLogado);
            $resposta = array('success' => true);
        }
        // CONDIÇÕES DAS INFORMAÇÕES PASSADAS PELO USUÁRIO PARA REALIZAR O LOGIN OU NÃO
        // SE HOUVER ALGUM USUÁRIO COM O LOGIN E SENHA PASSADOS NA TABELA USUARIOS
        else if (count($dadosUsuario) === 1) {
            // PASSANDO AS INFORMAÇÕES DO USUÁRIO PARA UM VETOR
            $dadosUsuarioLogado = get_object_vars($dadosUsuario[0]);

            // VERIFICANDO SE O STATUS DA ACADEMIA ESTÁ TRUE 
            // PARA QUE O USUÁRIO POSSA LOGAR
            $aux = $this->LoginModel->mVerificarStatusAcademia($dadosUsuarioLogado['idAcademia']);
            $dados = get_object_vars($aux[0]);

            // SE O STATUS ACADEMIA FOR TRUE
            if ($dados['statusAcademia'] == true) {
                // SE O STATUS DA CONTA ESTIVER TRUE, NÃO BLOQUEADO
                if ($dadosUsuarioLogado['statusConta'] == true) {
                    $this->session->set_userdata($dadosUsuarioLogado);
                    $resposta = array('success' => true);
                }
                // SE A CONTA FO USUÁRIO ESTIVER FALSE, BLOQUEADA
                else {
                    $resposta = array('success' => false, 'statusConta' => false);
                }
            }
            // SE O STATUS ACADEMIA FOR FALSE
            else {
                $resposta = array('success' => false, 'statusAcademia' => false);
            }
        }
        // SE NÃO HOUVER NENHUM USUÁRIO COM AS INFORMAÇÕES PASSADAS
        else {
            $resposta = array('success' => false);
        }

        // RETORNANDO AS FUNÇÃO JAVASCRIPT AS INFORMAÇÕES
        echo json_encode($resposta);
    }

    // FUNÇÃO PARA REALIZAR O LOGOUT DO USUÁRIO
    public function cLogoutUsuario() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
