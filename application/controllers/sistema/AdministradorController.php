<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdministradorController extends CI_Controller {

    public function index() {
        $dados['nomePagina'] = 'Lista de Administradores';
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/listas/lista-administradores');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

    public function viewCadastrarEditarAdministrador() {
        $dados['nomePagina'] = 'Cadastrar Administrador';
        $this->load->view('sistema/templates/html-header', $dados);
        $this->load->view('sistema/templates/header');
        $this->load->view('sistema/templates/side-menu');
        $this->load->view('sistema/telas/cadastros/cadastrar-editar-administrador');
        $this->load->view('sistema/templates/footer');
        $this->load->view('sistema/templates/html-footer');
    }

}
