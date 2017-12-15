<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EqualTechController extends CI_Controller {

    public function index() {
    	$dados['nomePagina'] = 'Lista de EqualTech';
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-equaltech');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
