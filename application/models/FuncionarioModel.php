<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionarioModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

//    public function adicionar($nome, $email, $historico, $user, $senha) {
//        $dados['nome'] = $nome;
//        $dados['email'] = $email;
//        $dados['historico'] = $historico;
//        $dados['user'] = $user;
//        $dados['senha'] = md5($senha);
//        return $this->db->insert('usuario', $dados);
//    }
//
//    public function excluir($id) {
//        $this->db->where('md5(id)', $id);
//        return $this->db->delete('usuario');
//    }

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

    public function mVisualizarPerfilAluno() {
        
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
}