<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdministradorModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function mCadastrarAdministrador($dadosAdministrador) {
        return $this->db->insert('usuarios', $dadosAdministrador);
    }

    public function mEditarAdministrador($dadosAdministrador) {
        $this->db->where('idUsuario', $dadosAdministrador['idUsuario']);
        return $this->db->update('usuarios', $dadosAdministrador);
    }

    public function mExcluirAdministrador($idAdministrador) {
        $this->db->where('idUsuario', $idAdministrador);
        return $this->db->delete('usuarios');
    }

    public function mBloquearAdministrador($idAdministrador) {
        $dadosAdministrador['statusConta'] = false;
        $this->db->where('idUsuario', $idAdministrador);
        return $this->db->update('usuarios', $dadosAdministrador);
    }

    public function mDesbloquearAdministrador($idAdministrador) {
        $dadosAdministrador['statusConta'] = true;
        $this->db->where('idUsuario', $idAdministrador);
        return $this->db->update('usuarios', $dadosAdministrador);
    }

    public function mVisualizarPerfilAdministrador($idAdministrador) {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('idUsuario', $idAdministrador);
        return $this->db->get()->result();
    }

    public function mListarAdministradoresAtivos() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 2);
        $this->db->where('statusConta', TRUE);
        return $this->db->get()->result();
    }

    public function mListarAdministradoresBloqueados() {
        $this->db->select('idUsuario, idAcademia, nomeUsuario, enderecoUsuario, telefoneUsuario');
        $this->db->from('usuarios');
        $this->db->where('idAcademia', $this->session->userdata('idAcademia'));
        $this->db->where('tipoConta', 2);
        $this->db->where('statusConta', FALSE);
        return $this->db->get()->result();
    }

    public function mVerificarCPF($cpfAdministrador) {
        $this->db->from('usuarios');
        $this->db->where('cpfUsuario', $cpfAdministrador);
        return $this->db->get()->result();
    }

}