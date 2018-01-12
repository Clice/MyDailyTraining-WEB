<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UsuarioModel extends CI_Model {    
    
    // FUNÇÃO PARA BUSCAR OS DADOS PARA REALIAR O LOGIN DO USUÁRIO
    public function mLogarUsuario($dadosLogin) {
        $this->db->select('*');
        $this->db->where('loginUsuario', base64_encode($dadosLogin['loginUsuario']));
        $this->db->where('senhaUsuario', base64_encode($dadosLogin['senhaUsuario']));
        return $this->db->get('usuarios')->result();
    }

    // FUNÇÃO PARA VERIFICAR O STATUS DA ACADEMIA DO USUÁRIO
    public function mVerificarStatusAcademia($idAcademia) {
        $this->db->select('statusAcademia');
        $this->db->from('academias');
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA REALIZAR A INSERÇÃO DAS INFORMAÇÕES DO USUÁRIO NO BANCO
    public function mCadastrarUsuario($dadosUsuario) {
        return $this->db->insert('usuarios', $dadosUsuario);
    }

    // FUNÇÃO PARA ALTERAR AS INFORMAÇÕES DO USUÁRIO NO BANCO
    public function mEditarUsuario($dadosUsuario) {
        $this->db->where('idUsuario', $dadosUsuario['idUsuario']);
        return $this->db->update('usuarios', $dadosUsuario);
    }

    // FUNÇÃO PARA EXCLUIR AS INFORMAÇÕES DO USUÁRIO DO BANCO
    public function mExcluirUsuario($idUsuario) {
        $this->db->where('idUsuario', $idUsuario);
        return $this->db->delete('usuarios');
    }

    // FUNÇÃO PARA ALTERAR O STATUS DA CONTA DO USUÁRIO, O BLOQUEANDO
    public function mBloquearUsuario($idUsuario) {
        $dadosUsuario['statusConta'] = false;
        $this->db->where('idUsuario', $idUsuario);
        return $this->db->update('usuarios', $dadosUsuario);
    }

    // FUNÇÃO PARA ALTERAR O STATUS DA CONTA DO USUÁRIO, O DESBLOQUEANDO
    public function mDesbloquearUsuario($idUsuario) {
        $dadosUsuario['statusConta'] = true;
        $this->db->where('idUsuario', $idUsuario);
        return $this->db->update('usuarios', $dadosUsuario);
    }

    // FUNÇÃO PARA PEGAR OS DADOS DO USUÁRIO
    public function mVisualizarPerfilUsuario($idUsuario) {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('md5(idUsuario)', $idUsuario);
        return $this->db->get()->result();
    }

    // FUNÇÃO PARA IDENTIFICAR SE O CPF PASSADO JÁ EXISTE NO BANCO 
    public function mVerificarCPF($cpfUsuario) {
        $this->db->from('usuarios');
        $this->db->where('cpfUsuario', $cpfUsuario);
        return $this->db->get()->result();
    }
    
    // FUNÇÃO PARA IDENTIFICAR SE O LOGIN PASSADO JÁ EXISTE NO BANCO 
    public function mVerificarLogin($loginUsuario) {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('loginUsuario', $loginUsuario);
        return $this->db->get()->result();
    }
    
    // FUNÇÃO PARA ALTERAR A SENHA
    public function mAlterarSenha($dadosUsuario) {
        $this->db->where('cpfUsuario', $dadosUsuario['cpfUsuario']);
        return $this->db->update('usuarios', $dadosUsuario);
    }

}