<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PaginaPrincipalController extends CI_Controller {

    public function index() {
        $this->load->view('sistema/templates/html-header');
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/pagina-principal');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function viewPerfil() {
        $this->load->view('sistema/templates/html-header');
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/perfil');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function viewNotificacoes() {
        $this->load->view('sistema/templates/html-header');
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/notificacoes');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
