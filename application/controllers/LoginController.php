<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    // CONSTRUTOR DO USUÁRIO CONTROLLER
    public function __construct() {
        parent::__construct();
        $this->load->model('UsuarioModel');
    }

    // FUNÇÃO DE VERIFICAÇÃO DAS INFORMAÇÕES PASSADAS PARA REALIZAR O LOGIN NO SISTEMA
    public function cLogarUsuario() {
        // PEGANDO AS INFORMAÇÕES DE LOGIN E SENHA PASSADAS E COLOCANDO EM UM VETOR
        $dadosLogin = array(
            'loginUsuario' => base64_encode($this->input->post('loginUsuario')),
            'senhaUsuario' => base64_encode($this->input->post('senhaUsuario'))
        );

        // PASSANDO AS INFORMAÇÕES PARA A FUNÇÃO QUE FARÁ A VERIFICAÇÃO NO BANCO DE DADOS
        $dadosLoginUsuario = $this->UsuarioModel->mLogarUsuario($dadosLogin);

        // CONDIÇÕES DAS INFORMAÇÕES PASSADAS PELO USUÁRIO PARA REALIZAR O LOGIN OU NÃO
        // SE HOUVER ALGUM USUÁRIO COM O LOGIN E SENHA PASSADOS NA TABELA USUARIOS
        if (count($dadosLoginUsuario) >= 1) {
            // PASSANDO AS INFORMAÇÕES DO USUÁRIO PARA UM VETOR
            $dadosUsuario = get_object_vars($dadosLoginUsuario[0]);

            // SE O TIPO CONTA FOR 1, EQUALTECH
            if ($dadosUsuario['tipoConta'] == 1) {
                // PASSANDO AS INFORMAÇÕES DO USUÁRIO PARA UM VETOR
                $dadosUsuario['logado'] = true;
                $this->session->set_userdata($dadosUsuario);
                $resposta = array('success' => true);
            }
            // SE O TIPO CONTA FOR OUTRO
            else {
                $resposta = $this->cVerificarDadosUsuario($dadosUsuario);
            }
        }
        // SE NÃO HOUVER NENHUM USUÁRIO COM AS INFORMAÇÕES PASSADAS
        else {
            $resposta = array('success' => false);
        }

        // RETORNANDO AS FUNÇÃO JAVASCRIPT AS INFORMAÇÕES
        echo json_encode($resposta);
    }

    // FUNÇÃO DE AUXILIAR PARA REALIZAR O LOGIN DOS USUÁRIOS CUJOS TIPO DE CONTA SEJA DIFERENTES DE 1
    public function cVerificarDadosUsuario($dadosUsuario) {
        // VERIFICANDO SE O STATUS DA ACADEMIA ESTÁ TRUE 
        // PARA QUE O USUÁRIO POSSA LOGAR
        $dadosAux = $this->UsuarioModel->mVerificarStatusAcademia($dadosUsuario['idAcademia']);
        $dadosAcademia = get_object_vars($dadosAux[0]);

        // SE O STATUS ACADEMIA FOR TRUE
        if ($dadosAcademia['statusAcademia'] == true) {
            // SE O STATUS DA CONTA ESTIVER TRUE, NÃO BLOQUEADO
            if ($dadosUsuario['statusConta'] == true) {
                $dadosUsuario['logado'] = true;
                $this->session->set_userdata($dadosUsuario);
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

        return $resposta;
    }   

    // FUNÇÃO PARA REALIZAR O LOGOUT DO USUÁRIO
    public function cLogoutUsuario() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
