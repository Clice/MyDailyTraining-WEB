<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FuncionarioModel extends CI_Model {

    public function __construct() {
        parent::__construct();
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

    public function adicionar($nome, $email, $historico, $user, $senha) {
        $dados['nome'] = $nome;
        $dados['email'] = $email;
        $dados['historico'] = $historico;
        $dados['user'] = $user;
        $dados['senha'] = md5($senha);
        return $this->db->insert('usuario', $dados);
    }

    public function excluir($id) {
        $this->db->where('md5(id)', $id);
        return $this->db->delete('usuario');
    }

}
