<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function mLogarUsuario($dadosLogin) {
        $this->db->select('*');
        $this->db->where('loginUsuario', $dadosLogin['loginUsuario']);
        $this->db->where('senhaUsuario', base64_encode($dadosLogin['senhaUsuario']));
        return $this->db->get('usuarios')->result();
    }

    public function mLogarEqualTech($dadosLogin) {
        $this->db->select('*');
        $this->db->where('loginEqualTech', $dadosLogin['loginUsuario']);
        $this->db->where('senhaEqualTech', base64_encode($dadosLogin['senhaUsuario']));
        return $this->db->get('equaltechs')->result();
    }

    public function mVerificarStatusAcademia($idAcademia) {
        $this->db->select('statusAcademia');
        $this->db->from('academias');
        $this->db->where('idAcademia', $idAcademia);
        return $this->db->get()->result();
    }

}
