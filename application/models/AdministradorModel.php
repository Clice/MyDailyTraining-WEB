<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdministradorModel extends CI_Model {

    // FUNÇÃO PARA PEGAR TODOS OS ADMINISTRADORES DESBLOQUEADOS
    public function mListarAdministradoresAtivos($idAcademia) {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 2);
        $this->db->where('statusConta', TRUE);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA PEGAR TODOS OS ADMINISTRADORES BLOQUEADOS
    public function mListarAdministradoresBloqueados($idAcademia) {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 2);
        $this->db->where('statusConta', FALSE);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA SABER A QUANTIDADE DE ADMINISTRADORES DESBLOQUEADOS
    public function mQtdAdminAtivos($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 2);
        $this->db->where('statusConta', true);
        return $this->db->get('usuarios')->result();
    }

    // FUNÇÃO PARA SABER A QUANTIDADE DE ADMINISTRADORES BLOQUEADOS
    public function mQtdAdminBloqueados($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 2);
        $this->db->where('statusConta', false);
        return $this->db->get('usuarios')->result();
    }
}