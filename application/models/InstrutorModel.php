<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class InstrutorModel extends CI_Model {

    public function mCadastrarInstrutor($dadosInstrutor) {
        return $this->db->insert('usuarios', $dadosInstrutor);
    }

    public function mEditarInstrutor($dadosInstrutor) {
        $this->db->where('idUsuario', $dadosInstrutor['idUsuario']);
        return $this->db->update('usuarios', $dadosInstrutor);
    }

    public function mExcluirInstrutor($idInstrutor) {
        $this->db->where('idUsuario', $idInstrutor);
        return $this->db->delete('usuarios');
    }

    public function mBloquearInstrutor($idInstrutor) {
        $dadosInstrutor['statusConta'] = false;
        $this->db->where('idUsuario', $idInstrutor);
        return $this->db->update('usuarios', $dadosInstrutor);
    }

    public function mDesbloquearInstrutor($idInstrutor) {
        $dadosInstrutor['statusConta'] = true;
        $this->db->where('idUsuario', $idInstrutor);
        return $this->db->update('usuarios', $dadosInstrutor);
    }

    public function mVisualizarPerfilInstrutor($idInstrutor) {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario', $idInstrutor);
        return $this->db->get()->result();
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

    public function mVerificarCPF($cpfInstrutor) {
        $this->db->from('usuarios');
        $this->db->where('cpfUsuario', $cpfInstrutor);
        return $this->db->get()->result();
    }
    
    public function mVerificarLogin($loginUsuario) {
        $this->db->from('usuarios');
        $this->db->where('loginUsuario', $loginUsuario);
        return $this->db->get()->result();
    }

    public function mQtdInstAtivos($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 4);
        $this->db->where('statusConta', true);
        return $this->db->get('usuarios')->result();
    }
    
    public function mQtdInstBloqueados($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 4);
        $this->db->where('statusConta', false);
        return $this->db->get('usuarios')->result();
    }

}
