<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EqualTechModel extends CI_Model {

	// FUNÇÃO PARA PEGAR TODOS OS EQUALTECHS
    public function mListarEqualTechs() {
        $this->db->select('idUsuario, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('tipoConta', 1);
        return $this->db->get()->result();
    }

}
