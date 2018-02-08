<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AvaliacaoFisicaController extends CI_Controller {

    // CONSTRUTOR DO AVALIACAO FISICA CONTROLLER
    public function __construct() {
        parent::__construct();
        
        if ($this->session->userdata('logado') == true) {
            $this->load->model('AvalicacaoFisicaModel');
        } else {
            redirect(base_url('404_override'));
        }
    }

}
