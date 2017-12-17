<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AcademiaModel extends CI_Model {

    public function __construct() {
        parent::__construct();
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
        return $this->db->update('academias', $dadosAcademia);
    }

    public function mDesbloquearAcademia($idAcademia) {
        $dadosAcademia['statusAcademia'] = true;
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->update('academias', $dadosAcademia);
    }

    public function mVisualizarPerfilAcademia() {

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

}
