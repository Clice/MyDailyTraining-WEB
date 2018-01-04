<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EqualTechModel extends CI_Model {

    public function mListarEqualTechs() {
        $this->db->select('idEqualTech, nomeEqualTech, enderecoEqualTech, telefoneEqualTech');
        $this->db->from('equaltechs');
        return $this->db->get()->result();
    }
    
    public function mEditarEqualTech($dadosEqualTech) {
        $this->db->where('idEqualTech', $dadosEqualTech['idEqualTech']);
        return $this->db->update('equaltechs', $dadosEqualTech);
    }
    
    public function mVisualizarPerfilEqualTech($idEqualTech) {
        $this->db->select('*');
        $this->db->from('equaltechs');
        $this->db->where('md5(idEqualTech)', $idEqualTech);
        return $this->db->get()->result();
    }

}
