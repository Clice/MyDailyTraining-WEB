<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionarioModel extends CI_Model {

    // FUNÇÃO PARA PEGAR TODOS OS FUNCIONÁRIOS DESBLOQUEADOS
    public function mListarFuncionariosAtivos() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 3);
        $this->db->where('statusConta', TRUE);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA PEGAR TODOS OS FUNCIONÁRIOS BLOQUEADOS
    public function mListarFuncionariosBloqueados() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 3);
        $this->db->where('statusConta', FALSE);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA SABER A QUANTIDADE DE FUNCIONÁRIOS DESBLOQUEADOS
    public function mQtdFuncAtivos($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 3);
        $this->db->where('statusConta', true);
        return $this->db->get('usuarios')->result();
    }

    // FUNÇÃO PARA SABER A QUANTIDADE DE INSTRUTORES BLOQUEADOS
    public function mQtdFuncBloqueados($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 3);
        $this->db->where('statusConta', false);
        return $this->db->get('usuarios')->result();
    }

}
