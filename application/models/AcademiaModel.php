<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AcademiaModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('AdministradorModel');
        $this->load->model('FuncionarioModel');
        $this->load->model('InstrutorModel');
        $this->load->model('AlunoModel');
    }

    public function mCadastrarAcademia($dadosAcademia) {
        return $this->db->insert('academias', $dadosAcademia);
    }

    public function mEditarAcademia($dadosAcademia) {
        $this->db->where('idAcademia', $dadosAcademia['idAcademia']);
        return $this->db->update('academias', $dadosAcademia);
    }

    public function mExcluirAcademia($idAcademia) {
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->delete('academias');
    }

    public function mBloquearAcademia($idAcademia) {
        $dadosAcademia['statusAcademia'] = false;
        $this->db->where('idAcademia', $idAcademia);
        $this->AdministradorModel->mBloquearAdministrador($idAcademia);
        return $this->db->update('academias', $dadosAcademia);
    }

    public function mDesbloquearAcademia($idAcademia) {
        $dadosAcademia['statusAcademia'] = true;
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->update('academias', $dadosAcademia);
    }

    public function mVisualizarPerfilAcademia($idAcademia) {
        $this->db->select('*');
        $this->db->from('academias');
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->get()->result();
    }

    public function mListarAcademiasAtivas() {
        $this->db->select('idAcademia, nomeAcademia, enderecoAcademia, 
            telefoneAcademia, cnpjAcademia');
        $this->db->from('academias');
        $this->db->where('statusAcademia', true);
        return $this->db->get()->result();
    }

    public function mListarAcademiasBloqueadas() {
        $this->db->select('idAcademia, nomeAcademia, enderecoAcademia, 
            telefoneAcademia, cnpjAcademia');
        $this->db->from('academias');
        $this->db->where('statusAcademia', false);
        return $this->db->get()->result();
    }

    public function mVerificarCNPJ($cnpjAcademia) {
        $this->db->from('academias');
        $this->db->where('cnpjAcademia', $cnpjAcademia);
        return $this->db->get()->result();
    }

    public function mQtdAcademiasAtivas($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('statusAcademia', true);
        return $this->db->get('academias')->result();
    }

    public function mQtdAcademiasBloqueadas($idAcademia) {
        if ($idAcademia > 0) {
            $this->db->where('idAcademia', $idAcademia);
        }
        $this->db->where('statusAcademia', false);
        return $this->db->get('academias')->result();
    }

}
