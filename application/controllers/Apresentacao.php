<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Apresentacao extends CI_Controller {

    public function index() {
        $this->load->view('apresentacao/index');
    }
    
    public function viewQuemSomos() {
        $this->load->view('apresentacao/quem-somos');
    }

}
