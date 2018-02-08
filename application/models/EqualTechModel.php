<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EqualTechModel extends CI_Model {

    public function mListarEqualTechs() {
        $this->db->select('idUsuario, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('tipoConta', 1);
        return $this->db->get()->result();
    }

    public function mEditarEqualTech($dadosUsuario) {
        $this->db->where('md5(idUsuario)', $dadosUsuario['idUsuario']);
        return $this->db->update('usuarios', $dadosUsuario);
    }

    public function mVisualizarEqualTech($idUsuario) {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('md5(idUsuario)', $idUsuario);
        return $this->db->get()->result();
    }

}
