<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class InstrutorModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function mListarInstrutoresAtivos() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 4);
        $this->db->where('statusConta', TRUE);
        return $this->db->get()->result();
    }

    public function mListarInstrutoresBloqueados() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 4);
        $this->db->where('statusConta', FALSE);
        return $this->db->get()->result();
    }
}
