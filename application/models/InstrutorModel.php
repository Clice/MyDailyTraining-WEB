<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class InstrutorModel extends CI_Model {

    // FUNÇÃO PARA BUSCAR TODOS OS INSTRUTORES DESBLOQUEADOS
    public function mListarInstrutoresAtivos() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 4);
        $this->db->where('statusConta', TRUE);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA BUSCAR TODOS OS INSTRUTORES BLOQUEADOS
    public function mListarInstrutoresBloqueados() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 4);
        $this->db->where('statusConta', FALSE);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA SABER A QUANTIDADE DE INSTRUTORES DESBLOQUEADOS
    public function mQtdInstAtivos($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 4);
        $this->db->where('statusConta', true);
        return $this->db->get('usuarios')->result();
    }
    
    // FUNÇÃO PARA SABER A QUANTIDADE DE INSTRUTORES BLOQUEADOS
    public function mQtdInstBloqueados($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 4);
        $this->db->where('statusConta', false);
        return $this->db->get('usuarios')->result();
    }

}
