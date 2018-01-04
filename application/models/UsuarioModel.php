<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model {

    public function mCadastrarUsuario($dadosUsuario) {
        return $this->db->insert('usuarios', $dadosUsuario);
    }

    public function mEditarUsuario($dadosUsuario) {
        $this->db->where('idUsuario', $dadosUsuario['idUsuario']);
        return $this->db->update('usuarios', $dadosUsuario);
    }

    public function mExcluirUsuario($idUsuario) {
        $this->db->where('idUsuario', $idUsuario);
        return $this->db->delete('usuarios');
    }

    public function mBloquearUsuario($idUsuario) {
        $dadosFuncionario['statusConta'] = false;
        $this->db->where('idUsuario', $idUsuario);
        return $this->db->update('usuarios', $dadosFuncionario);
    }

    public function mDesbloquearUsuario($idUsuario) {
        $dadosFuncionario['statusConta'] = true;
        $this->db->where('idUsuario', $idUsuario);
        return $this->db->update('usuarios', $dadosUsuario);
    }

    public function mVisualizarPerfilUsuario($idUsuario) {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario', $idUsuario);
        return $this->db->get()->result();
    }

    public function mVerificarCPF($cpfUsuario) {
        $this->db->from('usuarios');
        $this->db->where('cpfUsuario', $cpfUsuario);
        return $this->db->get()->result();
    }
    
    public function mVerificarLogin($loginUsuario) {
        $this->db->from('usuarios');
        $this->db->where('loginUsuario', $loginUsuario);
        return $this->db->get()->result();
    }

}