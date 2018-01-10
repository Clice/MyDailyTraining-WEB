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
        $dadosUsuario['statusConta'] = false;
        $this->db->where('idUsuario', $idUsuario);
        return $this->db->update('usuarios', $dadosUsuario);
    }

    public function mDesbloquearUsuario($idUsuario) {
        $dadosUsuario['statusConta'] = true;
        $this->db->where('idUsuario', $idUsuario);
        return $this->db->update('usuarios', $dadosUsuario);
    }

    public function mVisualizarPerfilUsuario($idUsuario) {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('md5(idUsuario)', $idUsuario);
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
    
    public function mProcurarCPF($cpfUsuario) {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('cpfUsuario', $cpfUsuario);
        return $this->db->get()->result();
    }
    
    public function mAlterarSenha($dadosUsuario){
        $this->db->where('idUsuario', $dadosUsuario['idUsuario']);
        return $this->db->update('usuarios', $dadosUsuario);
    }

}