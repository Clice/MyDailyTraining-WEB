<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PaginaInicialController extends CI_Controller {

    public function index() {
        $this->load->view('apresentacao/pagina-inicial');
    }

    public function viewLogin() {
        $this->load->view('apresentacao/login');
    }

}
