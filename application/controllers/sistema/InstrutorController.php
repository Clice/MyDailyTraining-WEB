<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class InstrutorController extends CI_Controller {

    public function index() {
        $this->load->view('sistema/templates/html-header');
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-instrutores');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function viewCadastrarInstrutor() {
        $this->load->view('sistema/templates/html-header');
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-instrutor');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
