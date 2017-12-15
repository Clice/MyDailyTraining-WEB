<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __constructor() {
        parent::__constructor();
        $this->load->model('LoginModel');
    }

    public function index() {
        $this->load->view('apresentacao/login');
    }

    /* public function cLogarUsuario() {
        // CAPTURANDO OS DADOS PASSADOS
        $dadosLoginUsuario = array(
            'loginUsuario' => $this->input->post('loginUsuario'),
            'senhaUsuario' => $this->input->post('senhaUsuario')
        );

        // PASSANDO OS DADOS PARA O MODEL PARA LOGAR O USUÁRIO
        if($this->LoginModel->mLogarUsuario($dadosLoginUsuario)) {
            print_r($this->LoginModel->mLogarUsuario($dadosLoginUsuario));
        }
    }*/

    public function cLogarUsuario() {
        $this->load->library('form_validation');

        // PEGANDO DADOS DO USUÁRIO - LOGIN E SENHA
        $this->form_validation->set_rules('loginUsuario', 'login', 'required');
        $this->form_validation->set_rules('senhaUsuario', 'senha', 'required');

        // 
        if ($this->form_validation->run() == false) {
            $this->index();
        } else {
            $loginUsuario = $this->input->post('loginUsuario');
            $senhaUsuario = $this->input->post('senhaUsuario');

            $this->db->where('loginUsuario', $loginUsuario);
            $this->db->where('senhaUsuario', $senhaUsuario);
            $usuarioLogado = $this->db->get('usuarios')->result();

            // SE EXISTE UM USUÁRIO COM O LOGIN E SENHA INFORMADOS IRÁ PARA 
            // A TELA PRINCIPAL
            if (count($usuarioLogado) == 1) {
                $dadosSessao['usuarioLogado'] = $usuarioLogado[0];
                $dadosSessao['estaLogado'] = true;
                $this->session->set_userdata($dadosSessao);
                redirect(base_url('pagina-principal'));
            } 
            // SE NÃO EXISTIR RETORNARÁ PARA A TELA DE LOGIN
            else {
                $dadosSessao['usuarioLogado'] = NULL;
                $dadosSessao['estaLogado'] = FALSE;
                $this->session->set_userdata($dadosSessao);
                redirect(base_url('login'));
            }
        }
    }
}
