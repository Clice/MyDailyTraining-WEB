<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdministradorModel extends CI_Model {

    public function mListarAdministradoresAtivos() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('tipoConta', 2);
        $this->db->where('statusConta', TRUE);
        return $this->db->get()->result();
    }

    public function mListarAdministradoresBloqueados() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('tipoConta', 2);
        $this->db->where('statusConta', FALSE);
        return $this->db->get()->result();
    }

    public function mQtdAdminAtivos($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 2);
        $this->db->where('statusConta', true);
        return $this->db->get('usuarios')->result();
    }

    public function mQtdAdminBloqueados($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 2);
        $this->db->where('statusConta', false);
        return $this->db->get('usuarios')->result();
    }
}