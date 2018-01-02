<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionarioModel extends CI_Model {

    public function mCadastrarFuncionario($dadosFuncionario) {
        return $this->db->insert('usuarios', $dadosFuncionario);
    }

    public function mEditarFuncionario($dadosFuncionario) {
        $this->db->where('idUsuario', $dadosFuncionario['idUsuario']);
        return $this->db->update('usuarios', $dadosFuncionario);
    }

    public function mExcluirFuncionario($idFuncionario) {
        $this->db->where('idUsuario', $idFuncionario);
        return $this->db->delete('usuarios');
    }

    public function mBloquearFuncionario($idFuncionario) {
        $dadosFuncionario['statusConta'] = false;
        $this->db->where('idUsuario', $idFuncionario);
        return $this->db->update('usuarios', $dadosFuncionario);
    }

    public function mDesbloquearFuncionario($idFuncionario) {
        $dadosFuncionario['statusConta'] = true;
        $this->db->where('idUsuario', $idFuncionario);
        return $this->db->update('usuarios', $dadosFuncionario);
    }

    public function mVisualizarPerfilFuncionario($idFuncionario) {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario', $idFuncionario);
        return $this->db->get()->result();
    }

    public function mListarFuncionariosAtivos() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 3);
        $this->db->where('statusConta', TRUE);
        return $this->db->get()->result();
    }

    public function mListarFuncionariosBloqueados() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 3);
        $this->db->where('statusConta', FALSE);
        return $this->db->get()->result();
    }

    public function mVerificarCPF($cpfFuncionario) {
        $this->db->from('usuarios');
        $this->db->where('cpfUsuario', $cpfFuncionario);
        return $this->db->get()->result();
    }
    
    public function mVerificarLogin($loginUsuario) {
        $this->db->from('usuarios');
        $this->db->where('loginUsuario', $loginUsuario);
        return $this->db->get()->result();
    }

    public function mQtdFuncAtivos($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 3);
        $this->db->where('statusConta', true);
        return $this->db->get('usuarios')->result();
    }

    public function mQtdFuncBloqueados($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('tipoConta', 3);
        $this->db->where('statusConta', false);
        return $this->db->get('usuarios')->result();
    }

}
