<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class InicialController extends CI_Controller {

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW PAGINA-INICIAL.PHP
    public function index() {
        $this->load->view('apresentacao/pagina-inicial');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW LOGIN.PHP
    public function vLogin() {
        if ($this->session->userdata('logado') == true) {
            redirect(base_url('pagina-principal'));
        } else {
            $this->load->view('apresentacao/login');
        }
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW RECUPERAR-SENHA.PHP
    public function vRecuperarSenha() {
        $this->load->view('apresentacao/recuperar-senha');
    }

    // FUNÇÃO CONTROLLER DE CARREGAMENTO DA VIEW RECUPERAR-SENHA.PHP
    public function vError404() {
        $dados['nomePagina'] = "Erro 404";
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('errors/error-404');
        $this->load->view('sistema/templates/html-footer');
    }

    // FUNÇÃO CONTROLLER PARA VERIFICAÇÃO DAS INFORMAÇÕES PASSADAS PARA REALIZAR O LOGIN NO SISTEMA
    public function cLogarUsuario() {
        $this->load->model('UsuarioModel');

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

    // FUNÇÃO CONTROLLER PARA AUXILIAR PARA REALIZAR O LOGIN DOS USUÁRIOS 
    // CUJOS TIPO DE CONTA SEJA DIFERENTES DE 1
    public function cVerificarDadosUsuario($dadosUsuario) {
        $this->load->model('UsuarioModel');

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

    // FUNÇÃO CONTROLLER PARA REALIZAR O LOGOUT DO USUÁRIO
    public function cLogoutUsuario() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function cEnviarEmailContato() {

        $this->load->library('email');

        $nomeContato = $this->input->post('nomeContato');
        $emailContato = $this->input->post('emailContato');
        $telefoneContato = $this->input->post('telefoneContato');
        $mensagemContato = $this->input->post('mensagemContato');

        $config['protocol'] = 'mail';
        $config['wordwrap'] = TRUE;
        $config['validate'] = TRUE;
        $config['mailtype'] = 'text';

        $this->email->initialize($config);

        $this->email->from($emailContato, $nomeContato);
        $this->email->to('contato@mydailytraining.com.br', 'EqualTech');
        $this->email->subject('Contato - ' . $nomeContato);
        $this->email->message($mensagemContato . '\nTelefone: ' . $telefoneContato);

        if ($this->email->send()) {
            $resposta = array('success' => true);
        } else {
            $resposta = array('success' => false);
        }

        echo json_encode($resposta);
    }

}
