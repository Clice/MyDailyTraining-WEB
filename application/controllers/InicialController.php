<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class InicialController extends CI_Controller {

    // CONSTRUTOR DO INICIAL CONTROLLER
    public function __construct() {
        parent::__construct();
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW PAGINA-INICIAL.PHP
    public function index() {
        $this->load->view('apresentacao/pagina-inicial');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW LOGIN.PHP
    public function vLogin() {
        if ($this->session->userdata('logado') == true) {
            redirect(base_url('pagina-principal'));
        } else {
            $this->load->view('apresentacao/login');
        }
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW RECUPERAR-SENHA.PHP
    public function vRecuperarSenha() {
        $this->load->view('apresentacao/recuperar-senha');
    }

    // FUNÇÃO DE CARREGAMENTO DA VIEW RECUPERAR-SENHA.PHP
    public function vError404() {
        $this->load->view('sistema/templates/html-header');
        $this->load->view('errors/error-404');
        $this->load->view('sistema/templates/html-footer');
    }

}
