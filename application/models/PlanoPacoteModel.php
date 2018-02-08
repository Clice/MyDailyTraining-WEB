<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PlanoPacoteModel extends CI_Model {

    // FUNÇÃO PARA PEGAR AS INFORMAÇÕES DO PLANO DA ACADEMIA
    public function mQtdLicencasPlano($idPlano) {
        $this->db->select('qtdLicencas');
        $this->db->from('planos');
        $this->db->where('idPlano', $idPlano);
        return $this->db->get()->result();
    }
    
    // FUNÇÃO PARA PEGAR AS INFORMAÇÕES DO PACOTE DA ACADEMIA
    public function mQtdLicencasPacote($idPacote) {
        $this->db->select('qtdLicencas');
        $this->db->from('pacotes');
        $this->db->where('idPacote', $idPacote);
        return $this->db->get()->result();
    }

}
